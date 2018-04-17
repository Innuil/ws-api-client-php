<?php
/**
 * Power
 *
 * PHP version 5
 *
 * @category Class
 * @package  WsApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * Wheel Fitment API
 *
 * The Wheel Fitment API allows for programmatic access to the database of www.wheel-size.com and its services. Use this API to retrieve information about vehicle fitment database for rims and tires, including OE and option fitments, and plus/minus sizing fitment information. A variety of country and language specific options are available. The coverage of fitment data for vehicles manufactured since 2000 is nearly 100%.  The information about fitment data is updated on a daily basis.
 *
 * OpenAPI spec version: v1
 * Contact: info@wheel-size.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 * Swagger Codegen version: 2.4.0-SNAPSHOT
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace WsApiClient\Model;

use \ArrayAccess;
use \WsApiClient\ObjectSerializer;

/**
 * Power Class Doc Comment
 *
 * @category Class
 * @description Power in different units (can be __*&#x60;null&#x60;*__)
 * @package  WsApiClient
 * @author   Swagger Codegen team
 * @link     https://github.com/swagger-api/swagger-codegen
 */
class Power implements ModelInterface, ArrayAccess
{
    const DISCRIMINATOR = null;

    /**
      * The original name of the model.
      *
      * @var string
      */
    protected static $swaggerModelName = 'Power';

    /**
      * Array of property to type mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerTypes = [
        'ps' => 'float',
        'hp' => 'float',
        'k_w' => 'float'
    ];

    /**
      * Array of property to format mappings. Used for (de)serialization
      *
      * @var string[]
      */
    protected static $swaggerFormats = [
        'ps' => null,
        'hp' => null,
        'k_w' => null
    ];

    /**
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /**
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'ps' => 'PS',
        'hp' => 'hp',
        'k_w' => 'kW'
    ];

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'ps' => 'setPs',
        'hp' => 'setHp',
        'k_w' => 'setKW'
    ];

    /**
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'ps' => 'getPs',
        'hp' => 'getHp',
        'k_w' => 'getKW'
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
        return self::$swaggerModelName;
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
        $this->container['ps'] = isset($data['ps']) ? $data['ps'] : null;
        $this->container['hp'] = isset($data['hp']) ? $data['hp'] : null;
        $this->container['k_w'] = isset($data['k_w']) ? $data['k_w'] : null;
    }

    /**
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['ps'] === null) {
            $invalidProperties[] = "'ps' can't be null";
        }
        if ($this->container['hp'] === null) {
            $invalidProperties[] = "'hp' can't be null";
        }
        if ($this->container['k_w'] === null) {
            $invalidProperties[] = "'k_w' can't be null";
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

        if ($this->container['ps'] === null) {
            return false;
        }
        if ($this->container['hp'] === null) {
            return false;
        }
        if ($this->container['k_w'] === null) {
            return false;
        }
        return true;
    }


    /**
     * Gets ps
     *
     * @return float
     */
    public function getPs()
    {
        return $this->container['ps'];
    }

    /**
     * Sets ps
     *
     * @param float $ps Power, PS (e.g. `169`)
     *
     * @return $this
     */
    public function setPs($ps)
    {
        $this->container['ps'] = $ps;

        return $this;
    }

    /**
     * Gets hp
     *
     * @return float
     */
    public function getHp()
    {
        return $this->container['hp'];
    }

    /**
     * Sets hp
     *
     * @param float $hp Power, hp (e.g. `166`)
     *
     * @return $this
     */
    public function setHp($hp)
    {
        $this->container['hp'] = $hp;

        return $this;
    }

    /**
     * Gets k_w
     *
     * @return float
     */
    public function getKW()
    {
        return $this->container['k_w'];
    }

    /**
     * Sets k_w
     *
     * @param float $k_w Power, kW (e.g. `124`)
     *
     * @return $this
     */
    public function setKW($k_w)
    {
        $this->container['k_w'] = $k_w;

        return $this;
    }
    /**
     * Returns true if offset exists. False otherwise.
     *
     * @param integer $offset Offset
     *
     * @return boolean
     */
    public function offsetExists($offset)
    {
        return isset($this->container[$offset]);
    }

    /**
     * Gets offset.
     *
     * @param integer $offset Offset
     *
     * @return mixed
     */
    public function offsetGet($offset)
    {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    /**
     * Sets value based on offset.
     *
     * @param integer $offset Offset
     * @param mixed   $value  Value to be set
     *
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
     *
     * @param integer $offset Offset
     *
     * @return void
     */
    public function offsetUnset($offset)
    {
        unset($this->container[$offset]);
    }

    /**
     * Gets the string presentation of the object
     *
     * @return string
     */
    public function __toString()
    {
        if (defined('JSON_PRETTY_PRINT')) { // use JSON pretty print
            return json_encode(
                ObjectSerializer::sanitizeForSerialization($this),
                JSON_PRETTY_PRINT
            );
        }

        return json_encode(ObjectSerializer::sanitizeForSerialization($this));
    }
}

