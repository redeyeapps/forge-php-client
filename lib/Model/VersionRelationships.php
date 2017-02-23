<?php
/**
 * VersionRelationships
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
 * VersionRelationships Class Doc Comment
 *
 * @category    Class
 * @package     Swagger\Client
 * @author      Swagger Codegen team
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class VersionRelationships implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'version_relationships';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = [
        'item' => '\Swagger\Client\Model\JsonApiRelationshipsLinksInternalResource',
        'refs' => '\Swagger\Client\Model\JsonApiRelationshipsLinksRefs',
        'storage' => '\Swagger\Client\Model\JsonApiRelationshipsLinksExternalResource',
        'derivatives' => '\Swagger\Client\Model\JsonApiRelationshipsLinksExternalResource',
        'thumbnails' => '\Swagger\Client\Model\JsonApiRelationshipsLinksExternalResource'
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
        'item' => 'item',
        'refs' => 'refs',
        'storage' => 'storage',
        'derivatives' => 'derivatives',
        'thumbnails' => 'thumbnails'
    ];


    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = [
        'item' => 'setItem',
        'refs' => 'setRefs',
        'storage' => 'setStorage',
        'derivatives' => 'setDerivatives',
        'thumbnails' => 'setThumbnails'
    ];


    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = [
        'item' => 'getItem',
        'refs' => 'getRefs',
        'storage' => 'getStorage',
        'derivatives' => 'getDerivatives',
        'thumbnails' => 'getThumbnails'
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
        $this->container['item'] = isset($data['item']) ? $data['item'] : null;
        $this->container['refs'] = isset($data['refs']) ? $data['refs'] : null;
        $this->container['storage'] = isset($data['storage']) ? $data['storage'] : null;
        $this->container['derivatives'] = isset($data['derivatives']) ? $data['derivatives'] : null;
        $this->container['thumbnails'] = isset($data['thumbnails']) ? $data['thumbnails'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = [];

        if ($this->container['item'] === null) {
            $invalid_properties[] = "'item' can't be null";
        }
        if ($this->container['refs'] === null) {
            $invalid_properties[] = "'refs' can't be null";
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

        if ($this->container['item'] === null) {
            return false;
        }
        if ($this->container['refs'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets item
     * @return \Swagger\Client\Model\JsonApiRelationshipsLinksInternalResource
     */
    public function getItem()
    {
        return $this->container['item'];
    }

    /**
     * Sets item
     * @param \Swagger\Client\Model\JsonApiRelationshipsLinksInternalResource $item
     * @return $this
     */
    public function setItem($item)
    {
        $this->container['item'] = $item;

        return $this;
    }

    /**
     * Gets refs
     * @return \Swagger\Client\Model\JsonApiRelationshipsLinksRefs
     */
    public function getRefs()
    {
        return $this->container['refs'];
    }

    /**
     * Sets refs
     * @param \Swagger\Client\Model\JsonApiRelationshipsLinksRefs $refs
     * @return $this
     */
    public function setRefs($refs)
    {
        $this->container['refs'] = $refs;

        return $this;
    }

    /**
     * Gets storage
     * @return \Swagger\Client\Model\JsonApiRelationshipsLinksExternalResource
     */
    public function getStorage()
    {
        return $this->container['storage'];
    }

    /**
     * Sets storage
     * @param \Swagger\Client\Model\JsonApiRelationshipsLinksExternalResource $storage
     * @return $this
     */
    public function setStorage($storage)
    {
        $this->container['storage'] = $storage;

        return $this;
    }

    /**
     * Gets derivatives
     * @return \Swagger\Client\Model\JsonApiRelationshipsLinksExternalResource
     */
    public function getDerivatives()
    {
        return $this->container['derivatives'];
    }

    /**
     * Sets derivatives
     * @param \Swagger\Client\Model\JsonApiRelationshipsLinksExternalResource $derivatives
     * @return $this
     */
    public function setDerivatives($derivatives)
    {
        $this->container['derivatives'] = $derivatives;

        return $this;
    }

    /**
     * Gets thumbnails
     * @return \Swagger\Client\Model\JsonApiRelationshipsLinksExternalResource
     */
    public function getThumbnails()
    {
        return $this->container['thumbnails'];
    }

    /**
     * Sets thumbnails
     * @param \Swagger\Client\Model\JsonApiRelationshipsLinksExternalResource $thumbnails
     * @return $this
     */
    public function setThumbnails($thumbnails)
    {
        $this->container['thumbnails'] = $thumbnails;

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


