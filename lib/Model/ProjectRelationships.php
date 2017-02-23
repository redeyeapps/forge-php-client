<?php
/**
 * ProjectRelationships
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
 * ProjectRelationships Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class ProjectRelationships implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'project_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'hub' => '\Swagger\Client\Model\JsonApiRelationshipsLinksInternalResource',
        'root_folder' => '\Swagger\Client\Model\JsonApiRelationshipsLinksExternalResource'
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
        'hub' => 'hub',
        'root_folder' => 'rootFolder'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'hub' => 'setHub',
        'root_folder' => 'setRootFolder'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'hub' => 'getHub',
        'root_folder' => 'getRootFolder'
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
        $this->container['hub'] = isset($data['hub']) ? $data['hub'] : null;
        $this->container['root_folder'] = isset($data['root_folder']) ? $data['root_folder'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['hub'] === null) {
            $invalid_properties[] = "'hub' can't be null";
        }
        if ($this->container['root_folder'] === null) {
            $invalid_properties[] = "'root_folder' can't be null";
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

        if ($this->container['hub'] === null) {
            return false;
        }
        if ($this->container['root_folder'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets hub
     * @return \Swagger\Client\Model\JsonApiRelationshipsLinksInternalResource
     */
    public function getHub()
    {
        return $this->container['hub'];
    }

    /**
     * Sets hub
     * @param \Swagger\Client\Model\JsonApiRelationshipsLinksInternalResource $hub
     * @return $this
     */
    public function setHub($hub)
    {
        $this->container['hub'] = $hub;

        return $this;
    }

    /**
     * Gets root_folder
     * @return \Swagger\Client\Model\JsonApiRelationshipsLinksExternalResource
     */
    public function getRootFolder()
    {
        return $this->container['root_folder'];
    }

    /**
     * Sets root_folder
     * @param \Swagger\Client\Model\JsonApiRelationshipsLinksExternalResource $root_folder
     * @return $this
     */
    public function setRootFolder($root_folder)
    {
        $this->container['root_folder'] = $root_folder;

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


