<?php

declare(strict_types=1);

/**
 * |------
 * | ! Generated code !
 * | Altering this code will result in changes being overwritten |
 * |-------------------------------------------------------------|.
 */

namespace Paddle\SDK\Notifications\Entities\Subscription;

use Paddle\SDK\Notifications\Entities\DateTime;
use Paddle\SDK\Notifications\Entities\Product;

class SubscriptionItem
{
    private function __construct(
        public SubscriptionItemStatus $status,
        public int $quantity,
        public bool $recurring,
        public \DateTimeInterface $createdAt,
        public \DateTimeInterface $updatedAt,
        public \DateTimeInterface|null $previouslyBilledAt,
        public \DateTimeInterface|null $nextBilledAt,
        public SubscriptionTimePeriod|null $trialDates,
        public SubscriptionPrice $price,
        public Product|null $product,
    ) {
    }

    public static function from(array $data): self
    {
        return new self(
            status: SubscriptionItemStatus::from($data['status']),
            quantity: $data['quantity'],
            recurring: $data['recurring'],
            createdAt: DateTime::from($data['created_at']),
            updatedAt: DateTime::from($data['updated_at']),
            previouslyBilledAt: isset($data['previously_billed_at'])
                ? DateTime::from($data['previously_billed_at'])
                : null,
            nextBilledAt: isset($data['next_billed_at'])
                ? DateTime::from($data['next_billed_at'])
                : null,
            trialDates: isset($data['trial_dates']) ? SubscriptionTimePeriod::from($data['trial_dates']) : null,
            price: SubscriptionPrice::from($data['price']),
            product: isset($data['product']) ? Product::from($data['product']) : null,
        );
    }
}