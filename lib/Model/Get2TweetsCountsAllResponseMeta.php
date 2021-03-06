<?php
/**
 * Get2TweetsCountsAllResponseMeta
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
 * Get2TweetsCountsAllResponseMeta Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Get2TweetsCountsAllResponseMeta implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Get2TweetsCountsAllResponse_meta';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'newest_id' => 'string',
        'next_token' => 'string',
        'oldest_id' => 'string',
        'total_tweet_count' => 'int'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'newest_id' => null,
        'next_token' => null,
        'oldest_id' => null,
        'total_tweet_count' => 'int32'
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
        'newest_id' => 'newest_id',
        'next_token' => 'next_token',
        'oldest_id' => 'oldest_id',
        'total_tweet_count' => 'total_tweet_count'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'newest_id' => 'setNewestId',
        'next_token' => 'setNextToken',
        'oldest_id' => 'setOldestId',
        'total_tweet_count' => 'setTotalTweetCount'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'newest_id' => 'getNewestId',
        'next_token' => 'getNextToken',
        'oldest_id' => 'getOldestId',
        'total_tweet_count' => 'getTotalTweetCount'
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
        $this->container['newest_id'] = $data['newest_id'] ?? null;
        $this->container['next_token'] = $data['next_token'] ?? null;
        $this->container['oldest_id'] = $data['oldest_id'] ?? null;
        $this->container['total_tweet_count'] = $data['total_tweet_count'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['next_token']) && (mb_strlen($this->container['next_token']) < 1)) {
            $invalidProperties[] = "invalid value for 'next_token', the character length must be bigger than or equal to 1.";
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
     * Gets newest_id
     *
     * @return string|null
     */
    public function getNewestId()
    {
        return $this->container['newest_id'];
    }

    /**
     * Sets newest_id
     *
     * @param string|null $newest_id The newest id in this response.
     *
     * @return self
     */
    public function setNewestId($newest_id)
    {
        $this->container['newest_id'] = $newest_id;

        return $this;
    }

    /**
     * Gets next_token
     *
     * @return string|null
     */
    public function getNextToken()
    {
        return $this->container['next_token'];
    }

    /**
     * Sets next_token
     *
     * @param string|null $next_token The next token.
     *
     * @return self
     */
    public function setNextToken($next_token)
    {

        if (!is_null($next_token) && (mb_strlen($next_token) < 1)) {
            throw new \InvalidArgumentException('invalid length for $next_token when calling Get2TweetsCountsAllResponseMeta., must be bigger than or equal to 1.');
        }

        $this->container['next_token'] = $next_token;

        return $this;
    }

    /**
     * Gets oldest_id
     *
     * @return string|null
     */
    public function getOldestId()
    {
        return $this->container['oldest_id'];
    }

    /**
     * Sets oldest_id
     *
     * @param string|null $oldest_id The oldest id in this response.
     *
     * @return self
     */
    public function setOldestId($oldest_id)
    {
        $this->container['oldest_id'] = $oldest_id;

        return $this;
    }

    /**
     * Gets total_tweet_count
     *
     * @return int|null
     */
    public function getTotalTweetCount()
    {
        return $this->container['total_tweet_count'];
    }

    /**
     * Sets total_tweet_count
     *
     * @param int|null $total_tweet_count The sum of results returned in this response.
     *
     * @return self
     */
    public function setTotalTweetCount($total_tweet_count)
    {
        $this->container['total_tweet_count'] = $total_tweet_count;

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


