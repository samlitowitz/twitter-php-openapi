<?php
/**
 * TweetCreateRequestPoll
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

use \ArrayAccess;
use \OpenAPI\Client\ObjectSerializer;

/**
 * TweetCreateRequestPoll Class Doc Comment
 *
 * @category Class
 * @description Poll options for a Tweet with a poll. This is mutually exclusive from Media and Quote Tweet Id.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TweetCreateRequestPoll implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TweetCreateRequest_poll';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'duration_minutes' => 'int',
        'options' => 'string[]',
        'reply_settings' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'duration_minutes' => 'int32',
        'options' => null,
        'reply_settings' => null
    ];

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
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'duration_minutes' => 'duration_minutes',
        'options' => 'options',
        'reply_settings' => 'reply_settings'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'duration_minutes' => 'setDurationMinutes',
        'options' => 'setOptions',
        'reply_settings' => 'setReplySettings'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'duration_minutes' => 'getDurationMinutes',
        'options' => 'getOptions',
        'reply_settings' => 'getReplySettings'
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

    public const REPLY_SETTINGS_FOLLOWING = 'following';
    public const REPLY_SETTINGS_MENTIONED_USERS = 'mentionedUsers';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getReplySettingsAllowableValues()
    {
        return [
            self::REPLY_SETTINGS_FOLLOWING,
            self::REPLY_SETTINGS_MENTIONED_USERS,
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
        $this->container['duration_minutes'] = $data['duration_minutes'] ?? null;
        $this->container['options'] = $data['options'] ?? null;
        $this->container['reply_settings'] = $data['reply_settings'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['duration_minutes'] === null) {
            $invalidProperties[] = "'duration_minutes' can't be null";
        }
        if (($this->container['duration_minutes'] > 10080)) {
            $invalidProperties[] = "invalid value for 'duration_minutes', must be smaller than or equal to 10080.";
        }

        if (($this->container['duration_minutes'] < 5)) {
            $invalidProperties[] = "invalid value for 'duration_minutes', must be bigger than or equal to 5.";
        }

        if ($this->container['options'] === null) {
            $invalidProperties[] = "'options' can't be null";
        }
        if ((count($this->container['options']) > 4)) {
            $invalidProperties[] = "invalid value for 'options', number of items must be less than or equal to 4.";
        }

        if ((count($this->container['options']) < 2)) {
            $invalidProperties[] = "invalid value for 'options', number of items must be greater than or equal to 2.";
        }

        $allowedValues = $this->getReplySettingsAllowableValues();
        if (!is_null($this->container['reply_settings']) && !in_array($this->container['reply_settings'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'reply_settings', must be one of '%s'",
                $this->container['reply_settings'],
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
     * Gets duration_minutes
     *
     * @return int
     */
    public function getDurationMinutes()
    {
        return $this->container['duration_minutes'];
    }

    /**
     * Sets duration_minutes
     *
     * @param int $duration_minutes Duration of the poll in minutes.
     *
     * @return self
     */
    public function setDurationMinutes($duration_minutes)
    {

        if (($duration_minutes > 10080)) {
            throw new \InvalidArgumentException('invalid value for $duration_minutes when calling TweetCreateRequestPoll., must be smaller than or equal to 10080.');
        }
        if (($duration_minutes < 5)) {
            throw new \InvalidArgumentException('invalid value for $duration_minutes when calling TweetCreateRequestPoll., must be bigger than or equal to 5.');
        }

        $this->container['duration_minutes'] = $duration_minutes;

        return $this;
    }

    /**
     * Gets options
     *
     * @return string[]
     */
    public function getOptions()
    {
        return $this->container['options'];
    }

    /**
     * Sets options
     *
     * @param string[] $options options
     *
     * @return self
     */
    public function setOptions($options)
    {

        if ((count($options) > 4)) {
            throw new \InvalidArgumentException('invalid value for $options when calling TweetCreateRequestPoll., number of items must be less than or equal to 4.');
        }
        if ((count($options) < 2)) {
            throw new \InvalidArgumentException('invalid length for $options when calling TweetCreateRequestPoll., number of items must be greater than or equal to 2.');
        }
        $this->container['options'] = $options;

        return $this;
    }

    /**
     * Gets reply_settings
     *
     * @return string|null
     */
    public function getReplySettings()
    {
        return $this->container['reply_settings'];
    }

    /**
     * Sets reply_settings
     *
     * @param string|null $reply_settings Settings to indicate who can reply to the Tweet.
     *
     * @return self
     */
    public function setReplySettings($reply_settings)
    {
        $allowedValues = $this->getReplySettingsAllowableValues();
        if (!is_null($reply_settings) && !in_array($reply_settings, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'reply_settings', must be one of '%s'",
                    $reply_settings,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['reply_settings'] = $reply_settings;

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


