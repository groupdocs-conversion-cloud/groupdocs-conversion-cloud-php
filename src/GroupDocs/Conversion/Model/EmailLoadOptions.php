<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="EmailLoadOptions.php">
 *   Copyright (c) Aspose Pty Ltd
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
        'preserveOriginalDate' => 'bool',
        'fieldLabels' => '\GroupDocs\Conversion\Model\FieldLabel[]',
        'timeZoneOffset' => 'string',
        'displaySent' => 'bool',
        'displaySubject' => 'bool',
        'displayAttachments' => 'bool',
        'displayEmailAddresses' => 'bool',
        'displayBccEmailAddress' => 'bool',
        'displayCcEmailAddress' => 'bool',
        'displayToEmailAddress' => 'bool',
        'displayFromEmailAddress' => 'bool',
        'displayHeader' => 'bool',
        'defaultFont' => 'string',
        'fontSubstitutes' => 'map[string,string]'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'preserveOriginalDate' => null,
        'fieldLabels' => null,
        'timeZoneOffset' => null,
        'displaySent' => null,
        'displaySubject' => null,
        'displayAttachments' => null,
        'displayEmailAddresses' => null,
        'displayBccEmailAddress' => null,
        'displayCcEmailAddress' => null,
        'displayToEmailAddress' => null,
        'displayFromEmailAddress' => null,
        'displayHeader' => null,
        'defaultFont' => null,
        'fontSubstitutes' => null
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
        'preserveOriginalDate' => 'PreserveOriginalDate',
        'fieldLabels' => 'FieldLabels',
        'timeZoneOffset' => 'TimeZoneOffset',
        'displaySent' => 'DisplaySent',
        'displaySubject' => 'DisplaySubject',
        'displayAttachments' => 'DisplayAttachments',
        'displayEmailAddresses' => 'DisplayEmailAddresses',
        'displayBccEmailAddress' => 'DisplayBccEmailAddress',
        'displayCcEmailAddress' => 'DisplayCcEmailAddress',
        'displayToEmailAddress' => 'DisplayToEmailAddress',
        'displayFromEmailAddress' => 'DisplayFromEmailAddress',
        'displayHeader' => 'DisplayHeader',
        'defaultFont' => 'DefaultFont',
        'fontSubstitutes' => 'FontSubstitutes'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'preserveOriginalDate' => 'setPreserveOriginalDate',
        'fieldLabels' => 'setFieldLabels',
        'timeZoneOffset' => 'setTimeZoneOffset',
        'displaySent' => 'setDisplaySent',
        'displaySubject' => 'setDisplaySubject',
        'displayAttachments' => 'setDisplayAttachments',
        'displayEmailAddresses' => 'setDisplayEmailAddresses',
        'displayBccEmailAddress' => 'setDisplayBccEmailAddress',
        'displayCcEmailAddress' => 'setDisplayCcEmailAddress',
        'displayToEmailAddress' => 'setDisplayToEmailAddress',
        'displayFromEmailAddress' => 'setDisplayFromEmailAddress',
        'displayHeader' => 'setDisplayHeader',
        'defaultFont' => 'setDefaultFont',
        'fontSubstitutes' => 'setFontSubstitutes'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'preserveOriginalDate' => 'getPreserveOriginalDate',
        'fieldLabels' => 'getFieldLabels',
        'timeZoneOffset' => 'getTimeZoneOffset',
        'displaySent' => 'getDisplaySent',
        'displaySubject' => 'getDisplaySubject',
        'displayAttachments' => 'getDisplayAttachments',
        'displayEmailAddresses' => 'getDisplayEmailAddresses',
        'displayBccEmailAddress' => 'getDisplayBccEmailAddress',
        'displayCcEmailAddress' => 'getDisplayCcEmailAddress',
        'displayToEmailAddress' => 'getDisplayToEmailAddress',
        'displayFromEmailAddress' => 'getDisplayFromEmailAddress',
        'displayHeader' => 'getDisplayHeader',
        'defaultFont' => 'getDefaultFont',
        'fontSubstitutes' => 'getFontSubstitutes'
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

        $this->container['preserveOriginalDate'] = isset($data['preserveOriginalDate']) ? $data['preserveOriginalDate'] : null;
        $this->container['fieldLabels'] = isset($data['fieldLabels']) ? $data['fieldLabels'] : null;
        $this->container['timeZoneOffset'] = isset($data['timeZoneOffset']) ? $data['timeZoneOffset'] : null;
        $this->container['displaySent'] = isset($data['displaySent']) ? $data['displaySent'] : null;
        $this->container['displaySubject'] = isset($data['displaySubject']) ? $data['displaySubject'] : null;
        $this->container['displayAttachments'] = isset($data['displayAttachments']) ? $data['displayAttachments'] : null;
        $this->container['displayEmailAddresses'] = isset($data['displayEmailAddresses']) ? $data['displayEmailAddresses'] : null;
        $this->container['displayBccEmailAddress'] = isset($data['displayBccEmailAddress']) ? $data['displayBccEmailAddress'] : null;
        $this->container['displayCcEmailAddress'] = isset($data['displayCcEmailAddress']) ? $data['displayCcEmailAddress'] : null;
        $this->container['displayToEmailAddress'] = isset($data['displayToEmailAddress']) ? $data['displayToEmailAddress'] : null;
        $this->container['displayFromEmailAddress'] = isset($data['displayFromEmailAddress']) ? $data['displayFromEmailAddress'] : null;
        $this->container['displayHeader'] = isset($data['displayHeader']) ? $data['displayHeader'] : null;
        $this->container['defaultFont'] = isset($data['defaultFont']) ? $data['defaultFont'] : null;
        $this->container['fontSubstitutes'] = isset($data['fontSubstitutes']) ? $data['fontSubstitutes'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['preserveOriginalDate'] === null) {
            $invalidProperties[] = "'preserveOriginalDate' can't be null";
        }
        if ($this->container['displaySent'] === null) {
            $invalidProperties[] = "'displaySent' can't be null";
        }
        if ($this->container['displaySubject'] === null) {
            $invalidProperties[] = "'displaySubject' can't be null";
        }
        if ($this->container['displayAttachments'] === null) {
            $invalidProperties[] = "'displayAttachments' can't be null";
        }
        if ($this->container['displayEmailAddresses'] === null) {
            $invalidProperties[] = "'displayEmailAddresses' can't be null";
        }
        if ($this->container['displayBccEmailAddress'] === null) {
            $invalidProperties[] = "'displayBccEmailAddress' can't be null";
        }
        if ($this->container['displayCcEmailAddress'] === null) {
            $invalidProperties[] = "'displayCcEmailAddress' can't be null";
        }
        if ($this->container['displayToEmailAddress'] === null) {
            $invalidProperties[] = "'displayToEmailAddress' can't be null";
        }
        if ($this->container['displayFromEmailAddress'] === null) {
            $invalidProperties[] = "'displayFromEmailAddress' can't be null";
        }
        if ($this->container['displayHeader'] === null) {
            $invalidProperties[] = "'displayHeader' can't be null";
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

        if ($this->container['preserveOriginalDate'] === null) {
            return false;
        }
        if ($this->container['displaySent'] === null) {
            return false;
        }
        if ($this->container['displaySubject'] === null) {
            return false;
        }
        if ($this->container['displayAttachments'] === null) {
            return false;
        }
        if ($this->container['displayEmailAddresses'] === null) {
            return false;
        }
        if ($this->container['displayBccEmailAddress'] === null) {
            return false;
        }
        if ($this->container['displayCcEmailAddress'] === null) {
            return false;
        }
        if ($this->container['displayToEmailAddress'] === null) {
            return false;
        }
        if ($this->container['displayFromEmailAddress'] === null) {
            return false;
        }
        if ($this->container['displayHeader'] === null) {
            return false;
        }
        return true;
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
     * Gets displaySent
     *
     * @return bool
     */
    public function getDisplaySent()
    {
        return $this->container['displaySent'];
    }

    /*
     * Sets displaySent
     *
     * @param bool $displaySent Option to display or hide sent date/time in the header. Default: true.
     *
     * @return $this
     */
    public function setDisplaySent($displaySent)
    {
        $this->container['displaySent'] = $displaySent;

        return $this;
    }

    /*
     * Gets displaySubject
     *
     * @return bool
     */
    public function getDisplaySubject()
    {
        return $this->container['displaySubject'];
    }

    /*
     * Sets displaySubject
     *
     * @param bool $displaySubject Option to display or hide subject in the header. Default: true.
     *
     * @return $this
     */
    public function setDisplaySubject($displaySubject)
    {
        $this->container['displaySubject'] = $displaySubject;

        return $this;
    }

    /*
     * Gets displayAttachments
     *
     * @return bool
     */
    public function getDisplayAttachments()
    {
        return $this->container['displayAttachments'];
    }

    /*
     * Sets displayAttachments
     *
     * @param bool $displayAttachments Option to display or hide attachments in the header. Default: true.
     *
     * @return $this
     */
    public function setDisplayAttachments($displayAttachments)
    {
        $this->container['displayAttachments'] = $displayAttachments;

        return $this;
    }

    /*
     * Gets displayEmailAddresses
     *
     * @return bool
     */
    public function getDisplayEmailAddresses()
    {
        return $this->container['displayEmailAddresses'];
    }

    /*
     * Sets displayEmailAddresses
     *
     * @param bool $displayEmailAddresses displayEmailAddresses
     *
     * @return $this
     */
    public function setDisplayEmailAddresses($displayEmailAddresses)
    {
        $this->container['displayEmailAddresses'] = $displayEmailAddresses;

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
     * Gets defaultFont
     *
     * @return string
     */
    public function getDefaultFont()
    {
        return $this->container['defaultFont'];
    }

    /*
     * Sets defaultFont
     *
     * @param string $defaultFont Default font for Email document. The following font will be used if a font is missing.
     *
     * @return $this
     */
    public function setDefaultFont($defaultFont)
    {
        $this->container['defaultFont'] = $defaultFont;

        return $this;
    }

    /*
     * Gets fontSubstitutes
     *
     * @return map[string,string]
     */
    public function getFontSubstitutes()
    {
        return $this->container['fontSubstitutes'];
    }

    /*
     * Sets fontSubstitutes
     *
     * @param map[string,string] $fontSubstitutes List of font substitutes.
     *
     * @return $this
     */
    public function setFontSubstitutes($fontSubstitutes)
    {
        $this->container['fontSubstitutes'] = $fontSubstitutes;

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


