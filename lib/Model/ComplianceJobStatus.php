<?php
/**
 * ComplianceJobStatus
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
 * ComplianceJobStatus Class Doc Comment
 *
 * @category Class
 * @description Status of a compliance job.
 * @package  OpenAPI\Client
 * @author   OpenAPI Generator team
 * @link     https://openapi-generator.tech
 */
class ComplianceJobStatus
{
    /**
     * Possible values of this enum
     */
    public const CREATED = 'created';

    public const IN_PROGRESS = 'in_progress';

    public const FAILED = 'failed';

    public const COMPLETE = 'complete';

    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::CREATED,
            self::IN_PROGRESS,
            self::FAILED,
            self::COMPLETE
        ];
    }
}


