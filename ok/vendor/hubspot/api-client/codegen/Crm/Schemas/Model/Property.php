<?php
/**
 * Property
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Schemas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Schemas
 *
 * The CRM uses schemas to define how custom objects should store and represent information in the HubSpot CRM. Schemas define details about an object's type, properties, and associations. The schema can be uniquely identified by its **object type ID**.
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

namespace HubSpot\Client\Crm\Schemas\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Schemas\ObjectSerializer;

/**
 * Property Class Doc Comment
 *
 * @category Class
 * @description Defines a property
 * @package  HubSpot\Client\Crm\Schemas
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class Property implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Property';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'hidden' => 'bool',
        'display_order' => 'int',
        'description' => 'string',
        'show_currency_symbol' => 'bool',
        'type' => 'string',
        'hubspot_defined' => 'bool',
        'created_at' => '\DateTime',
        'archived' => 'bool',
        'options' => '\HubSpot\Client\Crm\Schemas\Model\Option[]',
        'has_unique_value' => 'bool',
        'calculated' => 'bool',
        'external_options' => 'bool',
        'updated_at' => '\DateTime',
        'created_user_id' => 'string',
        'modification_metadata' => '\HubSpot\Client\Crm\Schemas\Model\PropertyModificationMetadata',
        'sensitive_data_categories' => 'string[]',
        'label' => 'string',
        'form_field' => 'bool',
        'data_sensitivity' => 'string',
        'archived_at' => '\DateTime',
        'group_name' => 'string',
        'referenced_object_type' => 'string',
        'name' => 'string',
        'calculation_formula' => 'string',
        'field_type' => 'string',
        'updated_user_id' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'hidden' => null,
        'display_order' => 'int32',
        'description' => null,
        'show_currency_symbol' => null,
        'type' => null,
        'hubspot_defined' => null,
        'created_at' => 'date-time',
        'archived' => null,
        'options' => null,
        'has_unique_value' => null,
        'calculated' => null,
        'external_options' => null,
        'updated_at' => 'date-time',
        'created_user_id' => null,
        'modification_metadata' => null,
        'sensitive_data_categories' => null,
        'label' => null,
        'form_field' => null,
        'data_sensitivity' => null,
        'archived_at' => 'date-time',
        'group_name' => null,
        'referenced_object_type' => null,
        'name' => null,
        'calculation_formula' => null,
        'field_type' => null,
        'updated_user_id' => null
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'hidden' => false,
        'display_order' => false,
        'description' => false,
        'show_currency_symbol' => false,
        'type' => false,
        'hubspot_defined' => false,
        'created_at' => false,
        'archived' => false,
        'options' => false,
        'has_unique_value' => false,
        'calculated' => false,
        'external_options' => false,
        'updated_at' => false,
        'created_user_id' => false,
        'modification_metadata' => false,
        'sensitive_data_categories' => false,
        'label' => false,
        'form_field' => false,
        'data_sensitivity' => false,
        'archived_at' => false,
        'group_name' => false,
        'referenced_object_type' => false,
        'name' => false,
        'calculation_formula' => false,
        'field_type' => false,
        'updated_user_id' => false
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
        'hidden' => 'hidden',
        'display_order' => 'displayOrder',
        'description' => 'description',
        'show_currency_symbol' => 'showCurrencySymbol',
        'type' => 'type',
        'hubspot_defined' => 'hubspotDefined',
        'created_at' => 'createdAt',
        'archived' => 'archived',
        'options' => 'options',
        'has_unique_value' => 'hasUniqueValue',
        'calculated' => 'calculated',
        'external_options' => 'externalOptions',
        'updated_at' => 'updatedAt',
        'created_user_id' => 'createdUserId',
        'modification_metadata' => 'modificationMetadata',
        'sensitive_data_categories' => 'sensitiveDataCategories',
        'label' => 'label',
        'form_field' => 'formField',
        'data_sensitivity' => 'dataSensitivity',
        'archived_at' => 'archivedAt',
        'group_name' => 'groupName',
        'referenced_object_type' => 'referencedObjectType',
        'name' => 'name',
        'calculation_formula' => 'calculationFormula',
        'field_type' => 'fieldType',
        'updated_user_id' => 'updatedUserId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'hidden' => 'setHidden',
        'display_order' => 'setDisplayOrder',
        'description' => 'setDescription',
        'show_currency_symbol' => 'setShowCurrencySymbol',
        'type' => 'setType',
        'hubspot_defined' => 'setHubspotDefined',
        'created_at' => 'setCreatedAt',
        'archived' => 'setArchived',
        'options' => 'setOptions',
        'has_unique_value' => 'setHasUniqueValue',
        'calculated' => 'setCalculated',
        'external_options' => 'setExternalOptions',
        'updated_at' => 'setUpdatedAt',
        'created_user_id' => 'setCreatedUserId',
        'modification_metadata' => 'setModificationMetadata',
        'sensitive_data_categories' => 'setSensitiveDataCategories',
        'label' => 'setLabel',
        'form_field' => 'setFormField',
        'data_sensitivity' => 'setDataSensitivity',
        'archived_at' => 'setArchivedAt',
        'group_name' => 'setGroupName',
        'referenced_object_type' => 'setReferencedObjectType',
        'name' => 'setName',
        'calculation_formula' => 'setCalculationFormula',
        'field_type' => 'setFieldType',
        'updated_user_id' => 'setUpdatedUserId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'hidden' => 'getHidden',
        'display_order' => 'getDisplayOrder',
        'description' => 'getDescription',
        'show_currency_symbol' => 'getShowCurrencySymbol',
        'type' => 'getType',
        'hubspot_defined' => 'getHubspotDefined',
        'created_at' => 'getCreatedAt',
        'archived' => 'getArchived',
        'options' => 'getOptions',
        'has_unique_value' => 'getHasUniqueValue',
        'calculated' => 'getCalculated',
        'external_options' => 'getExternalOptions',
        'updated_at' => 'getUpdatedAt',
        'created_user_id' => 'getCreatedUserId',
        'modification_metadata' => 'getModificationMetadata',
        'sensitive_data_categories' => 'getSensitiveDataCategories',
        'label' => 'getLabel',
        'form_field' => 'getFormField',
        'data_sensitivity' => 'getDataSensitivity',
        'archived_at' => 'getArchivedAt',
        'group_name' => 'getGroupName',
        'referenced_object_type' => 'getReferencedObjectType',
        'name' => 'getName',
        'calculation_formula' => 'getCalculationFormula',
        'field_type' => 'getFieldType',
        'updated_user_id' => 'getUpdatedUserId'
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

    public const DATA_SENSITIVITY_NON_SENSITIVE = 'non_sensitive';
    public const DATA_SENSITIVITY_SENSITIVE = 'sensitive';
    public const DATA_SENSITIVITY_HIGHLY_SENSITIVE = 'highly_sensitive';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDataSensitivityAllowableValues()
    {
        return [
            self::DATA_SENSITIVITY_NON_SENSITIVE,
            self::DATA_SENSITIVITY_SENSITIVE,
            self::DATA_SENSITIVITY_HIGHLY_SENSITIVE,
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
        $this->setIfExists('hidden', $data ?? [], null);
        $this->setIfExists('display_order', $data ?? [], null);
        $this->setIfExists('description', $data ?? [], null);
        $this->setIfExists('show_currency_symbol', $data ?? [], null);
        $this->setIfExists('type', $data ?? [], null);
        $this->setIfExists('hubspot_defined', $data ?? [], null);
        $this->setIfExists('created_at', $data ?? [], null);
        $this->setIfExists('archived', $data ?? [], null);
        $this->setIfExists('options', $data ?? [], null);
        $this->setIfExists('has_unique_value', $data ?? [], null);
        $this->setIfExists('calculated', $data ?? [], null);
        $this->setIfExists('external_options', $data ?? [], null);
        $this->setIfExists('updated_at', $data ?? [], null);
        $this->setIfExists('created_user_id', $data ?? [], null);
        $this->setIfExists('modification_metadata', $data ?? [], null);
        $this->setIfExists('sensitive_data_categories', $data ?? [], null);
        $this->setIfExists('label', $data ?? [], null);
        $this->setIfExists('form_field', $data ?? [], null);
        $this->setIfExists('data_sensitivity', $data ?? [], null);
        $this->setIfExists('archived_at', $data ?? [], null);
        $this->setIfExists('group_name', $data ?? [], null);
        $this->setIfExists('referenced_object_type', $data ?? [], null);
        $this->setIfExists('name', $data ?? [], null);
        $this->setIfExists('calculation_formula', $data ?? [], null);
        $this->setIfExists('field_type', $data ?? [], null);
        $this->setIfExists('updated_user_id', $data ?? [], null);
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

        if ($this->container['description'] === null) {
            $invalidProperties[] = "'description' can't be null";
        }
        if ($this->container['type'] === null) {
            $invalidProperties[] = "'type' can't be null";
        }
        if ($this->container['options'] === null) {
            $invalidProperties[] = "'options' can't be null";
        }
        if ($this->container['label'] === null) {
            $invalidProperties[] = "'label' can't be null";
        }
        $allowedValues = $this->getDataSensitivityAllowableValues();
        if (!is_null($this->container['data_sensitivity']) && !in_array($this->container['data_sensitivity'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'data_sensitivity', must be one of '%s'",
                $this->container['data_sensitivity'],
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['group_name'] === null) {
            $invalidProperties[] = "'group_name' can't be null";
        }
        if ($this->container['name'] === null) {
            $invalidProperties[] = "'name' can't be null";
        }
        if ($this->container['field_type'] === null) {
            $invalidProperties[] = "'field_type' can't be null";
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
     * Gets hidden
     *
     * @return bool|null
     */
    public function getHidden()
    {
        return $this->container['hidden'];
    }

    /**
     * Sets hidden
     *
     * @param bool|null $hidden hidden
     *
     * @return self
     */
    public function setHidden($hidden)
    {
        if (is_null($hidden)) {
            throw new \InvalidArgumentException('non-nullable hidden cannot be null');
        }
        $this->container['hidden'] = $hidden;

        return $this;
    }

    /**
     * Gets display_order
     *
     * @return int|null
     */
    public function getDisplayOrder()
    {
        return $this->container['display_order'];
    }

    /**
     * Sets display_order
     *
     * @param int|null $display_order The order that this property should be displayed in the HubSpot UI relative to other properties for this object type. Properties are displayed in order starting with the lowest positive integer value. A value of -1 will cause the property to be displayed **after** any positive values.
     *
     * @return self
     */
    public function setDisplayOrder($display_order)
    {
        if (is_null($display_order)) {
            throw new \InvalidArgumentException('non-nullable display_order cannot be null');
        }
        $this->container['display_order'] = $display_order;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string $description A description of the property that will be shown as help text in HubSpot.
     *
     * @return self
     */
    public function setDescription($description)
    {
        if (is_null($description)) {
            throw new \InvalidArgumentException('non-nullable description cannot be null');
        }
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets show_currency_symbol
     *
     * @return bool|null
     */
    public function getShowCurrencySymbol()
    {
        return $this->container['show_currency_symbol'];
    }

    /**
     * Sets show_currency_symbol
     *
     * @param bool|null $show_currency_symbol Whether the property will display the currency symbol set in the account settings.
     *
     * @return self
     */
    public function setShowCurrencySymbol($show_currency_symbol)
    {
        if (is_null($show_currency_symbol)) {
            throw new \InvalidArgumentException('non-nullable show_currency_symbol cannot be null');
        }
        $this->container['show_currency_symbol'] = $show_currency_symbol;

        return $this;
    }

    /**
     * Gets type
     *
     * @return string
     */
    public function getType()
    {
        return $this->container['type'];
    }

    /**
     * Sets type
     *
     * @param string $type The property data type.
     *
     * @return self
     */
    public function setType($type)
    {
        if (is_null($type)) {
            throw new \InvalidArgumentException('non-nullable type cannot be null');
        }
        $this->container['type'] = $type;

        return $this;
    }

    /**
     * Gets hubspot_defined
     *
     * @return bool|null
     */
    public function getHubspotDefined()
    {
        return $this->container['hubspot_defined'];
    }

    /**
     * Sets hubspot_defined
     *
     * @param bool|null $hubspot_defined This will be true for default object properties built into HubSpot.
     *
     * @return self
     */
    public function setHubspotDefined($hubspot_defined)
    {
        if (is_null($hubspot_defined)) {
            throw new \InvalidArgumentException('non-nullable hubspot_defined cannot be null');
        }
        $this->container['hubspot_defined'] = $hubspot_defined;

        return $this;
    }

    /**
     * Gets created_at
     *
     * @return \DateTime|null
     */
    public function getCreatedAt()
    {
        return $this->container['created_at'];
    }

    /**
     * Sets created_at
     *
     * @param \DateTime|null $created_at When the property was created
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        if (is_null($created_at)) {
            throw new \InvalidArgumentException('non-nullable created_at cannot be null');
        }
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets archived
     *
     * @return bool|null
     */
    public function getArchived()
    {
        return $this->container['archived'];
    }

    /**
     * Sets archived
     *
     * @param bool|null $archived Whether or not the property is archived.
     *
     * @return self
     */
    public function setArchived($archived)
    {
        if (is_null($archived)) {
            throw new \InvalidArgumentException('non-nullable archived cannot be null');
        }
        $this->container['archived'] = $archived;

        return $this;
    }

    /**
     * Gets options
     *
     * @return \HubSpot\Client\Crm\Schemas\Model\Option[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param \HubSpot\Client\Crm\Schemas\Model\Option[] $options A list of valid options for the property. This field is required for enumerated properties, but will be empty for other property types.
     *
     * @return self
     */
    public function setOptions($options)
    {
        if (is_null($options)) {
            throw new \InvalidArgumentException('non-nullable options cannot be null');
        }
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets has_unique_value
     *
     * @return bool|null
     */
    public function getHasUniqueValue()
    {
        return $this->container['has_unique_value'];
    }

    /**
     * Sets has_unique_value
     *
     * @param bool|null $has_unique_value Whether or not the property's value must be unique. Once set, this can't be changed.
     *
     * @return self
     */
    public function setHasUniqueValue($has_unique_value)
    {
        if (is_null($has_unique_value)) {
            throw new \InvalidArgumentException('non-nullable has_unique_value cannot be null');
        }
        $this->container['has_unique_value'] = $has_unique_value;

        return $this;
    }

    /**
     * Gets calculated
     *
     * @return bool|null
     */
    public function getCalculated()
    {
        return $this->container['calculated'];
    }

    /**
     * Sets calculated
     *
     * @param bool|null $calculated For default properties, true indicates that the property is calculated by a HubSpot process. It has no effect for custom properties.
     *
     * @return self
     */
    public function setCalculated($calculated)
    {
        if (is_null($calculated)) {
            throw new \InvalidArgumentException('non-nullable calculated cannot be null');
        }
        $this->container['calculated'] = $calculated;

        return $this;
    }

    /**
     * Gets external_options
     *
     * @return bool|null
     */
    public function getExternalOptions()
    {
        return $this->container['external_options'];
    }

    /**
     * Sets external_options
     *
     * @param bool|null $external_options For default properties, true indicates that the options are stored externally to the property settings.
     *
     * @return self
     */
    public function setExternalOptions($external_options)
    {
        if (is_null($external_options)) {
            throw new \InvalidArgumentException('non-nullable external_options cannot be null');
        }
        $this->container['external_options'] = $external_options;

        return $this;
    }

    /**
     * Gets updated_at
     *
     * @return \DateTime|null
     */
    public function getUpdatedAt()
    {
        return $this->container['updated_at'];
    }

    /**
     * Sets updated_at
     *
     * @param \DateTime|null $updated_at 
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        if (is_null($updated_at)) {
            throw new \InvalidArgumentException('non-nullable updated_at cannot be null');
        }
        $this->container['updated_at'] = $updated_at;

        return $this;
    }

    /**
     * Gets created_user_id
     *
     * @return string|null
     */
    public function getCreatedUserId()
    {
        return $this->container['created_user_id'];
    }

    /**
     * Sets created_user_id
     *
     * @param string|null $created_user_id The internal ID of the user who created the property in HubSpot. This field may not exist if the property was created outside of HubSpot.
     *
     * @return self
     */
    public function setCreatedUserId($created_user_id)
    {
        if (is_null($created_user_id)) {
            throw new \InvalidArgumentException('non-nullable created_user_id cannot be null');
        }
        $this->container['created_user_id'] = $created_user_id;

        return $this;
    }

    /**
     * Gets modification_metadata
     *
     * @return \HubSpot\Client\Crm\Schemas\Model\PropertyModificationMetadata|null
     */
    public function getModificationMetadata()
    {
        return $this->container['modification_metadata'];
    }

    /**
     * Sets modification_metadata
     *
     * @param \HubSpot\Client\Crm\Schemas\Model\PropertyModificationMetadata|null $modification_metadata modification_metadata
     *
     * @return self
     */
    public function setModificationMetadata($modification_metadata)
    {
        if (is_null($modification_metadata)) {
            throw new \InvalidArgumentException('non-nullable modification_metadata cannot be null');
        }
        $this->container['modification_metadata'] = $modification_metadata;

        return $this;
    }

    /**
     * Gets sensitive_data_categories
     *
     * @return string[]|null
     */
    public function getSensitiveDataCategories()
    {
        return $this->container['sensitive_data_categories'];
    }

    /**
     * Sets sensitive_data_categories
     *
     * @param string[]|null $sensitive_data_categories sensitive_data_categories
     *
     * @return self
     */
    public function setSensitiveDataCategories($sensitive_data_categories)
    {
        if (is_null($sensitive_data_categories)) {
            throw new \InvalidArgumentException('non-nullable sensitive_data_categories cannot be null');
        }
        $this->container['sensitive_data_categories'] = $sensitive_data_categories;

        return $this;
    }

    /**
     * Gets label
     *
     * @return string
     */
    public function getLabel()
    {
        return $this->container['label'];
    }

    /**
     * Sets label
     *
     * @param string $label A human-readable property label that will be shown in HubSpot.
     *
     * @return self
     */
    public function setLabel($label)
    {
        if (is_null($label)) {
            throw new \InvalidArgumentException('non-nullable label cannot be null');
        }
        $this->container['label'] = $label;

        return $this;
    }

    /**
     * Gets form_field
     *
     * @return bool|null
     */
    public function getFormField()
    {
        return $this->container['form_field'];
    }

    /**
     * Sets form_field
     *
     * @param bool|null $form_field Whether or not the property can be used in a HubSpot form.
     *
     * @return self
     */
    public function setFormField($form_field)
    {
        if (is_null($form_field)) {
            throw new \InvalidArgumentException('non-nullable form_field cannot be null');
        }
        $this->container['form_field'] = $form_field;

        return $this;
    }

    /**
     * Gets data_sensitivity
     *
     * @return string|null
     */
    public function getDataSensitivity()
    {
        return $this->container['data_sensitivity'];
    }

    /**
     * Sets data_sensitivity
     *
     * @param string|null $data_sensitivity data_sensitivity
     *
     * @return self
     */
    public function setDataSensitivity($data_sensitivity)
    {
        if (is_null($data_sensitivity)) {
            throw new \InvalidArgumentException('non-nullable data_sensitivity cannot be null');
        }
        $allowedValues = $this->getDataSensitivityAllowableValues();
        if (!in_array($data_sensitivity, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'data_sensitivity', must be one of '%s'",
                    $data_sensitivity,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['data_sensitivity'] = $data_sensitivity;

        return $this;
    }

    /**
     * Gets archived_at
     *
     * @return \DateTime|null
     */
    public function getArchivedAt()
    {
        return $this->container['archived_at'];
    }

    /**
     * Sets archived_at
     *
     * @param \DateTime|null $archived_at When the property was archived.
     *
     * @return self
     */
    public function setArchivedAt($archived_at)
    {
        if (is_null($archived_at)) {
            throw new \InvalidArgumentException('non-nullable archived_at cannot be null');
        }
        $this->container['archived_at'] = $archived_at;

        return $this;
    }

    /**
     * Gets group_name
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->container['group_name'];
    }

    /**
     * Sets group_name
     *
     * @param string $group_name The name of the property group the property belongs to.
     *
     * @return self
     */
    public function setGroupName($group_name)
    {
        if (is_null($group_name)) {
            throw new \InvalidArgumentException('non-nullable group_name cannot be null');
        }
        $this->container['group_name'] = $group_name;

        return $this;
    }

    /**
     * Gets referenced_object_type
     *
     * @return string|null
     */
    public function getReferencedObjectType()
    {
        return $this->container['referenced_object_type'];
    }

    /**
     * Sets referenced_object_type
     *
     * @param string|null $referenced_object_type If this property is related to other object(s), they'll be listed here.
     *
     * @return self
     */
    public function setReferencedObjectType($referenced_object_type)
    {
        if (is_null($referenced_object_type)) {
            throw new \InvalidArgumentException('non-nullable referenced_object_type cannot be null');
        }
        $this->container['referenced_object_type'] = $referenced_object_type;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string $name The internal property name, which must be used when referencing the property via the API.
     *
     * @return self
     */
    public function setName($name)
    {
        if (is_null($name)) {
            throw new \InvalidArgumentException('non-nullable name cannot be null');
        }
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets calculation_formula
     *
     * @return string|null
     */
    public function getCalculationFormula()
    {
        return $this->container['calculation_formula'];
    }

    /**
     * Sets calculation_formula
     *
     * @param string|null $calculation_formula calculation_formula
     *
     * @return self
     */
    public function setCalculationFormula($calculation_formula)
    {
        if (is_null($calculation_formula)) {
            throw new \InvalidArgumentException('non-nullable calculation_formula cannot be null');
        }
        $this->container['calculation_formula'] = $calculation_formula;

        return $this;
    }

    /**
     * Gets field_type
     *
     * @return string
     */
    public function getFieldType()
    {
        return $this->container['field_type'];
    }

    /**
     * Sets field_type
     *
     * @param string $field_type Controls how the property appears in HubSpot.
     *
     * @return self
     */
    public function setFieldType($field_type)
    {
        if (is_null($field_type)) {
            throw new \InvalidArgumentException('non-nullable field_type cannot be null');
        }
        $this->container['field_type'] = $field_type;

        return $this;
    }

    /**
     * Gets updated_user_id
     *
     * @return string|null
     */
    public function getUpdatedUserId()
    {
        return $this->container['updated_user_id'];
    }

    /**
     * Sets updated_user_id
     *
     * @param string|null $updated_user_id The internal user ID of the user who updated the property in HubSpot. This field may not exist if the property was updated outside of HubSpot.
     *
     * @return self
     */
    public function setUpdatedUserId($updated_user_id)
    {
        if (is_null($updated_user_id)) {
            throw new \InvalidArgumentException('non-nullable updated_user_id cannot be null');
        }
        $this->container['updated_user_id'] = $updated_user_id;

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

