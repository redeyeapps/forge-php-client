<?php
/**
 * PostBucketsPayload
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   Swaagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Forge SDK
 *
 * The Forge Platform contains an expanding collection of web service components that can be used with Autodesk cloud-based products or your own technologies. Take advantage of Autodesk’s expertise in design and engineering.
 *
 * OpenAPI spec version: 0.1.0
 * Contact: forge.help@autodesk.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * PostBucketsPayload Class Doc Comment
 *
 * @category    Class
 * @description Bucket Payload Body Structure
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PostBucketsPayload implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'post_buckets_payload';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bucket_key' => 'string',
        'allow' => '\Swagger\Client\Model\PostBucketsPayloadAllow[]',
        'policy_key' => 'string'
    ];

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = [
        'bucket_key' => 'bucketKey',
        'allow' => 'allow',
        'policy_key' => 'policyKey'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'bucket_key' => 'setBucketKey',
        'allow' => 'setAllow',
        'policy_key' => 'setPolicyKey'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'bucket_key' => 'getBucketKey',
        'allow' => 'getAllow',
        'policy_key' => 'getPolicyKey'
    ];

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    public static function setters()
    {
        return self::$setters;
    }

    public static function getters()
    {
        return self::$getters;
    }

    const POLICY_KEY_TRANSIENT = 'transient';
    const POLICY_KEY_TEMPORARY = 'temporary';
    const POLICY_KEY_PERSISTENT = 'persistent';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getPolicyKeyAllowableValues()
    {
        return [
            self::POLICY_KEY_TRANSIENT,
            self::POLICY_KEY_TEMPORARY,
            self::POLICY_KEY_PERSISTENT,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = [];

    /**
     * Constructor
     * @param mixed[] $data Associated array of property values initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['bucket_key'] = isset($data['bucket_key']) ? $data['bucket_key'] : null;
        $this->container['allow'] = isset($data['allow']) ? $data['allow'] : null;
        $this->container['policy_key'] = isset($data['policy_key']) ? $data['policy_key'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['bucket_key'] === null) {
            $invalid_properties[] = "'bucket_key' can't be null";
        }
        if ($this->container['policy_key'] === null) {
            $invalid_properties[] = "'policy_key' can't be null";
        }
        $allowed_values = ["transient", "temporary", "persistent"];
        if (!in_array($this->container['policy_key'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'policy_key', must be one of 'transient', 'temporary', 'persistent'.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {

        if ($this->container['bucket_key'] === null) {
            return false;
        }
        if ($this->container['policy_key'] === null) {
            return false;
        }
        $allowed_values = ["transient", "temporary", "persistent"];
        if (!in_array($this->container['policy_key'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets bucket_key
     * @return string
     */
    public function getBucketKey()
    {
        return $this->container['bucket_key'];
    }

    /**
     * Sets bucket_key
     * @param string $bucket_key Bucket key
     * @return $this
     */
    public function setBucketKey($bucket_key)
    {
        $this->container['bucket_key'] = $bucket_key;

        return $this;
    }

    /**
     * Gets allow
     * @return \Swagger\Client\Model\PostBucketsPayloadAllow[]
     */
    public function getAllow()
    {
        return $this->container['allow'];
    }

    /**
     * Sets allow
     * @param \Swagger\Client\Model\PostBucketsPayloadAllow[] $allow 
     * @return $this
     */
    public function setAllow($allow)
    {
        $this->container['allow'] = $allow;

        return $this;
    }

    /**
     * Gets policy_key
     * @return string
     */
    public function getPolicyKey()
    {
        return $this->container['policy_key'];
    }

    /**
     * Sets policy_key
     * @param string $policy_key [Data retention policy](https://developer.autodesk.com/en/docs/data/v2/overview/retention-policy/)  Acceptable values: `transient`, `temporary` or `persistent`
     * @return $this
     */
    public function setPolicyKey($policy_key)
    {
        $allowed_values = array('transient', 'temporary', 'persistent');
        if ((!in_array($policy_key, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'policy_key', must be one of 'transient', 'temporary', 'persistent'");
        }
        $this->container['policy_key'] = $policy_key;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     * @param  integer $offset Offset
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     * @param  integer $offset Offset
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     * @param  integer $offset Offset
     * @param  mixed   $value  Value to be set
     * @return void
     */
    public function offsetSet($offset, $value)
    {
        if (is_null($offset)) {
            $this->container[] = $value;
        } else {
            $this->container[$offset] = $value;
        }
    }

    /**
     * Unsets offset.
     * @param  integer $offset Offset
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\Swagger\Client\ObjectSerializer::sanitizeForSerialization($this));
    }
}


