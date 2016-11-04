<?php
/**
 * UserUiConf
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
 * UserUiConf Class Doc Comment
 *
 * @category    Class */
 // @description Model description
/** 
 * @package     Swagger\Client
 * @author      http://github.com/swagger-api/swagger-codegen
 * @license     http://www.apache.org/licenses/LICENSE-2.0 Apache Licene v2
 * @link        https://github.com/swagger-api/swagger-codegen
 */
class UserUiConf implements ArrayAccess
{
    /**
      * The original name of the model.
      * @var string
      */
    protected static $swaggerModelName = 'UserUiConf';

    /**
      * Array of property to type mappings. Used for (de)serialization
      * @var string[]
      */
    protected static $swaggerTypes = array(
        'google_client_id' => 'string',
        'google_client_key' => 'string',
        'login_url' => 'string',
        'base_path' => 'string',
        'change_password_url' => 'string',
        'register_url' => 'string',
        'recover_password_url' => 'string',
        'login_handler' => 'string',
        'subscribe_url' => 'string'
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
        'google_client_id' => 'googleClientId',
        'google_client_key' => 'googleClientKey',
        'login_url' => 'loginUrl',
        'base_path' => 'basePath',
        'change_password_url' => 'changePasswordUrl',
        'register_url' => 'registerUrl',
        'recover_password_url' => 'recoverPasswordUrl',
        'login_handler' => 'loginHandler',
        'subscribe_url' => 'subscribeUrl'
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
        'google_client_id' => 'setGoogleClientId',
        'google_client_key' => 'setGoogleClientKey',
        'login_url' => 'setLoginUrl',
        'base_path' => 'setBasePath',
        'change_password_url' => 'setChangePasswordUrl',
        'register_url' => 'setRegisterUrl',
        'recover_password_url' => 'setRecoverPasswordUrl',
        'login_handler' => 'setLoginHandler',
        'subscribe_url' => 'setSubscribeUrl'
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
        'google_client_id' => 'getGoogleClientId',
        'google_client_key' => 'getGoogleClientKey',
        'login_url' => 'getLoginUrl',
        'base_path' => 'getBasePath',
        'change_password_url' => 'getChangePasswordUrl',
        'register_url' => 'getRegisterUrl',
        'recover_password_url' => 'getRecoverPasswordUrl',
        'login_handler' => 'getLoginHandler',
        'subscribe_url' => 'getSubscribeUrl'
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
        $this->container['google_client_id'] = isset($data['google_client_id']) ? $data['google_client_id'] : null;
        $this->container['google_client_key'] = isset($data['google_client_key']) ? $data['google_client_key'] : null;
        $this->container['login_url'] = isset($data['login_url']) ? $data['login_url'] : null;
        $this->container['base_path'] = isset($data['base_path']) ? $data['base_path'] : null;
        $this->container['change_password_url'] = isset($data['change_password_url']) ? $data['change_password_url'] : null;
        $this->container['register_url'] = isset($data['register_url']) ? $data['register_url'] : null;
        $this->container['recover_password_url'] = isset($data['recover_password_url']) ? $data['recover_password_url'] : null;
        $this->container['login_handler'] = isset($data['login_handler']) ? $data['login_handler'] : null;
        $this->container['subscribe_url'] = isset($data['subscribe_url']) ? $data['subscribe_url'] : null;
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
     * Gets google_client_id
     * @return string
     */
    public function getGoogleClientId()
    {
        return $this->container['google_client_id'];
    }

    /**
     * Sets google_client_id
     * @param string $google_client_id
     * @return $this
     */
    public function setGoogleClientId($google_client_id)
    {
        $this->container['google_client_id'] = $google_client_id;

        return $this;
    }

    /**
     * Gets google_client_key
     * @return string
     */
    public function getGoogleClientKey()
    {
        return $this->container['google_client_key'];
    }

    /**
     * Sets google_client_key
     * @param string $google_client_key
     * @return $this
     */
    public function setGoogleClientKey($google_client_key)
    {
        $this->container['google_client_key'] = $google_client_key;

        return $this;
    }

    /**
     * Gets login_url
     * @return string
     */
    public function getLoginUrl()
    {
        return $this->container['login_url'];
    }

    /**
     * Sets login_url
     * @param string $login_url
     * @return $this
     */
    public function setLoginUrl($login_url)
    {
        $this->container['login_url'] = $login_url;

        return $this;
    }

    /**
     * Gets base_path
     * @return string
     */
    public function getBasePath()
    {
        return $this->container['base_path'];
    }

    /**
     * Sets base_path
     * @param string $base_path
     * @return $this
     */
    public function setBasePath($base_path)
    {
        $this->container['base_path'] = $base_path;

        return $this;
    }

    /**
     * Gets change_password_url
     * @return string
     */
    public function getChangePasswordUrl()
    {
        return $this->container['change_password_url'];
    }

    /**
     * Sets change_password_url
     * @param string $change_password_url
     * @return $this
     */
    public function setChangePasswordUrl($change_password_url)
    {
        $this->container['change_password_url'] = $change_password_url;

        return $this;
    }

    /**
     * Gets register_url
     * @return string
     */
    public function getRegisterUrl()
    {
        return $this->container['register_url'];
    }

    /**
     * Sets register_url
     * @param string $register_url
     * @return $this
     */
    public function setRegisterUrl($register_url)
    {
        $this->container['register_url'] = $register_url;

        return $this;
    }

    /**
     * Gets recover_password_url
     * @return string
     */
    public function getRecoverPasswordUrl()
    {
        return $this->container['recover_password_url'];
    }

    /**
     * Sets recover_password_url
     * @param string $recover_password_url
     * @return $this
     */
    public function setRecoverPasswordUrl($recover_password_url)
    {
        $this->container['recover_password_url'] = $recover_password_url;

        return $this;
    }

    /**
     * Gets login_handler
     * @return string
     */
    public function getLoginHandler()
    {
        return $this->container['login_handler'];
    }

    /**
     * Sets login_handler
     * @param string $login_handler
     * @return $this
     */
    public function setLoginHandler($login_handler)
    {
        $this->container['login_handler'] = $login_handler;

        return $this;
    }

    /**
     * Gets subscribe_url
     * @return string
     */
    public function getSubscribeUrl()
    {
        return $this->container['subscribe_url'];
    }

    /**
     * Sets subscribe_url
     * @param string $subscribe_url
     * @return $this
     */
    public function setSubscribeUrl($subscribe_url)
    {
        $this->container['subscribe_url'] = $subscribe_url;

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

