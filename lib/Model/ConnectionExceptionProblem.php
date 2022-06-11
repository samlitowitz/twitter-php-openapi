<?php
/**
 * ConnectionExceptionProblem
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Twitter API v2
 *
 * Twitter API v2 available endpoints
 *
 * The version of the OpenAPI document: 2.45
 * Generated by: https://openapi-generator.tech
 * OpenAPI Generator version: 6.0.0
 */

/**
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */

namespace OpenAPI\Client\Model;
use \OpenAPI\Client\ObjectSerializer;

/**
 * ConnectionExceptionProblem Class Doc Comment
 *
 * @category Class
 * @description A problem that indicates something is wrong with the connection.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class ConnectionExceptionProblem extends Problem
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'ConnectionExceptionProblem';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'connection_issue' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'connection_issue' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPITypes()
    {
        return self::$openAPITypes + parent::openAPITypes();
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function openAPIFormats()
    {
        return self::$openAPIFormats + parent::openAPIFormats();
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'connection_issue' => 'connection_issue'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'connection_issue' => 'setConnectionIssue'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'connection_issue' => 'getConnectionIssue'
    ];

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
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

    public const CONNECTION_ISSUE_TOO_MANY_CONNECTIONS = 'TooManyConnections';
    public const CONNECTION_ISSUE_PROVISIONING_SUBSCRIPTION = 'ProvisioningSubscription';
    public const CONNECTION_ISSUE_RULE_CONFIGURATION_ISSUE = 'RuleConfigurationIssue';
    public const CONNECTION_ISSUE_RULES_INVALID_ISSUE = 'RulesInvalidIssue';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConnectionIssueAllowableValues()
    {
        return [
            self::CONNECTION_ISSUE_TOO_MANY_CONNECTIONS,
            self::CONNECTION_ISSUE_PROVISIONING_SUBSCRIPTION,
            self::CONNECTION_ISSUE_RULE_CONFIGURATION_ISSUE,
            self::CONNECTION_ISSUE_RULES_INVALID_ISSUE,
        ];
    }


    /**
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['connection_issue'] = $data['connection_issue'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getConnectionIssueAllowableValues();
        if (!is_null($this->container['connection_issue']) && !in_array($this->container['connection_issue'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'connection_issue', must be one of '%s'",
                $this->container['connection_issue'],
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
     * Gets connection_issue
     *
     * @return string|null
     */
    public function getConnectionIssue()
    {
        return $this->container['connection_issue'];
    }

    /**
     * Sets connection_issue
     *
     * @param string|null $connection_issue connection_issue
     *
     * @return self
     */
    public function setConnectionIssue($connection_issue)
    {
        $allowedValues = $this->getConnectionIssueAllowableValues();
        if (!is_null($connection_issue) && !in_array($connection_issue, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'connection_issue', must be one of '%s'",
                    $connection_issue,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['connection_issue'] = $connection_issue;

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

