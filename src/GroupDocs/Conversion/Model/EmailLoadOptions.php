<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="EmailLoadOptions.php">
 *   Copyright (c) 2003-2019 Aspose Pty Ltd
 * </copyright>
 * <summary>
 *   Permission is hereby granted, free of charge, to any person obtaining a copy
 *  of this software and associated documentation files (the "Software"), to deal
 *  in the Software without restriction, including without limitation the rights
 *  to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 *  copies of the Software, and to permit persons to whom the Software is
 *  furnished to do so, subject to the following conditions:
 * 
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 * 
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 *  FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 *  AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 *  LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 *  OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 *  SOFTWARE.
 * </summary>
 * --------------------------------------------------------------------------------------------------------------------
 */

namespace GroupDocs\Conversion\Model;
use \GroupDocs\Conversion\ObjectSerializer;

/*
 * EmailLoadOptions
 *
 * @description Options for loading Email documents
 */
class EmailLoadOptions extends LoadOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "EmailLoadOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'displayHeader' => 'bool',
        'displayFromEmailAddress' => 'bool',
        'displayEmailAddress' => 'bool',
        'displayToEmailAddress' => 'bool',
        'displayCcEmailAddress' => 'bool',
        'displayBccEmailAddress' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'displayHeader' => null,
        'displayFromEmailAddress' => null,
        'displayEmailAddress' => null,
        'displayToEmailAddress' => null,
        'displayCcEmailAddress' => null,
        'displayBccEmailAddress' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes + parent::swaggerTypes();
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats + parent::swaggerFormats();
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'displayHeader' => 'DisplayHeader',
        'displayFromEmailAddress' => 'DisplayFromEmailAddress',
        'displayEmailAddress' => 'DisplayEmailAddress',
        'displayToEmailAddress' => 'DisplayToEmailAddress',
        'displayCcEmailAddress' => 'DisplayCcEmailAddress',
        'displayBccEmailAddress' => 'DisplayBccEmailAddress'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'displayHeader' => 'setDisplayHeader',
        'displayFromEmailAddress' => 'setDisplayFromEmailAddress',
        'displayEmailAddress' => 'setDisplayEmailAddress',
        'displayToEmailAddress' => 'setDisplayToEmailAddress',
        'displayCcEmailAddress' => 'setDisplayCcEmailAddress',
        'displayBccEmailAddress' => 'setDisplayBccEmailAddress'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'displayHeader' => 'getDisplayHeader',
        'displayFromEmailAddress' => 'getDisplayFromEmailAddress',
        'displayEmailAddress' => 'getDisplayEmailAddress',
        'displayToEmailAddress' => 'getDisplayToEmailAddress',
        'displayCcEmailAddress' => 'getDisplayCcEmailAddress',
        'displayBccEmailAddress' => 'getDisplayBccEmailAddress'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return parent::attributeMap() + self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return parent::setters() + self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return parent::getters() + self::$getters;
    }

    /*
     * The original name of the model.
     *
     * @return string
     */
    public function getModelName()
    {
        return self::$swaggerModelName;
    }

    

    


    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['displayHeader'] = isset($data['displayHeader']) ? $data['displayHeader'] : null;
        $this->container['displayFromEmailAddress'] = isset($data['displayFromEmailAddress']) ? $data['displayFromEmailAddress'] : null;
        $this->container['displayEmailAddress'] = isset($data['displayEmailAddress']) ? $data['displayEmailAddress'] : null;
        $this->container['displayToEmailAddress'] = isset($data['displayToEmailAddress']) ? $data['displayToEmailAddress'] : null;
        $this->container['displayCcEmailAddress'] = isset($data['displayCcEmailAddress']) ? $data['displayCcEmailAddress'] : null;
        $this->container['displayBccEmailAddress'] = isset($data['displayBccEmailAddress']) ? $data['displayBccEmailAddress'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['displayHeader'] === null) {
            $invalidProperties[] = "'displayHeader' can't be null";
        }
        if ($this->container['displayFromEmailAddress'] === null) {
            $invalidProperties[] = "'displayFromEmailAddress' can't be null";
        }
        if ($this->container['displayEmailAddress'] === null) {
            $invalidProperties[] = "'displayEmailAddress' can't be null";
        }
        if ($this->container['displayToEmailAddress'] === null) {
            $invalidProperties[] = "'displayToEmailAddress' can't be null";
        }
        if ($this->container['displayCcEmailAddress'] === null) {
            $invalidProperties[] = "'displayCcEmailAddress' can't be null";
        }
        if ($this->container['displayBccEmailAddress'] === null) {
            $invalidProperties[] = "'displayBccEmailAddress' can't be null";
        }
        return $invalidProperties;
    }

    /*
     * Validate all the properties in the model
     * return true if all passed
     *
     * @return bool True if all properties are valid
     */
    public function valid()
    {
        if (!parent::valid()) {
            return false;
        }

        if ($this->container['displayHeader'] === null) {
            return false;
        }
        if ($this->container['displayFromEmailAddress'] === null) {
            return false;
        }
        if ($this->container['displayEmailAddress'] === null) {
            return false;
        }
        if ($this->container['displayToEmailAddress'] === null) {
            return false;
        }
        if ($this->container['displayCcEmailAddress'] === null) {
            return false;
        }
        if ($this->container['displayBccEmailAddress'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets displayHeader
     *
     * @return bool
     */
    public function getDisplayHeader()
    {
        return $this->container['displayHeader'];
    }

    /*
     * Sets displayHeader
     *
     * @param bool $displayHeader Option to display or hide the email header. Default: true
     *
     * @return $this
     */
    public function setDisplayHeader($displayHeader)
    {
        $this->container['displayHeader'] = $displayHeader;

        return $this;
    }

    /*
     * Gets displayFromEmailAddress
     *
     * @return bool
     */
    public function getDisplayFromEmailAddress()
    {
        return $this->container['displayFromEmailAddress'];
    }

    /*
     * Sets displayFromEmailAddress
     *
     * @param bool $displayFromEmailAddress Option to display or hide \"from\" email address. Default: true
     *
     * @return $this
     */
    public function setDisplayFromEmailAddress($displayFromEmailAddress)
    {
        $this->container['displayFromEmailAddress'] = $displayFromEmailAddress;

        return $this;
    }

    /*
     * Gets displayEmailAddress
     *
     * @return bool
     */
    public function getDisplayEmailAddress()
    {
        return $this->container['displayEmailAddress'];
    }

    /*
     * Sets displayEmailAddress
     *
     * @param bool $displayEmailAddress Option to display or hide email address. Default: true
     *
     * @return $this
     */
    public function setDisplayEmailAddress($displayEmailAddress)
    {
        $this->container['displayEmailAddress'] = $displayEmailAddress;

        return $this;
    }

    /*
     * Gets displayToEmailAddress
     *
     * @return bool
     */
    public function getDisplayToEmailAddress()
    {
        return $this->container['displayToEmailAddress'];
    }

    /*
     * Sets displayToEmailAddress
     *
     * @param bool $displayToEmailAddress Option to display or hide \"to\" email address. Default: true
     *
     * @return $this
     */
    public function setDisplayToEmailAddress($displayToEmailAddress)
    {
        $this->container['displayToEmailAddress'] = $displayToEmailAddress;

        return $this;
    }

    /*
     * Gets displayCcEmailAddress
     *
     * @return bool
     */
    public function getDisplayCcEmailAddress()
    {
        return $this->container['displayCcEmailAddress'];
    }

    /*
     * Sets displayCcEmailAddress
     *
     * @param bool $displayCcEmailAddress Option to display or hide \"Cc\" email address. Default: false
     *
     * @return $this
     */
    public function setDisplayCcEmailAddress($displayCcEmailAddress)
    {
        $this->container['displayCcEmailAddress'] = $displayCcEmailAddress;

        return $this;
    }

    /*
     * Gets displayBccEmailAddress
     *
     * @return bool
     */
    public function getDisplayBccEmailAddress()
    {
        return $this->container['displayBccEmailAddress'];
    }

    /*
     * Sets displayBccEmailAddress
     *
     * @param bool $displayBccEmailAddress Option to display or hide \"Bcc\" email address. Default: false
     *
     * @return $this
     */
    public function setDisplayBccEmailAddress($displayBccEmailAddress)
    {
        $this->container['displayBccEmailAddress'] = $displayBccEmailAddress;

        return $this;
    }
    /*
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

    /*
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

    /*
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

    /*
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

    /*
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


