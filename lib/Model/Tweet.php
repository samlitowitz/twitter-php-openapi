<?php
/**
 * Tweet
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
 * Tweet Class Doc Comment
 *
 * @category Class
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Tweet implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Tweet';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'attachments' => '\OpenAPI\Client\Model\TweetAttachments',
        'author_id' => 'string',
        'context_annotations' => '\OpenAPI\Client\Model\ContextAnnotation[]',
        'conversation_id' => 'string',
        'created_at' => '\DateTime',
        'entities' => '\OpenAPI\Client\Model\FullTextEntities',
        'geo' => '\OpenAPI\Client\Model\TweetGeo',
        'id' => 'string',
        'in_reply_to_user_id' => 'string',
        'lang' => 'string',
        'non_public_metrics' => '\OpenAPI\Client\Model\TweetNonPublicMetrics',
        'organic_metrics' => '\OpenAPI\Client\Model\TweetOrganicMetrics',
        'possibly_sensitive' => 'bool',
        'promoted_metrics' => '\OpenAPI\Client\Model\TweetPromotedMetrics',
        'public_metrics' => '\OpenAPI\Client\Model\TweetPublicMetrics',
        'referenced_tweets' => '\OpenAPI\Client\Model\TweetReferencedTweetsInner[]',
        'reply_settings' => '\OpenAPI\Client\Model\ReplySettings',
        'source' => 'string',
        'text' => 'string',
        'withheld' => '\OpenAPI\Client\Model\TweetWithheld'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'attachments' => null,
        'author_id' => null,
        'context_annotations' => null,
        'conversation_id' => null,
        'created_at' => 'date-time',
        'entities' => null,
        'geo' => null,
        'id' => null,
        'in_reply_to_user_id' => null,
        'lang' => null,
        'non_public_metrics' => null,
        'organic_metrics' => null,
        'possibly_sensitive' => null,
        'promoted_metrics' => null,
        'public_metrics' => null,
        'referenced_tweets' => null,
        'reply_settings' => null,
        'source' => null,
        'text' => null,
        'withheld' => null
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
        'attachments' => 'attachments',
        'author_id' => 'author_id',
        'context_annotations' => 'context_annotations',
        'conversation_id' => 'conversation_id',
        'created_at' => 'created_at',
        'entities' => 'entities',
        'geo' => 'geo',
        'id' => 'id',
        'in_reply_to_user_id' => 'in_reply_to_user_id',
        'lang' => 'lang',
        'non_public_metrics' => 'non_public_metrics',
        'organic_metrics' => 'organic_metrics',
        'possibly_sensitive' => 'possibly_sensitive',
        'promoted_metrics' => 'promoted_metrics',
        'public_metrics' => 'public_metrics',
        'referenced_tweets' => 'referenced_tweets',
        'reply_settings' => 'reply_settings',
        'source' => 'source',
        'text' => 'text',
        'withheld' => 'withheld'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'attachments' => 'setAttachments',
        'author_id' => 'setAuthorId',
        'context_annotations' => 'setContextAnnotations',
        'conversation_id' => 'setConversationId',
        'created_at' => 'setCreatedAt',
        'entities' => 'setEntities',
        'geo' => 'setGeo',
        'id' => 'setId',
        'in_reply_to_user_id' => 'setInReplyToUserId',
        'lang' => 'setLang',
        'non_public_metrics' => 'setNonPublicMetrics',
        'organic_metrics' => 'setOrganicMetrics',
        'possibly_sensitive' => 'setPossiblySensitive',
        'promoted_metrics' => 'setPromotedMetrics',
        'public_metrics' => 'setPublicMetrics',
        'referenced_tweets' => 'setReferencedTweets',
        'reply_settings' => 'setReplySettings',
        'source' => 'setSource',
        'text' => 'setText',
        'withheld' => 'setWithheld'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'attachments' => 'getAttachments',
        'author_id' => 'getAuthorId',
        'context_annotations' => 'getContextAnnotations',
        'conversation_id' => 'getConversationId',
        'created_at' => 'getCreatedAt',
        'entities' => 'getEntities',
        'geo' => 'getGeo',
        'id' => 'getId',
        'in_reply_to_user_id' => 'getInReplyToUserId',
        'lang' => 'getLang',
        'non_public_metrics' => 'getNonPublicMetrics',
        'organic_metrics' => 'getOrganicMetrics',
        'possibly_sensitive' => 'getPossiblySensitive',
        'promoted_metrics' => 'getPromotedMetrics',
        'public_metrics' => 'getPublicMetrics',
        'referenced_tweets' => 'getReferencedTweets',
        'reply_settings' => 'getReplySettings',
        'source' => 'getSource',
        'text' => 'getText',
        'withheld' => 'getWithheld'
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
        $this->container['attachments'] = $data['attachments'] ?? null;
        $this->container['author_id'] = $data['author_id'] ?? null;
        $this->container['context_annotations'] = $data['context_annotations'] ?? null;
        $this->container['conversation_id'] = $data['conversation_id'] ?? null;
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['entities'] = $data['entities'] ?? null;
        $this->container['geo'] = $data['geo'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['in_reply_to_user_id'] = $data['in_reply_to_user_id'] ?? null;
        $this->container['lang'] = $data['lang'] ?? null;
        $this->container['non_public_metrics'] = $data['non_public_metrics'] ?? null;
        $this->container['organic_metrics'] = $data['organic_metrics'] ?? null;
        $this->container['possibly_sensitive'] = $data['possibly_sensitive'] ?? null;
        $this->container['promoted_metrics'] = $data['promoted_metrics'] ?? null;
        $this->container['public_metrics'] = $data['public_metrics'] ?? null;
        $this->container['referenced_tweets'] = $data['referenced_tweets'] ?? null;
        $this->container['reply_settings'] = $data['reply_settings'] ?? null;
        $this->container['source'] = $data['source'] ?? null;
        $this->container['text'] = $data['text'] ?? null;
        $this->container['withheld'] = $data['withheld'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['author_id']) && !preg_match("/^[0-9]{1,19}\\z/", $this->container['author_id'])) {
            $invalidProperties[] = "invalid value for 'author_id', must be conform to the pattern /^[0-9]{1,19}\\z/.";
        }

        if (!is_null($this->container['context_annotations']) && (count($this->container['context_annotations']) < 1)) {
            $invalidProperties[] = "invalid value for 'context_annotations', number of items must be greater than or equal to 1.";
        }

        if (!is_null($this->container['conversation_id']) && !preg_match("/^[0-9]{1,19}$/", $this->container['conversation_id'])) {
            $invalidProperties[] = "invalid value for 'conversation_id', must be conform to the pattern /^[0-9]{1,19}$/.";
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (!preg_match("/^[0-9]{1,19}$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[0-9]{1,19}$/.";
        }

        if (!is_null($this->container['in_reply_to_user_id']) && !preg_match("/^[0-9]{1,19}\\z/", $this->container['in_reply_to_user_id'])) {
            $invalidProperties[] = "invalid value for 'in_reply_to_user_id', must be conform to the pattern /^[0-9]{1,19}\\z/.";
        }

        if (!is_null($this->container['referenced_tweets']) && (count($this->container['referenced_tweets']) < 1)) {
            $invalidProperties[] = "invalid value for 'referenced_tweets', number of items must be greater than or equal to 1.";
        }

        if ($this->container['text'] === null) {
            $invalidProperties[] = "'text' can't be null";
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
     * Gets attachments
     *
     * @return \OpenAPI\Client\Model\TweetAttachments|null
     */
    public function getAttachments()
    {
        return $this->container['attachments'];
    }

    /**
     * Sets attachments
     *
     * @param \OpenAPI\Client\Model\TweetAttachments|null $attachments attachments
     *
     * @return self
     */
    public function setAttachments($attachments)
    {
        $this->container['attachments'] = $attachments;

        return $this;
    }

    /**
     * Gets author_id
     *
     * @return string|null
     */
    public function getAuthorId()
    {
        return $this->container['author_id'];
    }

    /**
     * Sets author_id
     *
     * @param string|null $author_id Unique identifier of this User. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @return self
     */
    public function setAuthorId($author_id)
    {

        if (!is_null($author_id) && (!preg_match("/^[0-9]{1,19}\\z/", $author_id))) {
            throw new \InvalidArgumentException("invalid value for $author_id when calling Tweet., must conform to the pattern /^[0-9]{1,19}\\z/.");
        }

        $this->container['author_id'] = $author_id;

        return $this;
    }

    /**
     * Gets context_annotations
     *
     * @return \OpenAPI\Client\Model\ContextAnnotation[]|null
     */
    public function getContextAnnotations()
    {
        return $this->container['context_annotations'];
    }

    /**
     * Sets context_annotations
     *
     * @param \OpenAPI\Client\Model\ContextAnnotation[]|null $context_annotations context_annotations
     *
     * @return self
     */
    public function setContextAnnotations($context_annotations)
    {


        if (!is_null($context_annotations) && (count($context_annotations) < 1)) {
            throw new \InvalidArgumentException('invalid length for $context_annotations when calling Tweet., number of items must be greater than or equal to 1.');
        }
        $this->container['context_annotations'] = $context_annotations;

        return $this;
    }

    /**
     * Gets conversation_id
     *
     * @return string|null
     */
    public function getConversationId()
    {
        return $this->container['conversation_id'];
    }

    /**
     * Sets conversation_id
     *
     * @param string|null $conversation_id Unique identifier of this Tweet. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @return self
     */
    public function setConversationId($conversation_id)
    {

        if (!is_null($conversation_id) && (!preg_match("/^[0-9]{1,19}$/", $conversation_id))) {
            throw new \InvalidArgumentException("invalid value for $conversation_id when calling Tweet., must conform to the pattern /^[0-9]{1,19}$/.");
        }

        $this->container['conversation_id'] = $conversation_id;

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
     * @param \DateTime|null $created_at Creation time of the Tweet.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets entities
     *
     * @return \OpenAPI\Client\Model\FullTextEntities|null
     */
    public function getEntities()
    {
        return $this->container['entities'];
    }

    /**
     * Sets entities
     *
     * @param \OpenAPI\Client\Model\FullTextEntities|null $entities entities
     *
     * @return self
     */
    public function setEntities($entities)
    {
        $this->container['entities'] = $entities;

        return $this;
    }

    /**
     * Gets geo
     *
     * @return \OpenAPI\Client\Model\TweetGeo|null
     */
    public function getGeo()
    {
        return $this->container['geo'];
    }

    /**
     * Sets geo
     *
     * @param \OpenAPI\Client\Model\TweetGeo|null $geo geo
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
     * @param string $id Unique identifier of this Tweet. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @return self
     */
    public function setId($id)
    {

        if ((!preg_match("/^[0-9]{1,19}$/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling Tweet., must conform to the pattern /^[0-9]{1,19}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets in_reply_to_user_id
     *
     * @return string|null
     */
    public function getInReplyToUserId()
    {
        return $this->container['in_reply_to_user_id'];
    }

    /**
     * Sets in_reply_to_user_id
     *
     * @param string|null $in_reply_to_user_id Unique identifier of this User. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @return self
     */
    public function setInReplyToUserId($in_reply_to_user_id)
    {

        if (!is_null($in_reply_to_user_id) && (!preg_match("/^[0-9]{1,19}\\z/", $in_reply_to_user_id))) {
            throw new \InvalidArgumentException("invalid value for $in_reply_to_user_id when calling Tweet., must conform to the pattern /^[0-9]{1,19}\\z/.");
        }

        $this->container['in_reply_to_user_id'] = $in_reply_to_user_id;

        return $this;
    }

    /**
     * Gets lang
     *
     * @return string|null
     */
    public function getLang()
    {
        return $this->container['lang'];
    }

    /**
     * Sets lang
     *
     * @param string|null $lang Language of the Tweet, if detected by Twitter. Returned as a BCP47 language tag.
     *
     * @return self
     */
    public function setLang($lang)
    {
        $this->container['lang'] = $lang;

        return $this;
    }

    /**
     * Gets non_public_metrics
     *
     * @return \OpenAPI\Client\Model\TweetNonPublicMetrics|null
     */
    public function getNonPublicMetrics()
    {
        return $this->container['non_public_metrics'];
    }

    /**
     * Sets non_public_metrics
     *
     * @param \OpenAPI\Client\Model\TweetNonPublicMetrics|null $non_public_metrics non_public_metrics
     *
     * @return self
     */
    public function setNonPublicMetrics($non_public_metrics)
    {
        $this->container['non_public_metrics'] = $non_public_metrics;

        return $this;
    }

    /**
     * Gets organic_metrics
     *
     * @return \OpenAPI\Client\Model\TweetOrganicMetrics|null
     */
    public function getOrganicMetrics()
    {
        return $this->container['organic_metrics'];
    }

    /**
     * Sets organic_metrics
     *
     * @param \OpenAPI\Client\Model\TweetOrganicMetrics|null $organic_metrics organic_metrics
     *
     * @return self
     */
    public function setOrganicMetrics($organic_metrics)
    {
        $this->container['organic_metrics'] = $organic_metrics;

        return $this;
    }

    /**
     * Gets possibly_sensitive
     *
     * @return bool|null
     */
    public function getPossiblySensitive()
    {
        return $this->container['possibly_sensitive'];
    }

    /**
     * Sets possibly_sensitive
     *
     * @param bool|null $possibly_sensitive Indicates if this Tweet contains URLs marked as sensitive, for example content suitable for mature audiences.
     *
     * @return self
     */
    public function setPossiblySensitive($possibly_sensitive)
    {
        $this->container['possibly_sensitive'] = $possibly_sensitive;

        return $this;
    }

    /**
     * Gets promoted_metrics
     *
     * @return \OpenAPI\Client\Model\TweetPromotedMetrics|null
     */
    public function getPromotedMetrics()
    {
        return $this->container['promoted_metrics'];
    }

    /**
     * Sets promoted_metrics
     *
     * @param \OpenAPI\Client\Model\TweetPromotedMetrics|null $promoted_metrics promoted_metrics
     *
     * @return self
     */
    public function setPromotedMetrics($promoted_metrics)
    {
        $this->container['promoted_metrics'] = $promoted_metrics;

        return $this;
    }

    /**
     * Gets public_metrics
     *
     * @return \OpenAPI\Client\Model\TweetPublicMetrics|null
     */
    public function getPublicMetrics()
    {
        return $this->container['public_metrics'];
    }

    /**
     * Sets public_metrics
     *
     * @param \OpenAPI\Client\Model\TweetPublicMetrics|null $public_metrics public_metrics
     *
     * @return self
     */
    public function setPublicMetrics($public_metrics)
    {
        $this->container['public_metrics'] = $public_metrics;

        return $this;
    }

    /**
     * Gets referenced_tweets
     *
     * @return \OpenAPI\Client\Model\TweetReferencedTweetsInner[]|null
     */
    public function getReferencedTweets()
    {
        return $this->container['referenced_tweets'];
    }

    /**
     * Sets referenced_tweets
     *
     * @param \OpenAPI\Client\Model\TweetReferencedTweetsInner[]|null $referenced_tweets A list of Tweets this Tweet refers to. For example, if the parent Tweet is a Retweet, a Quoted Tweet or a Reply, it will include the related Tweet referenced to by its parent.
     *
     * @return self
     */
    public function setReferencedTweets($referenced_tweets)
    {


        if (!is_null($referenced_tweets) && (count($referenced_tweets) < 1)) {
            throw new \InvalidArgumentException('invalid length for $referenced_tweets when calling Tweet., number of items must be greater than or equal to 1.');
        }
        $this->container['referenced_tweets'] = $referenced_tweets;

        return $this;
    }

    /**
     * Gets reply_settings
     *
     * @return \OpenAPI\Client\Model\ReplySettings|null
     */
    public function getReplySettings()
    {
        return $this->container['reply_settings'];
    }

    /**
     * Sets reply_settings
     *
     * @param \OpenAPI\Client\Model\ReplySettings|null $reply_settings reply_settings
     *
     * @return self
     */
    public function setReplySettings($reply_settings)
    {
        $this->container['reply_settings'] = $reply_settings;

        return $this;
    }

    /**
     * Gets source
     *
     * @return string|null
     */
    public function getSource()
    {
        return $this->container['source'];
    }

    /**
     * Sets source
     *
     * @param string|null $source The name of the app the user Tweeted from.
     *
     * @return self
     */
    public function setSource($source)
    {
        $this->container['source'] = $source;

        return $this;
    }

    /**
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /**
     * Sets text
     *
     * @param string $text The content of the Tweet.
     *
     * @return self
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /**
     * Gets withheld
     *
     * @return \OpenAPI\Client\Model\TweetWithheld|null
     */
    public function getWithheld()
    {
        return $this->container['withheld'];
    }

    /**
     * Sets withheld
     *
     * @param \OpenAPI\Client\Model\TweetWithheld|null $withheld withheld
     *
     * @return self
     */
    public function setWithheld($withheld)
    {
        $this->container['withheld'] = $withheld;

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

