<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="EmailLoadOptions.php">
 *   Copyright (c) 2003-2020 Aspose Pty Ltd
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
        'displayBccEmailAddress' => 'bool',
        'timeZoneOffset' => 'string',
        'convertAttachments' => 'bool',
        'fieldLabels' => '\GroupDocs\Conversion\Model\FieldLabel[]',
        'preserveOriginalDate' => 'bool'
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
        'displayBccEmailAddress' => null,
        'timeZoneOffset' => null,
        'convertAttachments' => null,
        'fieldLabels' => null,
        'preserveOriginalDate' => null
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
        'displayBccEmailAddress' => 'DisplayBccEmailAddress',
        'timeZoneOffset' => 'TimeZoneOffset',
        'convertAttachments' => 'ConvertAttachments',
        'fieldLabels' => 'FieldLabels',
        'preserveOriginalDate' => 'PreserveOriginalDate'
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
        'displayBccEmailAddress' => 'setDisplayBccEmailAddress',
        'timeZoneOffset' => 'setTimeZoneOffset',
        'convertAttachments' => 'setConvertAttachments',
        'fieldLabels' => 'setFieldLabels',
        'preserveOriginalDate' => 'setPreserveOriginalDate'
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
        'displayBccEmailAddress' => 'getDisplayBccEmailAddress',
        'timeZoneOffset' => 'getTimeZoneOffset',
        'convertAttachments' => 'getConvertAttachments',
        'fieldLabels' => 'getFieldLabels',
        'preserveOriginalDate' => 'getPreserveOriginalDate'
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
        $this->container['timeZoneOffset'] = isset($data['timeZoneOffset']) ? $data['timeZoneOffset'] : null;
        $this->container['convertAttachments'] = isset($data['convertAttachments']) ? $data['convertAttachments'] : null;
        $this->container['fieldLabels'] = isset($data['fieldLabels']) ? $data['fieldLabels'] : null;
        $this->container['preserveOriginalDate'] = isset($data['preserveOriginalDate']) ? $data['preserveOriginalDate'] : null;
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
        if ($this->container['convertAttachments'] === null) {
            $invalidProperties[] = "'convertAttachments' can't be null";
        }
        if ($this->container['preserveOriginalDate'] === null) {
            $invalidProperties[] = "'preserveOriginalDate' can't be null";
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
        if ($this->container['convertAttachments'] === null) {
            return false;
        }
        if ($this->container['preserveOriginalDate'] === null) {
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
     * Gets timeZoneOffset
     *
     * @return string
     */
    public function getTimeZoneOffset()
    {
        return $this->container['timeZoneOffset'];
    }

    /*
     * Sets timeZoneOffset
     *
     * @param string $timeZoneOffset Gets or sets the Coordinated Universal Time (UTC) offset for the message dates. This property defines the time zone difference, between the localtime and UTC.
     *
     * @return $this
     */
    public function setTimeZoneOffset($timeZoneOffset)
    {
        $this->container['timeZoneOffset'] = $timeZoneOffset;

        return $this;
    }

    /*
     * Gets convertAttachments
     *
     * @return bool
     */
    public function getConvertAttachments()
    {
        return $this->container['convertAttachments'];
    }

    /*
     * Sets convertAttachments
     *
     * @param bool $convertAttachments Option to convert attachments in source email or not. Default: false.
     *
     * @return $this
     */
    public function setConvertAttachments($convertAttachments)
    {
        $this->container['convertAttachments'] = $convertAttachments;

        return $this;
    }

    /*
     * Gets fieldLabels
     *
     * @return \GroupDocs\Conversion\Model\FieldLabel[]
     */
    public function getFieldLabels()
    {
        return $this->container['fieldLabels'];
    }

    /*
     * Sets fieldLabels
     *
     * @param \GroupDocs\Conversion\Model\FieldLabel[] $fieldLabels The mapping between email message field and field text representation
     *
     * @return $this
     */
    public function setFieldLabels($fieldLabels)
    {
        $this->container['fieldLabels'] = $fieldLabels;

        return $this;
    }

    /*
     * Gets preserveOriginalDate
     *
     * @return bool
     */
    public function getPreserveOriginalDate()
    {
        return $this->container['preserveOriginalDate'];
    }

    /*
     * Sets preserveOriginalDate
     *
     * @param bool $preserveOriginalDate Defines whether need to keep original date header string in mail message when saving or not (Default value is true)
     *
     * @return $this
     */
    public function setPreserveOriginalDate($preserveOriginalDate)
    {
        $this->container['preserveOriginalDate'] = $preserveOriginalDate;

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


