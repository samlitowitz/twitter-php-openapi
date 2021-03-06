<?php
/**
 * URLFields
 *
 * PHP version 7.4
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */

/**
 * Tweets and Users
 *
 * API Reference — Labs v2
 *
 * The version of the OpenAPI document: 2.13
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
 * URLFields Class Doc Comment
 *
 * @category Class
 * @description Represent the portion of text recognized as a URL.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class URLFields implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'URLFields';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'url' => 'string',
        'expanded_url' => 'string',
        'display_url' => 'string',
        'unwound_url' => 'string',
        'status' => 'int',
        'title' => 'string',
        'description' => 'string',
        'images' => '\OpenAPI\Client\Model\URLImage[]'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'url' => 'uri',
        'expanded_url' => 'uri',
        'display_url' => null,
        'unwound_url' => 'uri',
        'status' => null,
        'title' => null,
        'description' => null,
        'images' => null
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
        'url' => 'url',
        'expanded_url' => 'expanded_url',
        'display_url' => 'display_url',
        'unwound_url' => 'unwound_url',
        'status' => 'status',
        'title' => 'title',
        'description' => 'description',
        'images' => 'images'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'url' => 'setUrl',
        'expanded_url' => 'setExpandedUrl',
        'display_url' => 'setDisplayUrl',
        'unwound_url' => 'setUnwoundUrl',
        'status' => 'setStatus',
        'title' => 'setTitle',
        'description' => 'setDescription',
        'images' => 'setImages'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'url' => 'getUrl',
        'expanded_url' => 'getExpandedUrl',
        'display_url' => 'getDisplayUrl',
        'unwound_url' => 'getUnwoundUrl',
        'status' => 'getStatus',
        'title' => 'getTitle',
        'description' => 'getDescription',
        'images' => 'getImages'
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
        $this->container['url'] = $data['url'] ?? null;
        $this->container['expanded_url'] = $data['expanded_url'] ?? null;
        $this->container['display_url'] = $data['display_url'] ?? null;
        $this->container['unwound_url'] = $data['unwound_url'] ?? null;
        $this->container['status'] = $data['status'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['description'] = $data['description'] ?? null;
        $this->container['images'] = $data['images'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['url'] === null) {
            $invalidProperties[] = "'url' can't be null";
        }
        if (!is_null($this->container['status']) && ($this->container['status'] > 599)) {
            $invalidProperties[] = "invalid value for 'status', must be smaller than or equal to 599.";
        }

        if (!is_null($this->container['status']) && ($this->container['status'] < 100)) {
            $invalidProperties[] = "invalid value for 'status', must be bigger than or equal to 100.";
        }

        if (!is_null($this->container['images']) && (count($this->container['images']) < 1)) {
            $invalidProperties[] = "invalid value for 'images', number of items must be greater than or equal to 1.";
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
     * Gets url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->container['url'];
    }

    /**
     * Sets url
     *
     * @param string $url A validly formatted URL.
     *
     * @return self
     */
    public function setUrl($url)
    {
        $this->container['url'] = $url;

        return $this;
    }

    /**
     * Gets expanded_url
     *
     * @return string|null
     */
    public function getExpandedUrl()
    {
        return $this->container['expanded_url'];
    }

    /**
     * Sets expanded_url
     *
     * @param string|null $expanded_url A validly formatted URL.
     *
     * @return self
     */
    public function setExpandedUrl($expanded_url)
    {
        $this->container['expanded_url'] = $expanded_url;

        return $this;
    }

    /**
     * Gets display_url
     *
     * @return string|null
     */
    public function getDisplayUrl()
    {
        return $this->container['display_url'];
    }

    /**
     * Sets display_url
     *
     * @param string|null $display_url The URL as displayed in the Twitter client.
     *
     * @return self
     */
    public function setDisplayUrl($display_url)
    {
        $this->container['display_url'] = $display_url;

        return $this;
    }

    /**
     * Gets unwound_url
     *
     * @return string|null
     */
    public function getUnwoundUrl()
    {
        return $this->container['unwound_url'];
    }

    /**
     * Sets unwound_url
     *
     * @param string|null $unwound_url Fully resolved url
     *
     * @return self
     */
    public function setUnwoundUrl($unwound_url)
    {
        $this->container['unwound_url'] = $unwound_url;

        return $this;
    }

    /**
     * Gets status
     *
     * @return int|null
     */
    public function getStatus()
    {
        return $this->container['status'];
    }

    /**
     * Sets status
     *
     * @param int|null $status HTTP Status Code.
     *
     * @return self
     */
    public function setStatus($status)
    {

        if (!is_null($status) && ($status > 599)) {
            throw new \InvalidArgumentException('invalid value for $status when calling URLFields., must be smaller than or equal to 599.');
        }
        if (!is_null($status) && ($status < 100)) {
            throw new \InvalidArgumentException('invalid value for $status when calling URLFields., must be bigger than or equal to 100.');
        }

        $this->container['status'] = $status;

        return $this;
    }

    /**
     * Gets title
     *
     * @return string|null
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /**
     * Sets title
     *
     * @param string|null $title Title of the page the URL points to.
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets description
     *
     * @return string|null
     */
    public function getDescription()
    {
        return $this->container['description'];
    }

    /**
     * Sets description
     *
     * @param string|null $description Description of the URL landing page.
     *
     * @return self
     */
    public function setDescription($description)
    {
        $this->container['description'] = $description;

        return $this;
    }

    /**
     * Gets images
     *
     * @return \OpenAPI\Client\Model\URLImage[]|null
     */
    public function getImages()
    {
        return $this->container['images'];
    }

    /**
     * Sets images
     *
     * @param \OpenAPI\Client\Model\URLImage[]|null $images images
     *
     * @return self
     */
    public function setImages($images)
    {


        if (!is_null($images) && (count($images) < 1)) {
            throw new \InvalidArgumentException('invalid length for $images when calling URLFields., number of items must be greater than or equal to 1.');
        }
        $this->container['images'] = $images;

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


