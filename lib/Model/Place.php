<?php
/**
 * Place
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
 * Place Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Place implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Place';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'contained_within' => 'string[]',
        'country' => 'string',
        'country_code' => 'string',
        'full_name' => 'string',
        'geo' => '\OpenAPI\Client\Model\Geo',
        'id' => 'string',
        'name' => 'string',
        'place_type' => '\OpenAPI\Client\Model\PlaceType'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'contained_within' => null,
        'country' => null,
        'country_code' => null,
        'full_name' => null,
        'geo' => null,
        'id' => null,
        'name' => null,
        'place_type' => null
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
        'contained_within' => 'contained_within',
        'country' => 'country',
        'country_code' => 'country_code',
        'full_name' => 'full_name',
        'geo' => 'geo',
        'id' => 'id',
        'name' => 'name',
        'place_type' => 'place_type'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'contained_within' => 'setContainedWithin',
        'country' => 'setCountry',
        'country_code' => 'setCountryCode',
        'full_name' => 'setFullName',
        'geo' => 'setGeo',
        'id' => 'setId',
        'name' => 'setName',
        'place_type' => 'setPlaceType'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'contained_within' => 'getContainedWithin',
        'country' => 'getCountry',
        'country_code' => 'getCountryCode',
        'full_name' => 'getFullName',
        'geo' => 'getGeo',
        'id' => 'getId',
        'name' => 'getName',
        'place_type' => 'getPlaceType'
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
        $this->container['contained_within'] = $data['contained_within'] ?? null;
        $this->container['country'] = $data['country'] ?? null;
        $this->container['country_code'] = $data['country_code'] ?? null;
        $this->container['full_name'] = $data['full_name'] ?? null;
        $this->container['geo'] = $data['geo'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['name'] = $data['name'] ?? null;
        $this->container['place_type'] = $data['place_type'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['contained_within']) && (count($this->container['contained_within']) < 1)) {
            $invalidProperties[] = "invalid value for 'contained_within', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['country_code']) && !preg_match("/^[A-Z]{2}$/", $this->container['country_code'])) {
            $invalidProperties[] = "invalid value for 'country_code', must be conform to the pattern /^[A-Z]{2}$/.";
        }

        if ($this->container['full_name'] === null) {
            $invalidProperties[] = "'full_name' can't be null";
        }
        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
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
     * Gets contained_within
     *
     * @return string[]|null
     */
    public function getContainedWithin()
    {
        return $this->container['contained_within'];
    }

    /**
     * Sets contained_within
     *
     * @param string[]|null $contained_within contained_within
     *
     * @return self
     */
    public function setContainedWithin($contained_within)
    {


        if (!is_null($contained_within) && (count($contained_within) < 1)) {
            throw new \InvalidArgumentException('invalid length for $contained_within when calling Place., number of items must be greater than or equal to 1.');
        }
        $this->container['contained_within'] = $contained_within;

        return $this;
    }

    /**
     * Gets country
     *
     * @return string|null
     */
    public function getCountry()
    {
        return $this->container['country'];
    }

    /**
     * Sets country
     *
     * @param string|null $country The full name of the county in which this place exists.
     *
     * @return self
     */
    public function setCountry($country)
    {
        $this->container['country'] = $country;

        return $this;
    }

    /**
     * Gets country_code
     *
     * @return string|null
     */
    public function getCountryCode()
    {
        return $this->container['country_code'];
    }

    /**
     * Sets country_code
     *
     * @param string|null $country_code A two-letter ISO 3166-1 alpha-2 country code.
     *
     * @return self
     */
    public function setCountryCode($country_code)
    {

        if (!is_null($country_code) && (!preg_match("/^[A-Z]{2}$/", $country_code))) {
            throw new \InvalidArgumentException("invalid value for $country_code when calling Place., must conform to the pattern /^[A-Z]{2}$/.");
        }

        $this->container['country_code'] = $country_code;

        return $this;
    }

    /**
     * Gets full_name
     *
     * @return string
     */
    public function getFullName()
    {
        return $this->container['full_name'];
    }

    /**
     * Sets full_name
     *
     * @param string $full_name The full name of this place.
     *
     * @return self
     */
    public function setFullName($full_name)
    {
        $this->container['full_name'] = $full_name;

        return $this;
    }

    /**
     * Gets geo
     *
     * @return \OpenAPI\Client\Model\Geo|null
     */
    public function getGeo()
    {
        return $this->container['geo'];
    }

    /**
     * Sets geo
     *
     * @param \OpenAPI\Client\Model\Geo|null $geo geo
     *
     * @return self
     */
    public function setGeo($geo)
    {
        $this->container['geo'] = $geo;

        return $this;
    }

    /**
     * Gets id
     *
     * @return string
     */
    public function getId()
    {
        return $this->container['id'];
    }

    /**
     * Sets id
     *
     * @param string $id The identifier for this place.
     *
     * @return self
     */
    public function setId($id)
    {
        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets name
     *
     * @return string|null
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     *
     * @param string|null $name The human readable name of this place.
     *
     * @return self
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets place_type
     *
     * @return \OpenAPI\Client\Model\PlaceType|null
     */
    public function getPlaceType()
    {
        return $this->container['place_type'];
    }

    /**
     * Sets place_type
     *
     * @param \OpenAPI\Client\Model\PlaceType|null $place_type place_type
     *
     * @return self
     */
    public function setPlaceType($place_type)
    {
        $this->container['place_type'] = $place_type;

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


