<?php
/**
 * SubscriptionCreateRequest
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Webhooks
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Webhooks Webhooks
 *
 * Provides a way for apps to subscribe to certain change events in HubSpot. Once configured, apps will receive event payloads containing details about the changes at a specified target URL. There can only be one target URL for receiving event notifications per app.
 *
 * The version of the OpenAPI document: v3
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 7.3.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace HubSpot\Client\Webhooks\Model;

use \ArrayAccess;
use \HubSpot\Client\Webhooks\ObjectSerializer;

/**
 * SubscriptionCreateRequest Class Doc Comment
 *
 * @category Class
 * @description New webhook settings for an app.
 * @package  HubSpot\Client\Webhooks
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class SubscriptionCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'SubscriptionCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'object_type_id' => 'string',
        'property_name' => 'string',
        'active' => 'bool',
        'event_type' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'object_type_id' => null,
        'property_name' => null,
        'active' => null,
        'event_type' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'object_type_id' => false,
        'property_name' => false,
        'active' => false,
        'event_type' => false
    ];

    /**
      * If a nullable field gets set to null, insert it here
      *
      * @var boolean[]
      */
    protected array $openAPINullablesSetToNull = [];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats;
    }

    /**
     * Array of nullable properties
     *
     * @return array
     */
    protected static function openAPINullables(): array
    {
        return self::$openAPINullables;
    }

    /**
     * Array of nullable field names deliberately set to null
     *
     * @return boolean[]
     */
    private function getOpenAPINullablesSetToNull(): array
    {
        return $this->openAPINullablesSetToNull;
    }

    /**
     * Setter - Array of nullable field names deliberately set to null
     *
     * @param boolean[] $openAPINullablesSetToNull
     */
    private function setOpenAPINullablesSetToNull(array $openAPINullablesSetToNull): void
    {
        $this->openAPINullablesSetToNull = $openAPINullablesSetToNull;
    }

    /**
     * Checks if a property is nullable
     *
     * @param string $property
     * @return bool
     */
    public static function isNullable(string $property): bool
    {
        return self::openAPINullables()[$property] ?? false;
    }

    /**
     * Checks if a nullable property is set to null.
     *
     * @param string $property
     * @return bool
     */
    public function isNullableSetToNull(string $property): bool
    {
        return in_array($property, $this->getOpenAPINullablesSetToNull(), true);
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'object_type_id' => 'objectTypeId',
        'property_name' => 'propertyName',
        'active' => 'active',
        'event_type' => 'eventType'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'object_type_id' => 'setObjectTypeId',
        'property_name' => 'setPropertyName',
        'active' => 'setActive',
        'event_type' => 'setEventType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'object_type_id' => 'getObjectTypeId',
        'property_name' => 'getPropertyName',
        'active' => 'getActive',
        'event_type' => 'getEventType'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
    }

    /**
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$openAPIModelName;
    }

    public const EVENT_TYPE_CONTACT_PROPERTY_CHANGE = 'contact.propertyChange';
    public const EVENT_TYPE_COMPANY_PROPERTY_CHANGE = 'company.propertyChange';
    public const EVENT_TYPE_DEAL_PROPERTY_CHANGE = 'deal.propertyChange';
    public const EVENT_TYPE_TICKET_PROPERTY_CHANGE = 'ticket.propertyChange';
    public const EVENT_TYPE_PRODUCT_PROPERTY_CHANGE = 'product.propertyChange';
    public const EVENT_TYPE_LINE_ITEM_PROPERTY_CHANGE = 'line_item.propertyChange';
    public const EVENT_TYPE_CONTACT_CREATION = 'contact.creation';
    public const EVENT_TYPE_CONTACT_DELETION = 'contact.deletion';
    public const EVENT_TYPE_CONTACT_PRIVACY_DELETION = 'contact.privacyDeletion';
    public const EVENT_TYPE_COMPANY_CREATION = 'company.creation';
    public const EVENT_TYPE_COMPANY_DELETION = 'company.deletion';
    public const EVENT_TYPE_DEAL_CREATION = 'deal.creation';
    public const EVENT_TYPE_DEAL_DELETION = 'deal.deletion';
    public const EVENT_TYPE_TICKET_CREATION = 'ticket.creation';
    public const EVENT_TYPE_TICKET_DELETION = 'ticket.deletion';
    public const EVENT_TYPE_PRODUCT_CREATION = 'product.creation';
    public const EVENT_TYPE_PRODUCT_DELETION = 'product.deletion';
    public const EVENT_TYPE_LINE_ITEM_CREATION = 'line_item.creation';
    public const EVENT_TYPE_LINE_ITEM_DELETION = 'line_item.deletion';
    public const EVENT_TYPE_CONVERSATION_CREATION = 'conversation.creation';
    public const EVENT_TYPE_CONVERSATION_DELETION = 'conversation.deletion';
    public const EVENT_TYPE_CONVERSATION_NEW_MESSAGE = 'conversation.newMessage';
    public const EVENT_TYPE_CONVERSATION_PRIVACY_DELETION = 'conversation.privacyDeletion';
    public const EVENT_TYPE_CONVERSATION_PROPERTY_CHANGE = 'conversation.propertyChange';
    public const EVENT_TYPE_CONTACT_MERGE = 'contact.merge';
    public const EVENT_TYPE_COMPANY_MERGE = 'company.merge';
    public const EVENT_TYPE_DEAL_MERGE = 'deal.merge';
    public const EVENT_TYPE_TICKET_MERGE = 'ticket.merge';
    public const EVENT_TYPE_PRODUCT_MERGE = 'product.merge';
    public const EVENT_TYPE_LINE_ITEM_MERGE = 'line_item.merge';
    public const EVENT_TYPE_CONTACT_RESTORE = 'contact.restore';
    public const EVENT_TYPE_COMPANY_RESTORE = 'company.restore';
    public const EVENT_TYPE_DEAL_RESTORE = 'deal.restore';
    public const EVENT_TYPE_TICKET_RESTORE = 'ticket.restore';
    public const EVENT_TYPE_PRODUCT_RESTORE = 'product.restore';
    public const EVENT_TYPE_LINE_ITEM_RESTORE = 'line_item.restore';
    public const EVENT_TYPE_CONTACT_ASSOCIATION_CHANGE = 'contact.associationChange';
    public const EVENT_TYPE_COMPANY_ASSOCIATION_CHANGE = 'company.associationChange';
    public const EVENT_TYPE_DEAL_ASSOCIATION_CHANGE = 'deal.associationChange';
    public const EVENT_TYPE_TICKET_ASSOCIATION_CHANGE = 'ticket.associationChange';
    public const EVENT_TYPE_LINE_ITEM_ASSOCIATION_CHANGE = 'line_item.associationChange';
    public const EVENT_TYPE_OBJECT_PROPERTY_CHANGE = 'object.propertyChange';
    public const EVENT_TYPE_OBJECT_CREATION = 'object.creation';
    public const EVENT_TYPE_OBJECT_DELETION = 'object.deletion';
    public const EVENT_TYPE_OBJECT_MERGE = 'object.merge';
    public const EVENT_TYPE_OBJECT_RESTORE = 'object.restore';
    public const EVENT_TYPE_OBJECT_ASSOCIATION_CHANGE = 'object.associationChange';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getEventTypeAllowableValues()
    {
        return [
            self::EVENT_TYPE_CONTACT_PROPERTY_CHANGE,
            self::EVENT_TYPE_COMPANY_PROPERTY_CHANGE,
            self::EVENT_TYPE_DEAL_PROPERTY_CHANGE,
            self::EVENT_TYPE_TICKET_PROPERTY_CHANGE,
            self::EVENT_TYPE_PRODUCT_PROPERTY_CHANGE,
            self::EVENT_TYPE_LINE_ITEM_PROPERTY_CHANGE,
            self::EVENT_TYPE_CONTACT_CREATION,
            self::EVENT_TYPE_CONTACT_DELETION,
            self::EVENT_TYPE_CONTACT_PRIVACY_DELETION,
            self::EVENT_TYPE_COMPANY_CREATION,
            self::EVENT_TYPE_COMPANY_DELETION,
            self::EVENT_TYPE_DEAL_CREATION,
            self::EVENT_TYPE_DEAL_DELETION,
            self::EVENT_TYPE_TICKET_CREATION,
            self::EVENT_TYPE_TICKET_DELETION,
            self::EVENT_TYPE_PRODUCT_CREATION,
            self::EVENT_TYPE_PRODUCT_DELETION,
            self::EVENT_TYPE_LINE_ITEM_CREATION,
            self::EVENT_TYPE_LINE_ITEM_DELETION,
            self::EVENT_TYPE_CONVERSATION_CREATION,
            self::EVENT_TYPE_CONVERSATION_DELETION,
            self::EVENT_TYPE_CONVERSATION_NEW_MESSAGE,
            self::EVENT_TYPE_CONVERSATION_PRIVACY_DELETION,
            self::EVENT_TYPE_CONVERSATION_PROPERTY_CHANGE,
            self::EVENT_TYPE_CONTACT_MERGE,
            self::EVENT_TYPE_COMPANY_MERGE,
            self::EVENT_TYPE_DEAL_MERGE,
            self::EVENT_TYPE_TICKET_MERGE,
            self::EVENT_TYPE_PRODUCT_MERGE,
            self::EVENT_TYPE_LINE_ITEM_MERGE,
            self::EVENT_TYPE_CONTACT_RESTORE,
            self::EVENT_TYPE_COMPANY_RESTORE,
            self::EVENT_TYPE_DEAL_RESTORE,
            self::EVENT_TYPE_TICKET_RESTORE,
            self::EVENT_TYPE_PRODUCT_RESTORE,
            self::EVENT_TYPE_LINE_ITEM_RESTORE,
            self::EVENT_TYPE_CONTACT_ASSOCIATION_CHANGE,
            self::EVENT_TYPE_COMPANY_ASSOCIATION_CHANGE,
            self::EVENT_TYPE_DEAL_ASSOCIATION_CHANGE,
            self::EVENT_TYPE_TICKET_ASSOCIATION_CHANGE,
            self::EVENT_TYPE_LINE_ITEM_ASSOCIATION_CHANGE,
            self::EVENT_TYPE_OBJECT_PROPERTY_CHANGE,
            self::EVENT_TYPE_OBJECT_CREATION,
            self::EVENT_TYPE_OBJECT_DELETION,
            self::EVENT_TYPE_OBJECT_MERGE,
            self::EVENT_TYPE_OBJECT_RESTORE,
            self::EVENT_TYPE_OBJECT_ASSOCIATION_CHANGE,
        ];
    }

    /**
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->setIfExists('object_type_id', $data ?? [], null);
        $this->setIfExists('property_name', $data ?? [], null);
        $this->setIfExists('active', $data ?? [], null);
        $this->setIfExists('event_type', $data ?? [], null);
    }

    /**
    * Sets $this->container[$variableName] to the given data or to the given default Value; if $variableName
    * is nullable and its value is set to null in the $fields array, then mark it as "set to null" in the
    * $this->openAPINullablesSetToNull array
    *
    * @param string $variableName
    * @param array  $fields
    * @param mixed  $defaultValue
    */
    private function setIfExists(string $variableName, array $fields, $defaultValue): void
    {
        if (self::isNullable($variableName) && array_key_exists($variableName, $fields) && is_null($fields[$variableName])) {
            $this->openAPINullablesSetToNull[] = $variableName;
        }

        $this->container[$variableName] = $fields[$variableName] ?? $defaultValue;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['event_type'] === null) {
            $invalidProperties[] = "'event_type' can't be null";
        }
        $allowedValues = $this->getEventTypeAllowableValues();
        if (!is_null($this->container['event_type']) && !in_array($this->container['event_type'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'event_type', must be one of '%s'",
                $this->container['event_type'],
                implode("', '", $allowedValues)
            );
        }

        return $invalidProperties;
    }

    /**
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        return count($this->listInvalidProperties()) === 0;
    }


    /**
     * Gets object_type_id
     *
     * @return string|null
     */
    public function getObjectTypeId()
    {
        return $this->container['object_type_id'];
    }

    /**
     * Sets object_type_id
     *
     * @param string|null $object_type_id object_type_id
     *
     * @return self
     */
    public function setObjectTypeId($object_type_id)
    {
        if (is_null($object_type_id)) {
            throw new \InvalidArgumentException('non-nullable object_type_id cannot be null');
        }
        $this->container['object_type_id'] = $object_type_id;

        return $this;
    }

    /**
     * Gets property_name
     *
     * @return string|null
     */
    public function getPropertyName()
    {
        return $this->container['property_name'];
    }

    /**
     * Sets property_name
     *
     * @param string|null $property_name The internal name of the property to monitor for changes. Only applies when `eventType` is `propertyChange`.
     *
     * @return self
     */
    public function setPropertyName($property_name)
    {
        if (is_null($property_name)) {
            throw new \InvalidArgumentException('non-nullable property_name cannot be null');
        }
        $this->container['property_name'] = $property_name;

        return $this;
    }

    /**
     * Gets active
     *
     * @return bool|null
     */
    public function getActive()
    {
        return $this->container['active'];
    }

    /**
     * Sets active
     *
     * @param bool|null $active Determines if the subscription is active or paused. Defaults to false.
     *
     * @return self
     */
    public function setActive($active)
    {
        if (is_null($active)) {
            throw new \InvalidArgumentException('non-nullable active cannot be null');
        }
        $this->container['active'] = $active;

        return $this;
    }

    /**
     * Gets event_type
     *
     * @return string
     */
    public function getEventType()
    {
        return $this->container['event_type'];
    }

    /**
     * Sets event_type
     *
     * @param string $event_type Type of event to listen for. Can be one of `create`, `delete`, `deletedForPrivacy`, or `propertyChange`.
     *
     * @return self
     */
    public function setEventType($event_type)
    {
        if (is_null($event_type)) {
            throw new \InvalidArgumentException('non-nullable event_type cannot be null');
        }
        $allowedValues = $this->getEventTypeAllowableValues();
        if (!in_array($event_type, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'event_type', must be one of '%s'",
                    $event_type,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['event_type'] = $event_type;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset): bool
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed|null
     */
    #[\ReturnTypeWillChange]
    public function offsetGet($offset)
    {
        return $this->container[$offset] ?? null;
    }

    /**
     * Sets value based on offset.
     *
     * @param int|null $offset Offset
     * @param mixed    $value  Value to be set
     *
     * @return void
     */
    public function offsetSet($offset, $value): void
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset): void
    {
        unset($this->container[$offset]);
    }

    /**
     * Serializes the object to a value that can be serialized natively by json_encode().
     * @link https://www.php.net/manual/en/jsonserializable.jsonserialize.php
     *
     * @return mixed Returns data which can be serialized by json_encode(), which is a value
     * of any type other than a resource.
     */
    #[\ReturnTypeWillChange]
    public function jsonSerialize()
    {
       return ObjectSerializer::sanitizeForSerialization($this);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        return json_encode(
            ObjectSerializer::sanitizeForSerialization($this),
            JSON_PRETTY_PRINT
        );
    }

    /**
     * Gets a header-safe presentation of the object
     *
     * @return string
     */
    public function toHeaderValue()
    {
        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

