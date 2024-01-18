<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="TxtLoadOptions.php">
 *   Copyright (c) 2003-2024 Aspose Pty Ltd
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
 * TxtLoadOptions
 *
 * @description Txt document load options
 */
class TxtLoadOptions extends LoadOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "TxtLoadOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'detectNumberingWithWhitespaces' => 'bool',
        'trailingSpacesOptions' => 'string',
        'leadingSpacesOptions' => 'string',
        'encoding' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'detectNumberingWithWhitespaces' => null,
        'trailingSpacesOptions' => null,
        'leadingSpacesOptions' => null,
        'encoding' => null
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
        'detectNumberingWithWhitespaces' => 'DetectNumberingWithWhitespaces',
        'trailingSpacesOptions' => 'TrailingSpacesOptions',
        'leadingSpacesOptions' => 'LeadingSpacesOptions',
        'encoding' => 'Encoding'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'detectNumberingWithWhitespaces' => 'setDetectNumberingWithWhitespaces',
        'trailingSpacesOptions' => 'setTrailingSpacesOptions',
        'leadingSpacesOptions' => 'setLeadingSpacesOptions',
        'encoding' => 'setEncoding'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'detectNumberingWithWhitespaces' => 'getDetectNumberingWithWhitespaces',
        'trailingSpacesOptions' => 'getTrailingSpacesOptions',
        'leadingSpacesOptions' => 'getLeadingSpacesOptions',
        'encoding' => 'getEncoding'
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

    const TRAILING_SPACES_OPTIONS_PRESERVE = 'Preserve';
    const TRAILING_SPACES_OPTIONS_TRIM = 'Trim';
    const LEADING_SPACES_OPTIONS_CONVERT_TO_INDENT = 'ConvertToIndent';
    const LEADING_SPACES_OPTIONS_PRESERVE = 'Preserve';
    const LEADING_SPACES_OPTIONS_TRIM = 'Trim';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getTrailingSpacesOptionsAllowableValues()
    {
        return [
            self::TRAILING_SPACES_OPTIONS_PRESERVE,
            self::TRAILING_SPACES_OPTIONS_TRIM,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getLeadingSpacesOptionsAllowableValues()
    {
        return [
            self::LEADING_SPACES_OPTIONS_CONVERT_TO_INDENT,
            self::LEADING_SPACES_OPTIONS_PRESERVE,
            self::LEADING_SPACES_OPTIONS_TRIM,
        ];
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

        $this->container['detectNumberingWithWhitespaces'] = isset($data['detectNumberingWithWhitespaces']) ? $data['detectNumberingWithWhitespaces'] : null;
        $this->container['trailingSpacesOptions'] = isset($data['trailingSpacesOptions']) ? $data['trailingSpacesOptions'] : null;
        $this->container['leadingSpacesOptions'] = isset($data['leadingSpacesOptions']) ? $data['leadingSpacesOptions'] : null;
        $this->container['encoding'] = isset($data['encoding']) ? $data['encoding'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['detectNumberingWithWhitespaces'] === null) {
            $invalidProperties[] = "'detectNumberingWithWhitespaces' can't be null";
        }
        if ($this->container['trailingSpacesOptions'] === null) {
            $invalidProperties[] = "'trailingSpacesOptions' can't be null";
        }
        $allowedValues = $this->getTrailingSpacesOptionsAllowableValues();
        if (!in_array($this->container['trailingSpacesOptions'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'trailingSpacesOptions', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['leadingSpacesOptions'] === null) {
            $invalidProperties[] = "'leadingSpacesOptions' can't be null";
        }
        $allowedValues = $this->getLeadingSpacesOptionsAllowableValues();
        if (!in_array($this->container['leadingSpacesOptions'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'leadingSpacesOptions', must be one of '%s'",
                implode("', '", $allowedValues)
            );
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

        if ($this->container['detectNumberingWithWhitespaces'] === null) {
            return false;
        }
        if ($this->container['trailingSpacesOptions'] === null) {
            return false;
        }
        $allowedValues = $this->getTrailingSpacesOptionsAllowableValues();
        if (!in_array($this->container['trailingSpacesOptions'], $allowedValues)) {
            return false;
        }
        if ($this->container['leadingSpacesOptions'] === null) {
            return false;
        }
        $allowedValues = $this->getLeadingSpacesOptionsAllowableValues();
        if (!in_array($this->container['leadingSpacesOptions'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets detectNumberingWithWhitespaces
     *
     * @return bool
     */
    public function getDetectNumberingWithWhitespaces()
    {
        return $this->container['detectNumberingWithWhitespaces'];
    }

    /*
     * Sets detectNumberingWithWhitespaces
     *
     * @param bool $detectNumberingWithWhitespaces Allows to specify how numbered list items are recognized when plain text document is converted. The default value is true.
     *
     * @return $this
     */
    public function setDetectNumberingWithWhitespaces($detectNumberingWithWhitespaces)
    {
        $this->container['detectNumberingWithWhitespaces'] = $detectNumberingWithWhitespaces;

        return $this;
    }

    /*
     * Gets trailingSpacesOptions
     *
     * @return string
     */
    public function getTrailingSpacesOptions()
    {
        return $this->container['trailingSpacesOptions'];
    }

    /*
     * Sets trailingSpacesOptions
     *
     * @param string $trailingSpacesOptions Gets or sets preferred option of a trailing space handling. Default value is Trim.
     *
     * @return $this
     */
    public function setTrailingSpacesOptions($trailingSpacesOptions)
    {
        $allowedValues = $this->getTrailingSpacesOptionsAllowableValues();
        if ((!is_numeric($trailingSpacesOptions) && !in_array($trailingSpacesOptions, $allowedValues)) || (is_numeric($trailingSpacesOptions) && !in_array($allowedValues[$trailingSpacesOptions], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'trailingSpacesOptions', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['trailingSpacesOptions'] = $trailingSpacesOptions;

        return $this;
    }

    /*
     * Gets leadingSpacesOptions
     *
     * @return string
     */
    public function getLeadingSpacesOptions()
    {
        return $this->container['leadingSpacesOptions'];
    }

    /*
     * Sets leadingSpacesOptions
     *
     * @param string $leadingSpacesOptions Gets or sets preferred option of a leading space handling. Default value is ConvertToIndent.
     *
     * @return $this
     */
    public function setLeadingSpacesOptions($leadingSpacesOptions)
    {
        $allowedValues = $this->getLeadingSpacesOptionsAllowableValues();
        if ((!is_numeric($leadingSpacesOptions) && !in_array($leadingSpacesOptions, $allowedValues)) || (is_numeric($leadingSpacesOptions) && !in_array($allowedValues[$leadingSpacesOptions], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'leadingSpacesOptions', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['leadingSpacesOptions'] = $leadingSpacesOptions;

        return $this;
    }

    /*
     * Gets encoding
     *
     * @return string
     */
    public function getEncoding()
    {
        return $this->container['encoding'];
    }

    /*
     * Sets encoding
     *
     * @param string $encoding Gets or sets the encoding that will be used when loading Txt document. Can be null. Default is null.
     *
     * @return $this
     */
    public function setEncoding($encoding)
    {
        $this->container['encoding'] = $encoding;

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


