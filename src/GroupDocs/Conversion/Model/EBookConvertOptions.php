<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="EBookConvertOptions.php">
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
 * EBookConvertOptions
 *
 * @description Ebook convert options
 */
class EBookConvertOptions extends ConvertOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "EBookConvertOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'pageSize' => 'string',
        'pageOrientation' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'pageSize' => null,
        'pageOrientation' => null
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
        'pageSize' => 'PageSize',
        'pageOrientation' => 'PageOrientation'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pageSize' => 'setPageSize',
        'pageOrientation' => 'setPageOrientation'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pageSize' => 'getPageSize',
        'pageOrientation' => 'getPageOrientation'
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

    const PAGE_SIZE__DEFAULT = 'Default';
    const PAGE_SIZE_A3 = 'A3';
    const PAGE_SIZE_STATEMENT = 'Statement';
    const PAGE_SIZE_QUARTO = 'Quarto';
    const PAGE_SIZE_PAPER11X17 = 'Paper11x17';
    const PAGE_SIZE_PAPER10X14 = 'Paper10x14';
    const PAGE_SIZE_LETTER = 'Letter';
    const PAGE_SIZE_LEGAL = 'Legal';
    const PAGE_SIZE_LEDGER = 'Ledger';
    const PAGE_SIZE_FOLIO = 'Folio';
    const PAGE_SIZE_EXECUTIVE = 'Executive';
    const PAGE_SIZE_ENVELOPE_DL = 'EnvelopeDL';
    const PAGE_SIZE_CUSTOM = 'Custom';
    const PAGE_SIZE_B5 = 'B5';
    const PAGE_SIZE_B4 = 'B4';
    const PAGE_SIZE_A5 = 'A5';
    const PAGE_SIZE_A4 = 'A4';
    const PAGE_SIZE_TABLOID = 'Tabloid';
    const PAGE_ORIENTATION__DEFAULT = 'Default';
    const PAGE_ORIENTATION_LANDSCAPE = 'Landscape';
    const PAGE_ORIENTATION_PORTRAIT = 'Portrait';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPageSizeAllowableValues()
    {
        return [
            self::PAGE_SIZE__DEFAULT,
            self::PAGE_SIZE_A3,
            self::PAGE_SIZE_STATEMENT,
            self::PAGE_SIZE_QUARTO,
            self::PAGE_SIZE_PAPER11X17,
            self::PAGE_SIZE_PAPER10X14,
            self::PAGE_SIZE_LETTER,
            self::PAGE_SIZE_LEGAL,
            self::PAGE_SIZE_LEDGER,
            self::PAGE_SIZE_FOLIO,
            self::PAGE_SIZE_EXECUTIVE,
            self::PAGE_SIZE_ENVELOPE_DL,
            self::PAGE_SIZE_CUSTOM,
            self::PAGE_SIZE_B5,
            self::PAGE_SIZE_B4,
            self::PAGE_SIZE_A5,
            self::PAGE_SIZE_A4,
            self::PAGE_SIZE_TABLOID,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPageOrientationAllowableValues()
    {
        return [
            self::PAGE_ORIENTATION__DEFAULT,
            self::PAGE_ORIENTATION_LANDSCAPE,
            self::PAGE_ORIENTATION_PORTRAIT,
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

        $this->container['pageSize'] = isset($data['pageSize']) ? $data['pageSize'] : null;
        $this->container['pageOrientation'] = isset($data['pageOrientation']) ? $data['pageOrientation'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['pageSize'] === null) {
            $invalidProperties[] = "'pageSize' can't be null";
        }
        $allowedValues = $this->getPageSizeAllowableValues();
        if (!in_array($this->container['pageSize'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pageSize', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['pageOrientation'] === null) {
            $invalidProperties[] = "'pageOrientation' can't be null";
        }
        $allowedValues = $this->getPageOrientationAllowableValues();
        if (!in_array($this->container['pageOrientation'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pageOrientation', must be one of '%s'",
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

        if ($this->container['pageSize'] === null) {
            return false;
        }
        $allowedValues = $this->getPageSizeAllowableValues();
        if (!in_array($this->container['pageSize'], $allowedValues)) {
            return false;
        }
        if ($this->container['pageOrientation'] === null) {
            return false;
        }
        $allowedValues = $this->getPageOrientationAllowableValues();
        if (!in_array($this->container['pageOrientation'], $allowedValues)) {
            return false;
        }
        return true;
    }


    /*
     * Gets pageSize
     *
     * @return string
     */
    public function getPageSize()
    {
        return $this->container['pageSize'];
    }

    /*
     * Sets pageSize
     *
     * @param string $pageSize Specifies page size
     *
     * @return $this
     */
    public function setPageSize($pageSize)
    {
        $allowedValues = $this->getPageSizeAllowableValues();
        if ((!is_numeric($pageSize) && !in_array($pageSize, $allowedValues)) || (is_numeric($pageSize) && !in_array($allowedValues[$pageSize], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'pageSize', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['pageSize'] = $pageSize;

        return $this;
    }

    /*
     * Gets pageOrientation
     *
     * @return string
     */
    public function getPageOrientation()
    {
        return $this->container['pageOrientation'];
    }

    /*
     * Sets pageOrientation
     *
     * @param string $pageOrientation Specifies page orientation
     *
     * @return $this
     */
    public function setPageOrientation($pageOrientation)
    {
        $allowedValues = $this->getPageOrientationAllowableValues();
        if ((!is_numeric($pageOrientation) && !in_array($pageOrientation, $allowedValues)) || (is_numeric($pageOrientation) && !in_array($allowedValues[$pageOrientation], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'pageOrientation', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['pageOrientation'] = $pageOrientation;

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


