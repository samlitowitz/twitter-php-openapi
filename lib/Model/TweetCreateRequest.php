<?php
/**
 * TweetCreateRequest
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
 * TweetCreateRequest Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class TweetCreateRequest implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'TweetCreateRequest';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'direct_message_deep_link' => 'string',
        'for_super_followers_only' => 'bool',
        'geo' => '\OpenAPI\Client\Model\TweetCreateRequestGeo',
        'media' => '\OpenAPI\Client\Model\TweetCreateRequestMedia',
        'poll' => '\OpenAPI\Client\Model\TweetCreateRequestPoll',
        'quote_tweet_id' => 'string',
        'reply' => '\OpenAPI\Client\Model\TweetCreateRequestReply',
        'reply_settings' => 'string',
        'text' => 'string'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'direct_message_deep_link' => null,
        'for_super_followers_only' => null,
        'geo' => null,
        'media' => null,
        'poll' => null,
        'quote_tweet_id' => null,
        'reply' => null,
        'reply_settings' => null,
        'text' => null
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
        'direct_message_deep_link' => 'direct_message_deep_link',
        'for_super_followers_only' => 'for_super_followers_only',
        'geo' => 'geo',
        'media' => 'media',
        'poll' => 'poll',
        'quote_tweet_id' => 'quote_tweet_id',
        'reply' => 'reply',
        'reply_settings' => 'reply_settings',
        'text' => 'text'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'direct_message_deep_link' => 'setDirectMessageDeepLink',
        'for_super_followers_only' => 'setForSuperFollowersOnly',
        'geo' => 'setGeo',
        'media' => 'setMedia',
        'poll' => 'setPoll',
        'quote_tweet_id' => 'setQuoteTweetId',
        'reply' => 'setReply',
        'reply_settings' => 'setReplySettings',
        'text' => 'setText'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'direct_message_deep_link' => 'getDirectMessageDeepLink',
        'for_super_followers_only' => 'getForSuperFollowersOnly',
        'geo' => 'getGeo',
        'media' => 'getMedia',
        'poll' => 'getPoll',
        'quote_tweet_id' => 'getQuoteTweetId',
        'reply' => 'getReply',
        'reply_settings' => 'getReplySettings',
        'text' => 'getText'
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
        $this->container['direct_message_deep_link'] = $data['direct_message_deep_link'] ?? null;
        $this->container['for_super_followers_only'] = $data['for_super_followers_only'] ?? false;
        $this->container['geo'] = $data['geo'] ?? null;
        $this->container['media'] = $data['media'] ?? null;
        $this->container['poll'] = $data['poll'] ?? null;
        $this->container['quote_tweet_id'] = $data['quote_tweet_id'] ?? null;
        $this->container['reply'] = $data['reply'] ?? null;
        $this->container['reply_settings'] = $data['reply_settings'] ?? null;
        $this->container['text'] = $data['text'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['quote_tweet_id']) && !preg_match("/^[0-9]{1,19}$/", $this->container['quote_tweet_id'])) {
            $invalidProperties[] = "invalid value for 'quote_tweet_id', must be conform to the pattern /^[0-9]{1,19}$/.";
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
     * Gets direct_message_deep_link
     *
     * @return string|null
     */
    public function getDirectMessageDeepLink()
    {
        return $this->container['direct_message_deep_link'];
    }

    /**
     * Sets direct_message_deep_link
     *
     * @param string|null $direct_message_deep_link Link to take the conversation from the public timeline to a private Direct Message.
     *
     * @return self
     */
    public function setDirectMessageDeepLink($direct_message_deep_link)
    {
        $this->container['direct_message_deep_link'] = $direct_message_deep_link;

        return $this;
    }

    /**
     * Gets for_super_followers_only
     *
     * @return bool|null
     */
    public function getForSuperFollowersOnly()
    {
        return $this->container['for_super_followers_only'];
    }

    /**
     * Sets for_super_followers_only
     *
     * @param bool|null $for_super_followers_only Exclusive Tweet for super followers.
     *
     * @return self
     */
    public function setForSuperFollowersOnly($for_super_followers_only)
    {
        $this->container['for_super_followers_only'] = $for_super_followers_only;

        return $this;
    }

    /**
     * Gets geo
     *
     * @return \OpenAPI\Client\Model\TweetCreateRequestGeo|null
     */
    public function getGeo()
    {
        return $this->container['geo'];
    }

    /**
     * Sets geo
     *
     * @param \OpenAPI\Client\Model\TweetCreateRequestGeo|null $geo geo
     *
     * @return self
     */
    public function setGeo($geo)
    {
        $this->container['geo'] = $geo;

        return $this;
    }

    /**
     * Gets media
     *
     * @return \OpenAPI\Client\Model\TweetCreateRequestMedia|null
     */
    public function getMedia()
    {
        return $this->container['media'];
    }

    /**
     * Sets media
     *
     * @param \OpenAPI\Client\Model\TweetCreateRequestMedia|null $media media
     *
     * @return self
     */
    public function setMedia($media)
    {
        $this->container['media'] = $media;

        return $this;
    }

    /**
     * Gets poll
     *
     * @return \OpenAPI\Client\Model\TweetCreateRequestPoll|null
     */
    public function getPoll()
    {
        return $this->container['poll'];
    }

    /**
     * Sets poll
     *
     * @param \OpenAPI\Client\Model\TweetCreateRequestPoll|null $poll poll
     *
     * @return self
     */
    public function setPoll($poll)
    {
        $this->container['poll'] = $poll;

        return $this;
    }

    /**
     * Gets quote_tweet_id
     *
     * @return string|null
     */
    public function getQuoteTweetId()
    {
        return $this->container['quote_tweet_id'];
    }

    /**
     * Sets quote_tweet_id
     *
     * @param string|null $quote_tweet_id Unique identifier of this Tweet. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @return self
     */
    public function setQuoteTweetId($quote_tweet_id)
    {

        if (!is_null($quote_tweet_id) && (!preg_match("/^[0-9]{1,19}$/", $quote_tweet_id))) {
            throw new \InvalidArgumentException("invalid value for $quote_tweet_id when calling TweetCreateRequest., must conform to the pattern /^[0-9]{1,19}$/.");
        }

        $this->container['quote_tweet_id'] = $quote_tweet_id;

        return $this;
    }

    /**
     * Gets reply
     *
     * @return \OpenAPI\Client\Model\TweetCreateRequestReply|null
     */
    public function getReply()
    {
        return $this->container['reply'];
    }

    /**
     * Sets reply
     *
     * @param \OpenAPI\Client\Model\TweetCreateRequestReply|null $reply reply
     *
     * @return self
     */
    public function setReply($reply)
    {
        $this->container['reply'] = $reply;

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
     * Gets text
     *
     * @return string|null
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string|null $text The content of the Tweet.
     *
     * @return self
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

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

