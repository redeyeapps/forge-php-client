<?php
/**
 * PostBucketsPayloadAllow
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
 * PostBucketsPayloadAllow Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class PostBucketsPayloadAllow implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'post_buckets_payload_allow';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'auth_id' => 'string',
        'access' => 'string'
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
        'auth_id' => 'authId',
        'access' => 'access'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'auth_id' => 'setAuthId',
        'access' => 'setAccess'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'auth_id' => 'getAuthId',
        'access' => 'getAccess'
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

    const ACCESS_FULL = 'full';
    const ACCESS_READ = 'read';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getAccessAllowableValues()
    {
        return [
            self::ACCESS_FULL,
            self::ACCESS_READ,
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
        $this->container['auth_id'] = isset($data['auth_id']) ? $data['auth_id'] : null;
        $this->container['access'] = isset($data['access']) ? $data['access'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['auth_id'] === null) {
            $invalid_properties[] = "'auth_id' can't be null";
        }
        if ($this->container['access'] === null) {
            $invalid_properties[] = "'access' can't be null";
        }
        $allowed_values = ["full", "read"];
        if (!in_array($this->container['access'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'access', must be one of 'full', 'read'.";
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

        if ($this->container['auth_id'] === null) {
            return false;
        }
        if ($this->container['access'] === null) {
            return false;
        }
        $allowed_values = ["full", "read"];
        if (!in_array($this->container['access'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets auth_id
     * @return string
     */
    public function getAuthId()
    {
        return $this->container['auth_id'];
    }

    /**
     * Sets auth_id
     * @param string $auth_id The application key to grant access to
     * @return $this
     */
    public function setAuthId($auth_id)
    {
        $this->container['auth_id'] = $auth_id;

        return $this;
    }

    /**
     * Gets access
     * @return string
     */
    public function getAccess()
    {
        return $this->container['access'];
    }

    /**
     * Sets access
     * @param string $access Acceptable values: `full` or `read`
     * @return $this
     */
    public function setAccess($access)
    {
        $allowed_values = array('full', 'read');
        if ((!in_array($access, $allowed_values))) {
            throw new \InvalidArgumentException("Invalid value for 'access', must be one of 'full', 'read'");
        }
        $this->container['access'] = $access;

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


