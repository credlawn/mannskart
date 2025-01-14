<?php

namespace App\Helpers\Classes;

use App\Domains\Entity\Enums\EntityEnum;
use App\Domains\Entity\Models\Entity;
use App\Models\Plan;
use App\Models\User;
use RuntimeException;

class EntityRemover
{
    public static function removeEntity(string $entitySlug): void
    {
        // Check if the entity exists in EntityEnum before deletion
        if (EntityEnum::tryFrom(str_replace('__', '.', $entitySlug))) {
            throw new RuntimeException('Entity exists in EntityEnum. Please remove it from there first.');
        }

        self::removeFromDatabase($entitySlug);
    }

    private static function removeFromDatabase(string $entitySlug): void
    {
        self::removeFromEntityTable($entitySlug);
        self::removeFromTable(Plan::all(), 'ai_models', $entitySlug);
        self::removeFromTable(User::all(), 'entity_credits', $entitySlug);
    }

    private static function removeFromEntityTable(string $entitySlug): void
    {
        Entity::where('key', $entitySlug)->delete();
    }

    private static function removeFromTable(iterable $records, string $attribute, string $entitySlug): void
    {
        $savedKey = null;

        foreach ($records as $record) {
            $data = $record->{$attribute};

            if ($savedKey === null) {
                foreach ($data ?? [] as $key => $value) {
                    if (isset($value[$entitySlug])) {
                        $savedKey = $key; // Save the key for future iterations

                        break;
                    }
                }
            } elseif (isset($data[$savedKey][$entitySlug])) {
                unset($data[$savedKey][$entitySlug]);
                $record->{$attribute} = $data;
                $record->save();
            }
        }
    }
}
