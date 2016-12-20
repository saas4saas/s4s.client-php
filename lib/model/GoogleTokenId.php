<?php
/**
 * GoogleTokenId
 *
 * PHP version 5
 *
 * @category Class
 * @package  s4s
 * @author   http://github.com/swagger-api/swagger-codegen
 * @license  http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link     https://github.com/swagger-api/swagger-codegen
 */

/**
 * 
 *
 * No descripton provided (generated by Swagger Codegen https://github.com/swagger-api/swagger-codegen)
 *
 * OpenAPI spec version: 
 * Contact: 
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

namespace s4s\model;

use \ArrayAccess;

/**
 * GoogleTokenId Class Doc Comment
 *
 * @category    Class */
 // @description Model description
/** 
 * @package     s4s
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class GoogleTokenId implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'GoogleTokenId';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'name' => 'string',
        'email_verified' => 'bool',
        'email' => 'string',
        'exp' => 'int',
        'profile' => 'string',
        'picture' => 'string',
        'iat' => 'int',
        'sub' => 'string',
        'at_hash' => 'string',
        'azp' => 'string',
        'aud' => 'string',
        'hd' => 'string',
        'iss' => 'string'
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
        'name' => 'name',
        'email_verified' => 'email_verified',
        'email' => 'email',
        'exp' => 'exp',
        'profile' => 'profile',
        'picture' => 'picture',
        'iat' => 'iat',
        'sub' => 'sub',
        'at_hash' => 'at_hash',
        'azp' => 'azp',
        'aud' => 'aud',
        'hd' => 'hd',
        'iss' => 'iss'
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
        'name' => 'setName',
        'email_verified' => 'setEmailVerified',
        'email' => 'setEmail',
        'exp' => 'setExp',
        'profile' => 'setProfile',
        'picture' => 'setPicture',
        'iat' => 'setIat',
        'sub' => 'setSub',
        'at_hash' => 'setAtHash',
        'azp' => 'setAzp',
        'aud' => 'setAud',
        'hd' => 'setHd',
        'iss' => 'setIss'
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
        'name' => 'getName',
        'email_verified' => 'getEmailVerified',
        'email' => 'getEmail',
        'exp' => 'getExp',
        'profile' => 'getProfile',
        'picture' => 'getPicture',
        'iat' => 'getIat',
        'sub' => 'getSub',
        'at_hash' => 'getAtHash',
        'azp' => 'getAzp',
        'aud' => 'getAud',
        'hd' => 'getHd',
        'iss' => 'getIss'
    );

    public static function getters()
    {
        return self::$getters;
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
        $this->container['name'] = isset($data['name']) ? $data['name'] : null;
        $this->container['email_verified'] = isset($data['email_verified']) ? $data['email_verified'] : null;
        $this->container['email'] = isset($data['email']) ? $data['email'] : null;
        $this->container['exp'] = isset($data['exp']) ? $data['exp'] : null;
        $this->container['profile'] = isset($data['profile']) ? $data['profile'] : null;
        $this->container['picture'] = isset($data['picture']) ? $data['picture'] : null;
        $this->container['iat'] = isset($data['iat']) ? $data['iat'] : null;
        $this->container['sub'] = isset($data['sub']) ? $data['sub'] : null;
        $this->container['at_hash'] = isset($data['at_hash']) ? $data['at_hash'] : null;
        $this->container['azp'] = isset($data['azp']) ? $data['azp'] : null;
        $this->container['aud'] = isset($data['aud']) ? $data['aud'] : null;
        $this->container['hd'] = isset($data['hd']) ? $data['hd'] : null;
        $this->container['iss'] = isset($data['iss']) ? $data['iss'] : null;
    }

    /**
     * show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalid_properties = array();
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
        return true;
    }


    /**
     * Gets name
     * @return string
     */
    public function getName()
    {
        return $this->container['name'];
    }

    /**
     * Sets name
     * @param string $name
     * @return $this
     */
    public function setName($name)
    {
        $this->container['name'] = $name;

        return $this;
    }

    /**
     * Gets email_verified
     * @return bool
     */
    public function getEmailVerified()
    {
        return $this->container['email_verified'];
    }

    /**
     * Sets email_verified
     * @param bool $email_verified
     * @return $this
     */
    public function setEmailVerified($email_verified)
    {
        $this->container['email_verified'] = $email_verified;

        return $this;
    }

    /**
     * Gets email
     * @return string
     */
    public function getEmail()
    {
        return $this->container['email'];
    }

    /**
     * Sets email
     * @param string $email
     * @return $this
     */
    public function setEmail($email)
    {
        $this->container['email'] = $email;

        return $this;
    }

    /**
     * Gets exp
     * @return int
     */
    public function getExp()
    {
        return $this->container['exp'];
    }

    /**
     * Sets exp
     * @param int $exp
     * @return $this
     */
    public function setExp($exp)
    {
        $this->container['exp'] = $exp;

        return $this;
    }

    /**
     * Gets profile
     * @return string
     */
    public function getProfile()
    {
        return $this->container['profile'];
    }

    /**
     * Sets profile
     * @param string $profile
     * @return $this
     */
    public function setProfile($profile)
    {
        $this->container['profile'] = $profile;

        return $this;
    }

    /**
     * Gets picture
     * @return string
     */
    public function getPicture()
    {
        return $this->container['picture'];
    }

    /**
     * Sets picture
     * @param string $picture
     * @return $this
     */
    public function setPicture($picture)
    {
        $this->container['picture'] = $picture;

        return $this;
    }

    /**
     * Gets iat
     * @return int
     */
    public function getIat()
    {
        return $this->container['iat'];
    }

    /**
     * Sets iat
     * @param int $iat
     * @return $this
     */
    public function setIat($iat)
    {
        $this->container['iat'] = $iat;

        return $this;
    }

    /**
     * Gets sub
     * @return string
     */
    public function getSub()
    {
        return $this->container['sub'];
    }

    /**
     * Sets sub
     * @param string $sub
     * @return $this
     */
    public function setSub($sub)
    {
        $this->container['sub'] = $sub;

        return $this;
    }

    /**
     * Gets at_hash
     * @return string
     */
    public function getAtHash()
    {
        return $this->container['at_hash'];
    }

    /**
     * Sets at_hash
     * @param string $at_hash
     * @return $this
     */
    public function setAtHash($at_hash)
    {
        $this->container['at_hash'] = $at_hash;

        return $this;
    }

    /**
     * Gets azp
     * @return string
     */
    public function getAzp()
    {
        return $this->container['azp'];
    }

    /**
     * Sets azp
     * @param string $azp
     * @return $this
     */
    public function setAzp($azp)
    {
        $this->container['azp'] = $azp;

        return $this;
    }

    /**
     * Gets aud
     * @return string
     */
    public function getAud()
    {
        return $this->container['aud'];
    }

    /**
     * Sets aud
     * @param string $aud
     * @return $this
     */
    public function setAud($aud)
    {
        $this->container['aud'] = $aud;

        return $this;
    }

    /**
     * Gets hd
     * @return string
     */
    public function getHd()
    {
        return $this->container['hd'];
    }

    /**
     * Sets hd
     * @param string $hd
     * @return $this
     */
    public function setHd($hd)
    {
        $this->container['hd'] = $hd;

        return $this;
    }

    /**
     * Gets iss
     * @return string
     */
    public function getIss()
    {
        return $this->container['iss'];
    }

    /**
     * Sets iss
     * @param string $iss
     * @return $this
     */
    public function setIss($iss)
    {
        $this->container['iss'] = $iss;

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
            return json_encode(\s4s\ObjectSerializer::sanitizeForSerialization($this), JSON_PRETTY_PRINT);
        }

        return json_encode(\s4s\ObjectSerializer::sanitizeForSerialization($this));
    }
}

