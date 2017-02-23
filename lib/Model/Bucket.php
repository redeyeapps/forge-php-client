<?php
/**
 * Bucket
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
 * Bucket Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class Bucket implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'bucket';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'bucket_key' => 'string',
        'bucket_owner' => 'string',
        'created_date' => 'string',
        'permissions' => '\Swagger\Client\Model\Permission[]',
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
        'bucket_owner' => 'bucketOwner',
        'created_date' => 'createdDate',
        'permissions' => 'permissions',
        'policy_key' => 'policyKey'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'bucket_key' => 'setBucketKey',
        'bucket_owner' => 'setBucketOwner',
        'created_date' => 'setCreatedDate',
        'permissions' => 'setPermissions',
        'policy_key' => 'setPolicyKey'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'bucket_key' => 'getBucketKey',
        'bucket_owner' => 'getBucketOwner',
        'created_date' => 'getCreatedDate',
        'permissions' => 'getPermissions',
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
        $this->container['bucket_owner'] = isset($data['bucket_owner']) ? $data['bucket_owner'] : null;
        $this->container['created_date'] = isset($data['created_date']) ? $data['created_date'] : null;
        $this->container['permissions'] = isset($data['permissions']) ? $data['permissions'] : null;
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
     * @param string $bucket_key The key of the Bucket
     * @return $this
     */
    public function setBucketKey($bucket_key)
    {
        $this->container['bucket_key'] = $bucket_key;

        return $this;
    }

    /**
     * Gets bucket_owner
     * @return string
     */
    public function getBucketOwner()
    {
        return $this->container['bucket_owner'];
    }

    /**
     * Sets bucket_owner
     * @param string $bucket_owner The owner of the Bucket
     * @return $this
     */
    public function setBucketOwner($bucket_owner)
    {
        $this->container['bucket_owner'] = $bucket_owner;

        return $this;
    }

    /**
     * Gets created_date
     * @return string
     */
    public function getCreatedDate()
    {
        return $this->container['created_date'];
    }

    /**
     * Sets created_date
     * @param string $created_date Counts the number of views for the asset
     * @return $this
     */
    public function setCreatedDate($created_date)
    {
        $this->container['created_date'] = $created_date;

        return $this;
    }

    /**
     * Gets permissions
     * @return \Swagger\Client\Model\Permission[]
     */
    public function getPermissions()
    {
        return $this->container['permissions'];
    }

    /**
     * Sets permissions
     * @param \Swagger\Client\Model\Permission[] $permissions
     * @return $this
     */
    public function setPermissions($permissions)
    {
        $this->container['permissions'] = $permissions;

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
     * @param string $policy_key The policy key
     * @return $this
     */
    public function setPolicyKey($policy_key)
    {
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


