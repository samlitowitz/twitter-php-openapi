<?php
/**
 * TweetCreateRequestMedia
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
 * TweetCreateRequestMedia Class Doc Comment
 *
 * @category Class
 * @description Media information being attached to created Tweet. This is mutually exclusive from Quote Tweet Id and Poll.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TweetCreateRequestMedia implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TweetCreateRequest_media';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'media_ids' => 'string[]',
        'tagged_user_ids' => 'string[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'media_ids' => null,
        'tagged_user_ids' => null
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
        'media_ids' => 'media_ids',
        'tagged_user_ids' => 'tagged_user_ids'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'media_ids' => 'setMediaIds',
        'tagged_user_ids' => 'setTaggedUserIds'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'media_ids' => 'getMediaIds',
        'tagged_user_ids' => 'getTaggedUserIds'
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
        $this->container['media_ids'] = $data['media_ids'] ?? null;
        $this->container['tagged_user_ids'] = $data['tagged_user_ids'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['media_ids'] === null) {
            $invalidProperties[] = "'media_ids' can't be null";
        }
        if ((count($this->container['media_ids']) > 4)) {
            $invalidProperties[] = "invalid value for 'media_ids', number of items must be less than or equal to 4.";
        }

        if ((count($this->container['media_ids']) < 1)) {
            $invalidProperties[] = "invalid value for 'media_ids', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['tagged_user_ids']) && (count($this->container['tagged_user_ids']) > 10)) {
            $invalidProperties[] = "invalid value for 'tagged_user_ids', number of items must be less than or equal to 10.";
        }

        if (!is_null($this->container['tagged_user_ids']) && (count($this->container['tagged_user_ids']) < 0)) {
            $invalidProperties[] = "invalid value for 'tagged_user_ids', number of items must be greater than or equal to 0.";
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
     * Gets media_ids
     *
     * @return string[]
     */
    public function getMediaIds()
    {
        return $this->container['media_ids'];
    }

    /**
     * Sets media_ids
     *
     * @param string[] $media_ids A list of Media Ids to be attached to a created Tweet.
     *
     * @return self
     */
    public function setMediaIds($media_ids)
    {

        if ((count($media_ids) > 4)) {
            throw new \InvalidArgumentException('invalid value for $media_ids when calling TweetCreateRequestMedia., number of items must be less than or equal to 4.');
        }
        if ((count($media_ids) < 1)) {
            throw new \InvalidArgumentException('invalid length for $media_ids when calling TweetCreateRequestMedia., number of items must be greater than or equal to 1.');
        }
        $this->container['media_ids'] = $media_ids;

        return $this;
    }

    /**
     * Gets tagged_user_ids
     *
     * @return string[]|null
     */
    public function getTaggedUserIds()
    {
        return $this->container['tagged_user_ids'];
    }

    /**
     * Sets tagged_user_ids
     *
     * @param string[]|null $tagged_user_ids A list of User Ids to be tagged in the media for created Tweet.
     *
     * @return self
     */
    public function setTaggedUserIds($tagged_user_ids)
    {

        if (!is_null($tagged_user_ids) && (count($tagged_user_ids) > 10)) {
            throw new \InvalidArgumentException('invalid value for $tagged_user_ids when calling TweetCreateRequestMedia., number of items must be less than or equal to 10.');
        }
        if (!is_null($tagged_user_ids) && (count($tagged_user_ids) < 0)) {
            throw new \InvalidArgumentException('invalid length for $tagged_user_ids when calling TweetCreateRequestMedia., number of items must be greater than or equal to 0.');
        }
        $this->container['tagged_user_ids'] = $tagged_user_ids;

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

