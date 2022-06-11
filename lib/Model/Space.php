<?php
/**
 * Space
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
 * Space Class Doc Comment
 *
 * @category Class
 * @description 
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 * @implements \ArrayAccess<TKey, TValue>
 * @template TKey int|null
 * @template TValue mixed|null
 */
class Space implements ModelInterface, ArrayAccess, \JsonSerializable
{
    public const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $openAPIModelName = 'Space';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $openAPITypes = [
        'created_at' => '\DateTime',
        'creator_id' => 'string',
        'ended_at' => '\DateTime',
        'host_ids' => 'string[]',
        'id' => 'string',
        'invited_user_ids' => 'string[]',
        'is_ticketed' => 'bool',
        'lang' => 'string',
        'participant_count' => 'int',
        'scheduled_start' => '\DateTime',
        'speaker_ids' => 'string[]',
        'started_at' => '\DateTime',
        'state' => 'string',
        'subscriber_count' => 'int',
        'title' => 'string',
        'topics' => '\OpenAPI\Client\Model\SpaceTopicsInner[]',
        'updated_at' => '\DateTime'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      * @phpstan-var array<string, string|null>
      * @psalm-var array<string, string|null>
      */
    protected static $openAPIFormats = [
        'created_at' => 'date-time',
        'creator_id' => null,
        'ended_at' => 'date-time',
        'host_ids' => null,
        'id' => null,
        'invited_user_ids' => null,
        'is_ticketed' => null,
        'lang' => null,
        'participant_count' => 'int32',
        'scheduled_start' => 'date-time',
        'speaker_ids' => null,
        'started_at' => 'date-time',
        'state' => null,
        'subscriber_count' => 'int32',
        'title' => null,
        'topics' => null,
        'updated_at' => 'date-time'
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
        'created_at' => 'created_at',
        'creator_id' => 'creator_id',
        'ended_at' => 'ended_at',
        'host_ids' => 'host_ids',
        'id' => 'id',
        'invited_user_ids' => 'invited_user_ids',
        'is_ticketed' => 'is_ticketed',
        'lang' => 'lang',
        'participant_count' => 'participant_count',
        'scheduled_start' => 'scheduled_start',
        'speaker_ids' => 'speaker_ids',
        'started_at' => 'started_at',
        'state' => 'state',
        'subscriber_count' => 'subscriber_count',
        'title' => 'title',
        'topics' => 'topics',
        'updated_at' => 'updated_at'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'created_at' => 'setCreatedAt',
        'creator_id' => 'setCreatorId',
        'ended_at' => 'setEndedAt',
        'host_ids' => 'setHostIds',
        'id' => 'setId',
        'invited_user_ids' => 'setInvitedUserIds',
        'is_ticketed' => 'setIsTicketed',
        'lang' => 'setLang',
        'participant_count' => 'setParticipantCount',
        'scheduled_start' => 'setScheduledStart',
        'speaker_ids' => 'setSpeakerIds',
        'started_at' => 'setStartedAt',
        'state' => 'setState',
        'subscriber_count' => 'setSubscriberCount',
        'title' => 'setTitle',
        'topics' => 'setTopics',
        'updated_at' => 'setUpdatedAt'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'created_at' => 'getCreatedAt',
        'creator_id' => 'getCreatorId',
        'ended_at' => 'getEndedAt',
        'host_ids' => 'getHostIds',
        'id' => 'getId',
        'invited_user_ids' => 'getInvitedUserIds',
        'is_ticketed' => 'getIsTicketed',
        'lang' => 'getLang',
        'participant_count' => 'getParticipantCount',
        'scheduled_start' => 'getScheduledStart',
        'speaker_ids' => 'getSpeakerIds',
        'started_at' => 'getStartedAt',
        'state' => 'getState',
        'subscriber_count' => 'getSubscriberCount',
        'title' => 'getTitle',
        'topics' => 'getTopics',
        'updated_at' => 'getUpdatedAt'
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

    public const STATE_LIVE = 'live';
    public const STATE_SCHEDULED = 'scheduled';
    public const STATE_ENDED = 'ended';

    /**
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getStateAllowableValues()
    {
        return [
            self::STATE_LIVE,
            self::STATE_SCHEDULED,
            self::STATE_ENDED,
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
        $this->container['created_at'] = $data['created_at'] ?? null;
        $this->container['creator_id'] = $data['creator_id'] ?? null;
        $this->container['ended_at'] = $data['ended_at'] ?? null;
        $this->container['host_ids'] = $data['host_ids'] ?? null;
        $this->container['id'] = $data['id'] ?? null;
        $this->container['invited_user_ids'] = $data['invited_user_ids'] ?? null;
        $this->container['is_ticketed'] = $data['is_ticketed'] ?? null;
        $this->container['lang'] = $data['lang'] ?? null;
        $this->container['participant_count'] = $data['participant_count'] ?? null;
        $this->container['scheduled_start'] = $data['scheduled_start'] ?? null;
        $this->container['speaker_ids'] = $data['speaker_ids'] ?? null;
        $this->container['started_at'] = $data['started_at'] ?? null;
        $this->container['state'] = $data['state'] ?? null;
        $this->container['subscriber_count'] = $data['subscriber_count'] ?? null;
        $this->container['title'] = $data['title'] ?? null;
        $this->container['topics'] = $data['topics'] ?? null;
        $this->container['updated_at'] = $data['updated_at'] ?? null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if (!is_null($this->container['creator_id']) && !preg_match("/^[0-9]{1,19}\\z/", $this->container['creator_id'])) {
            $invalidProperties[] = "invalid value for 'creator_id', must be conform to the pattern /^[0-9]{1,19}\\z/.";
        }

        if ($this->container['id'] === null) {
            $invalidProperties[] = "'id' can't be null";
        }
        if (!preg_match("/^[a-zA-Z0-9]{1,13}$/", $this->container['id'])) {
            $invalidProperties[] = "invalid value for 'id', must be conform to the pattern /^[a-zA-Z0-9]{1,13}$/.";
        }

        if ($this->container['state'] === null) {
            $invalidProperties[] = "'state' can't be null";
        }
        $allowedValues = $this->getStateAllowableValues();
        if (!is_null($this->container['state']) && !in_array($this->container['state'], $allowedValues, true)) {
            $invalidProperties[] = sprintf(
                "invalid value '%s' for 'state', must be one of '%s'",
                $this->container['state'],
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
     * @param \DateTime|null $created_at Creation time of the Space.
     *
     * @return self
     */
    public function setCreatedAt($created_at)
    {
        $this->container['created_at'] = $created_at;

        return $this;
    }

    /**
     * Gets creator_id
     *
     * @return string|null
     */
    public function getCreatorId()
    {
        return $this->container['creator_id'];
    }

    /**
     * Sets creator_id
     *
     * @param string|null $creator_id Unique identifier of this User. This is returned as a string in order to avoid complications with languages and tools that cannot handle large integers.
     *
     * @return self
     */
    public function setCreatorId($creator_id)
    {

        if (!is_null($creator_id) && (!preg_match("/^[0-9]{1,19}\\z/", $creator_id))) {
            throw new \InvalidArgumentException("invalid value for $creator_id when calling Space., must conform to the pattern /^[0-9]{1,19}\\z/.");
        }

        $this->container['creator_id'] = $creator_id;

        return $this;
    }

    /**
     * Gets ended_at
     *
     * @return \DateTime|null
     */
    public function getEndedAt()
    {
        return $this->container['ended_at'];
    }

    /**
     * Sets ended_at
     *
     * @param \DateTime|null $ended_at End time of the Space.
     *
     * @return self
     */
    public function setEndedAt($ended_at)
    {
        $this->container['ended_at'] = $ended_at;

        return $this;
    }

    /**
     * Gets host_ids
     *
     * @return string[]|null
     */
    public function getHostIds()
    {
        return $this->container['host_ids'];
    }

    /**
     * Sets host_ids
     *
     * @param string[]|null $host_ids The user ids for the hosts of the Space.
     *
     * @return self
     */
    public function setHostIds($host_ids)
    {
        $this->container['host_ids'] = $host_ids;

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
     * @param string $id The unique identifier of this Space.
     *
     * @return self
     */
    public function setId($id)
    {

        if ((!preg_match("/^[a-zA-Z0-9]{1,13}$/", $id))) {
            throw new \InvalidArgumentException("invalid value for $id when calling Space., must conform to the pattern /^[a-zA-Z0-9]{1,13}$/.");
        }

        $this->container['id'] = $id;

        return $this;
    }

    /**
     * Gets invited_user_ids
     *
     * @return string[]|null
     */
    public function getInvitedUserIds()
    {
        return $this->container['invited_user_ids'];
    }

    /**
     * Sets invited_user_ids
     *
     * @param string[]|null $invited_user_ids An array of user ids for people who were invited to a Space.
     *
     * @return self
     */
    public function setInvitedUserIds($invited_user_ids)
    {
        $this->container['invited_user_ids'] = $invited_user_ids;

        return $this;
    }

    /**
     * Gets is_ticketed
     *
     * @return bool|null
     */
    public function getIsTicketed()
    {
        return $this->container['is_ticketed'];
    }

    /**
     * Sets is_ticketed
     *
     * @param bool|null $is_ticketed Denotes if the Space is a ticketed Space.
     *
     * @return self
     */
    public function setIsTicketed($is_ticketed)
    {
        $this->container['is_ticketed'] = $is_ticketed;

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
     * @param string|null $lang The language of the Space.
     *
     * @return self
     */
    public function setLang($lang)
    {
        $this->container['lang'] = $lang;

        return $this;
    }

    /**
     * Gets participant_count
     *
     * @return int|null
     */
    public function getParticipantCount()
    {
        return $this->container['participant_count'];
    }

    /**
     * Sets participant_count
     *
     * @param int|null $participant_count The number of participants in a Space.
     *
     * @return self
     */
    public function setParticipantCount($participant_count)
    {
        $this->container['participant_count'] = $participant_count;

        return $this;
    }

    /**
     * Gets scheduled_start
     *
     * @return \DateTime|null
     */
    public function getScheduledStart()
    {
        return $this->container['scheduled_start'];
    }

    /**
     * Sets scheduled_start
     *
     * @param \DateTime|null $scheduled_start A date time stamp for when a Space is scheduled to begin.
     *
     * @return self
     */
    public function setScheduledStart($scheduled_start)
    {
        $this->container['scheduled_start'] = $scheduled_start;

        return $this;
    }

    /**
     * Gets speaker_ids
     *
     * @return string[]|null
     */
    public function getSpeakerIds()
    {
        return $this->container['speaker_ids'];
    }

    /**
     * Sets speaker_ids
     *
     * @param string[]|null $speaker_ids An array of user ids for people who were speakers in a Space.
     *
     * @return self
     */
    public function setSpeakerIds($speaker_ids)
    {
        $this->container['speaker_ids'] = $speaker_ids;

        return $this;
    }

    /**
     * Gets started_at
     *
     * @return \DateTime|null
     */
    public function getStartedAt()
    {
        return $this->container['started_at'];
    }

    /**
     * Sets started_at
     *
     * @param \DateTime|null $started_at When the Space was started as a date string.
     *
     * @return self
     */
    public function setStartedAt($started_at)
    {
        $this->container['started_at'] = $started_at;

        return $this;
    }

    /**
     * Gets state
     *
     * @return string
     */
    public function getState()
    {
        return $this->container['state'];
    }

    /**
     * Sets state
     *
     * @param string $state The current state of the Space.
     *
     * @return self
     */
    public function setState($state)
    {
        $allowedValues = $this->getStateAllowableValues();
        if (!in_array($state, $allowedValues, true)) {
            throw new \InvalidArgumentException(
                sprintf(
                    "Invalid value '%s' for 'state', must be one of '%s'",
                    $state,
                    implode("', '", $allowedValues)
                )
            );
        }
        $this->container['state'] = $state;

        return $this;
    }

    /**
     * Gets subscriber_count
     *
     * @return int|null
     */
    public function getSubscriberCount()
    {
        return $this->container['subscriber_count'];
    }

    /**
     * Sets subscriber_count
     *
     * @param int|null $subscriber_count The number of people who have either purchased a ticket or set a reminder for this Space.
     *
     * @return self
     */
    public function setSubscriberCount($subscriber_count)
    {
        $this->container['subscriber_count'] = $subscriber_count;

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
     * @param string|null $title The title of the Space.
     *
     * @return self
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /**
     * Gets topics
     *
     * @return \OpenAPI\Client\Model\SpaceTopicsInner[]|null
     */
    public function getTopics()
    {
        return $this->container['topics'];
    }

    /**
     * Sets topics
     *
     * @param \OpenAPI\Client\Model\SpaceTopicsInner[]|null $topics The topics of a Space, as selected by its creator.
     *
     * @return self
     */
    public function setTopics($topics)
    {
        $this->container['topics'] = $topics;

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
     * @param \DateTime|null $updated_at When the Space was last updated.
     *
     * @return self
     */
    public function setUpdatedAt($updated_at)
    {
        $this->container['updated_at'] = $updated_at;

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


