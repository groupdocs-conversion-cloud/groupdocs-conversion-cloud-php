<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="CsvLoadOptions.php">
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
 * CsvLoadOptions
 *
 * @description Csv document load options
 */
class CsvLoadOptions extends LoadOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "CsvLoadOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'separator' => 'string',
        'isMultiEncoded' => 'bool',
        'hasFormula' => 'bool',
        'convertNumericData' => 'bool',
        'convertDateTimeData' => 'bool',
        'encoding' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'separator' => null,
        'isMultiEncoded' => null,
        'hasFormula' => null,
        'convertNumericData' => null,
        'convertDateTimeData' => null,
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
        'separator' => 'Separator',
        'isMultiEncoded' => 'IsMultiEncoded',
        'hasFormula' => 'HasFormula',
        'convertNumericData' => 'ConvertNumericData',
        'convertDateTimeData' => 'ConvertDateTimeData',
        'encoding' => 'Encoding'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'separator' => 'setSeparator',
        'isMultiEncoded' => 'setIsMultiEncoded',
        'hasFormula' => 'setHasFormula',
        'convertNumericData' => 'setConvertNumericData',
        'convertDateTimeData' => 'setConvertDateTimeData',
        'encoding' => 'setEncoding'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'separator' => 'getSeparator',
        'isMultiEncoded' => 'getIsMultiEncoded',
        'hasFormula' => 'getHasFormula',
        'convertNumericData' => 'getConvertNumericData',
        'convertDateTimeData' => 'getConvertDateTimeData',
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

    

    


    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        parent::__construct($data);

        $this->container['separator'] = isset($data['separator']) ? $data['separator'] : null;
        $this->container['isMultiEncoded'] = isset($data['isMultiEncoded']) ? $data['isMultiEncoded'] : null;
        $this->container['hasFormula'] = isset($data['hasFormula']) ? $data['hasFormula'] : null;
        $this->container['convertNumericData'] = isset($data['convertNumericData']) ? $data['convertNumericData'] : null;
        $this->container['convertDateTimeData'] = isset($data['convertDateTimeData']) ? $data['convertDateTimeData'] : null;
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

        if ($this->container['separator'] === null) {
            $invalidProperties[] = "'separator' can't be null";
        }
        if ($this->container['isMultiEncoded'] === null) {
            $invalidProperties[] = "'isMultiEncoded' can't be null";
        }
        if ($this->container['hasFormula'] === null) {
            $invalidProperties[] = "'hasFormula' can't be null";
        }
        if ($this->container['convertNumericData'] === null) {
            $invalidProperties[] = "'convertNumericData' can't be null";
        }
        if ($this->container['convertDateTimeData'] === null) {
            $invalidProperties[] = "'convertDateTimeData' can't be null";
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

        if ($this->container['separator'] === null) {
            return false;
        }
        if ($this->container['isMultiEncoded'] === null) {
            return false;
        }
        if ($this->container['hasFormula'] === null) {
            return false;
        }
        if ($this->container['convertNumericData'] === null) {
            return false;
        }
        if ($this->container['convertDateTimeData'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets separator
     *
     * @return string
     */
    public function getSeparator()
    {
        return $this->container['separator'];
    }

    /*
     * Sets separator
     *
     * @param string $separator Delimiter of a Csv file
     *
     * @return $this
     */
    public function setSeparator($separator)
    {
        $this->container['separator'] = $separator;

        return $this;
    }

    /*
     * Gets isMultiEncoded
     *
     * @return bool
     */
    public function getIsMultiEncoded()
    {
        return $this->container['isMultiEncoded'];
    }

    /*
     * Sets isMultiEncoded
     *
     * @param bool $isMultiEncoded True means the file contains several encodings
     *
     * @return $this
     */
    public function setIsMultiEncoded($isMultiEncoded)
    {
        $this->container['isMultiEncoded'] = $isMultiEncoded;

        return $this;
    }

    /*
     * Gets hasFormula
     *
     * @return bool
     */
    public function getHasFormula()
    {
        return $this->container['hasFormula'];
    }

    /*
     * Sets hasFormula
     *
     * @param bool $hasFormula Indicates whether text is formula if it starts with \"=\"
     *
     * @return $this
     */
    public function setHasFormula($hasFormula)
    {
        $this->container['hasFormula'] = $hasFormula;

        return $this;
    }

    /*
     * Gets convertNumericData
     *
     * @return bool
     */
    public function getConvertNumericData()
    {
        return $this->container['convertNumericData'];
    }

    /*
     * Sets convertNumericData
     *
     * @param bool $convertNumericData Indicates whether the string in the file is converted to numeric. Default is True
     *
     * @return $this
     */
    public function setConvertNumericData($convertNumericData)
    {
        $this->container['convertNumericData'] = $convertNumericData;

        return $this;
    }

    /*
     * Gets convertDateTimeData
     *
     * @return bool
     */
    public function getConvertDateTimeData()
    {
        return $this->container['convertDateTimeData'];
    }

    /*
     * Sets convertDateTimeData
     *
     * @param bool $convertDateTimeData Indicates whether the string in the file is converted to date. Default is True
     *
     * @return $this
     */
    public function setConvertDateTimeData($convertDateTimeData)
    {
        $this->container['convertDateTimeData'] = $convertDateTimeData;

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
     * @param string $encoding File encoding
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


