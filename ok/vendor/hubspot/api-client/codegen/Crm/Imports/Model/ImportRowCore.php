<?php
/**
 * ImportRowCore
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Imports
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Imports
 *
 * No description provided (generated by Openapi Generator https://github.com/openapitools/openapi-generator)
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

namespace HubSpot\Client\Crm\Imports\Model;

use \ArrayAccess;
use \HubSpot\Client\Crm\Imports\ObjectSerializer;

/**
 * ImportRowCore Class Doc Comment
 *
 * @category Class
 * @package  HubSpot\Client\Crm\Imports
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<string, mixed>
 */
class ImportRowCore implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ImportRowCore';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'row_data' => 'string[]',
        'line_number' => 'int',
        'page_name' => 'string',
        'file_id' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'row_data' => null,
        'line_number' => 'int32',
        'page_name' => null,
        'file_id' => 'int32'
    ];

    /**
      * Array of nullable properties. Used for (de)serialization
      *
      * @var boolean[]
      */
    protected static array $openAPINullables = [
        'row_data' => false,
        'line_number' => false,
        'page_name' => false,
        'file_id' => false
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
        'row_data' => 'rowData',
        'line_number' => 'lineNumber',
        'page_name' => 'pageName',
        'file_id' => 'fileId'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'row_data' => 'setRowData',
        'line_number' => 'setLineNumber',
        'page_name' => 'setPageName',
        'file_id' => 'setFileId'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'row_data' => 'getRowData',
        'line_number' => 'getLineNumber',
        'page_name' => 'getPageName',
        'file_id' => 'getFileId'
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
        $this->setIfExists('row_data', $data ?? [], null);
        $this->setIfExists('line_number', $data ?? [], null);
        $this->setIfExists('page_name', $data ?? [], null);
        $this->setIfExists('file_id', $data ?? [], null);
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

        if ($this->container['row_data'] === null) {
            $invalidProperties[] = "'row_data' can't be null";
        }
        if ($this->container['line_number'] === null) {
            $invalidProperties[] = "'line_number' can't be null";
        }
        if ($this->container['file_id'] === null) {
            $invalidProperties[] = "'file_id' can't be null";
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
     * Gets row_data
     *
     * @return string[]
     */
    public function getRowData()
    {
        return $this->container['row_data'];
    }

    /**
     * Sets row_data
     *
     * @param string[] $row_data row_data
     *
     * @return self
     */
    public function setRowData($row_data)
    {
        if (is_null($row_data)) {
            throw new \InvalidArgumentException('non-nullable row_data cannot be null');
        }
        $this->container['row_data'] = $row_data;

        return $this;
    }

    /**
     * Gets line_number
     *
     * @return int
     */
    public function getLineNumber()
    {
        return $this->container['line_number'];
    }

    /**
     * Sets line_number
     *
     * @param int $line_number line_number
     *
     * @return self
     */
    public function setLineNumber($line_number)
    {
        if (is_null($line_number)) {
            throw new \InvalidArgumentException('non-nullable line_number cannot be null');
        }
        $this->container['line_number'] = $line_number;

        return $this;
    }

    /**
     * Gets page_name
     *
     * @return string|null
     */
    public function getPageName()
    {
        return $this->container['page_name'];
    }

    /**
     * Sets page_name
     *
     * @param string|null $page_name page_name
     *
     * @return self
     */
    public function setPageName($page_name)
    {
        if (is_null($page_name)) {
            throw new \InvalidArgumentException('non-nullable page_name cannot be null');
        }
        $this->container['page_name'] = $page_name;

        return $this;
    }

    /**
     * Gets file_id
     *
     * @return int
     */
    public function getFileId()
    {
        return $this->container['file_id'];
    }

    /**
     * Sets file_id
     *
     * @param int $file_id file_id
     *
     * @return self
     */
    public function setFileId($file_id)
    {
        if (is_null($file_id)) {
            throw new \InvalidArgumentException('non-nullable file_id cannot be null');
        }
        $this->container['file_id'] = $file_id;

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

