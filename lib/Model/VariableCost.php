<?php
/**
 * VariableCost
 *
 * PHP version 5
 *
 * @category Class
 * @package  Swagger\Client
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * s4s-full
 *
 * description
 *
 * OpenAPI spec version: stable
 * Contact: rui.p.oliveira@impactinglabs.com
 * Generated by: https://github.com/swagger-api/swagger-codegen.git
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

/**
 * NOTE: This class is auto generated by the swagger code generator program.
 * https://github.com/swagger-api/swagger-codegen
 * Do not edit the class manually.
 */

namespace Swagger\Client\Model;

use \ArrayAccess;

/**
 * VariableCost Class Doc Comment
 *
 * @category    Class */
 // @description Model description
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class VariableCost implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'VariableCost';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'resource_id' => 'string',
        'per_unit' => '\Swagger\Client\Model\VariableCostPerUnit',
        'interval_cost' => '\Swagger\Client\Model\VariableCostIntervalCost',
        'interval_per_unit' => '\Swagger\Client\Model\VariableCostIntervalPerUnit',
        'typ' => 'string'
    );

    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /**
     * Array of attributes where the key is the local name, and the value is the original name
     * @var string[]
     */
    protected static $attributeMap = array(
        'resource_id' => 'resourceId',
        'per_unit' => 'perUnit',
        'interval_cost' => 'intervalCost',
        'interval_per_unit' => 'intervalPerUnit',
        'typ' => 'typ'
    );

    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /**
     * Array of attributes to setter functions (for deserialization of responses)
     * @var string[]
     */
    protected static $setters = array(
        'resource_id' => 'setResourceId',
        'per_unit' => 'setPerUnit',
        'interval_cost' => 'setIntervalCost',
        'interval_per_unit' => 'setIntervalPerUnit',
        'typ' => 'setTyp'
    );

    public static function setters()
    {
        return self::$setters;
    }

    /**
     * Array of attributes to getter functions (for serialization of requests)
     * @var string[]
     */
    protected static $getters = array(
        'resource_id' => 'getResourceId',
        'per_unit' => 'getPerUnit',
        'interval_cost' => 'getIntervalCost',
        'interval_per_unit' => 'getIntervalPerUnit',
        'typ' => 'getTyp'
    );

    public static function getters()
    {
        return self::$getters;
    }

    const TYP_INTERVAL_COST = 'IntervalCost';
    const TYP_INTERVAL_PER_UNIT = 'IntervalPerUnit';
    const TYP_PER_UNIT = 'PerUnit';
    const TYP_NO_COST = 'NoCost';
    

    
    /**
     * Gets allowable values of the enum
     * @return string[]
     */
    public function getTypAllowableValues()
    {
        return [
            self::TYP_INTERVAL_COST,
            self::TYP_INTERVAL_PER_UNIT,
            self::TYP_PER_UNIT,
            self::TYP_NO_COST,
        ];
    }
    

    /**
     * Associative array for storing property values
     * @var mixed[]
     */
    protected $container = array();

    /**
     * Constructor
     * @param mixed[] $data Associated array of property value initalizing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['resource_id'] = isset($data['resource_id']) ? $data['resource_id'] : null;
        $this->container['per_unit'] = isset($data['per_unit']) ? $data['per_unit'] : null;
        $this->container['interval_cost'] = isset($data['interval_cost']) ? $data['interval_cost'] : null;
        $this->container['interval_per_unit'] = isset($data['interval_per_unit']) ? $data['interval_per_unit'] : null;
        $this->container['typ'] = isset($data['typ']) ? $data['typ'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
        $allowed_values = array("IntervalCost", "IntervalPerUnit", "PerUnit", "NoCost");
        if (!in_array($this->container['typ'], $allowed_values)) {
            $invalid_properties[] = "invalid value for 'typ', must be one of #{allowed_values}.";
        }

        return $invalid_properties;
    }

    /**
     * validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properteis are valid
     */
    public function valid()
    {
        $allowed_values = array("IntervalCost", "IntervalPerUnit", "PerUnit", "NoCost");
        if (!in_array($this->container['typ'], $allowed_values)) {
            return false;
        }
        return true;
    }


    /**
     * Gets resource_id
     * @return string
     */
    public function getResourceId()
    {
        return $this->container['resource_id'];
    }

    /**
     * Sets resource_id
     * @param string $resource_id
     * @return $this
     */
    public function setResourceId($resource_id)
    {
        $this->container['resource_id'] = $resource_id;

        return $this;
    }

    /**
     * Gets per_unit
     * @return \Swagger\Client\Model\VariableCostPerUnit
     */
    public function getPerUnit()
    {
        return $this->container['per_unit'];
    }

    /**
     * Sets per_unit
     * @param \Swagger\Client\Model\VariableCostPerUnit $per_unit
     * @return $this
     */
    public function setPerUnit($per_unit)
    {
        $this->container['per_unit'] = $per_unit;

        return $this;
    }

    /**
     * Gets interval_cost
     * @return \Swagger\Client\Model\VariableCostIntervalCost
     */
    public function getIntervalCost()
    {
        return $this->container['interval_cost'];
    }

    /**
     * Sets interval_cost
     * @param \Swagger\Client\Model\VariableCostIntervalCost $interval_cost
     * @return $this
     */
    public function setIntervalCost($interval_cost)
    {
        $this->container['interval_cost'] = $interval_cost;

        return $this;
    }

    /**
     * Gets interval_per_unit
     * @return \Swagger\Client\Model\VariableCostIntervalPerUnit
     */
    public function getIntervalPerUnit()
    {
        return $this->container['interval_per_unit'];
    }

    /**
     * Sets interval_per_unit
     * @param \Swagger\Client\Model\VariableCostIntervalPerUnit $interval_per_unit
     * @return $this
     */
    public function setIntervalPerUnit($interval_per_unit)
    {
        $this->container['interval_per_unit'] = $interval_per_unit;

        return $this;
    }

    /**
     * Gets typ
     * @return string
     */
    public function getTyp()
    {
        return $this->container['typ'];
    }

    /**
     * Sets typ
     * @param string $typ
     * @return $this
     */
    public function setTyp($typ)
    {
        $allowed_values = array('IntervalCost', 'IntervalPerUnit', 'PerUnit', 'NoCost');
        if (!in_array($typ, $allowed_values)) {
            throw new \InvalidArgumentException("Invalid value for 'typ', must be one of 'IntervalCost', 'IntervalPerUnit', 'PerUnit', 'NoCost'");
        }
        $this->container['typ'] = $typ;

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

