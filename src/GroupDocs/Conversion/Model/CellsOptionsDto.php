<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="CellsOptionsDto.php">
 *   Copyright (c) 2003-2018 Aspose Pty Ltd
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
/*
 * CellsOptionsDto
 */

namespace GroupDocs\Conversion\Model;

use \ArrayAccess;
use \GroupDocs\Conversion\ObjectSerializer;

/*
 * CellsOptionsDto
 *
 * @description Options for converting Cells documents
 */
class CellsOptionsDto implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "CellsOptionsDto";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'showGridLines' => 'bool',
        'showHiddenSheets' => 'bool',
        'onePagePerSheet' => 'bool',
        'optimizePdfSize' => 'bool',
        'convertRange' => 'string',
        'skipEmptyRowsAndColumns' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'showGridLines' => null,
        'showHiddenSheets' => null,
        'onePagePerSheet' => null,
        'optimizePdfSize' => null,
        'convertRange' => null,
        'skipEmptyRowsAndColumns' => null
    ];

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerTypes()
    {
        return self::$swaggerTypes;
    }

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @return array
     */
    public static function swaggerFormats()
    {
        return self::$swaggerFormats;
    }

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @var string[]
     */
    protected static $attributeMap = [
        'showGridLines' => 'showGridLines',
        'showHiddenSheets' => 'showHiddenSheets',
        'onePagePerSheet' => 'onePagePerSheet',
        'optimizePdfSize' => 'optimizePdfSize',
        'convertRange' => 'convertRange',
        'skipEmptyRowsAndColumns' => 'skipEmptyRowsAndColumns'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'showGridLines' => 'setShowGridLines',
        'showHiddenSheets' => 'setShowHiddenSheets',
        'onePagePerSheet' => 'setOnePagePerSheet',
        'optimizePdfSize' => 'setOptimizePdfSize',
        'convertRange' => 'setConvertRange',
        'skipEmptyRowsAndColumns' => 'setSkipEmptyRowsAndColumns'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'showGridLines' => 'getShowGridLines',
        'showHiddenSheets' => 'getShowHiddenSheets',
        'onePagePerSheet' => 'getOnePagePerSheet',
        'optimizePdfSize' => 'getOptimizePdfSize',
        'convertRange' => 'getConvertRange',
        'skipEmptyRowsAndColumns' => 'getSkipEmptyRowsAndColumns'
    ];

    /*
     * Array of attributes where the key is the local name,
     * and the value is the original name
     *
     * @return array
     */
    public static function attributeMap()
    {
        return self::$attributeMap;
    }

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @return array
     */
    public static function setters()
    {
        return self::$setters;
    }

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @return array
     */
    public static function getters()
    {
        return self::$getters;
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
     * Associative array for storing property values
     *
     * @var mixed[]
     */
    protected $container = [];

    /*
     * Constructor
     *
     * @param mixed[] $data Associated array of property values
     *                      initializing the model
     */
    public function __construct(array $data = null)
    {
        $this->container['showGridLines'] = isset($data['showGridLines']) ? $data['showGridLines'] : null;
        $this->container['showHiddenSheets'] = isset($data['showHiddenSheets']) ? $data['showHiddenSheets'] : null;
        $this->container['onePagePerSheet'] = isset($data['onePagePerSheet']) ? $data['onePagePerSheet'] : null;
        $this->container['optimizePdfSize'] = isset($data['optimizePdfSize']) ? $data['optimizePdfSize'] : null;
        $this->container['convertRange'] = isset($data['convertRange']) ? $data['convertRange'] : null;
        $this->container['skipEmptyRowsAndColumns'] = isset($data['skipEmptyRowsAndColumns']) ? $data['skipEmptyRowsAndColumns'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['showGridLines'] === null) {
            $invalidProperties[] = "'showGridLines' can't be null";
        }
        if ($this->container['showHiddenSheets'] === null) {
            $invalidProperties[] = "'showHiddenSheets' can't be null";
        }
        if ($this->container['onePagePerSheet'] === null) {
            $invalidProperties[] = "'onePagePerSheet' can't be null";
        }
        if ($this->container['optimizePdfSize'] === null) {
            $invalidProperties[] = "'optimizePdfSize' can't be null";
        }
        if ($this->container['skipEmptyRowsAndColumns'] === null) {
            $invalidProperties[] = "'skipEmptyRowsAndColumns' can't be null";
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

        if ($this->container['showGridLines'] === null) {
            return false;
        }
        if ($this->container['showHiddenSheets'] === null) {
            return false;
        }
        if ($this->container['onePagePerSheet'] === null) {
            return false;
        }
        if ($this->container['optimizePdfSize'] === null) {
            return false;
        }
        if ($this->container['skipEmptyRowsAndColumns'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets showGridLines
     *
     * @return bool
     */
    public function getShowGridLines()
    {
        return $this->container['showGridLines'];
    }

    /*
     * Sets showGridLines
     *
     * @param bool $showGridLines Show grid lines when converting Excel files
     *
     * @return $this
     */
    public function setShowGridLines($showGridLines)
    {
        $this->container['showGridLines'] = $showGridLines;

        return $this;
    }

    /*
     * Gets showHiddenSheets
     *
     * @return bool
     */
    public function getShowHiddenSheets()
    {
        return $this->container['showHiddenSheets'];
    }

    /*
     * Sets showHiddenSheets
     *
     * @param bool $showHiddenSheets Show hidden sheets when converting Excel files
     *
     * @return $this
     */
    public function setShowHiddenSheets($showHiddenSheets)
    {
        $this->container['showHiddenSheets'] = $showHiddenSheets;

        return $this;
    }

    /*
     * Gets onePagePerSheet
     *
     * @return bool
     */
    public function getOnePagePerSheet()
    {
        return $this->container['onePagePerSheet'];
    }

    /*
     * Sets onePagePerSheet
     *
     * @param bool $onePagePerSheet If OnePagePerSheet is true the content of the sheet will be converted to one page in the PDF document. Default value is true.
     *
     * @return $this
     */
    public function setOnePagePerSheet($onePagePerSheet)
    {
        $this->container['onePagePerSheet'] = $onePagePerSheet;

        return $this;
    }

    /*
     * Gets optimizePdfSize
     *
     * @return bool
     */
    public function getOptimizePdfSize()
    {
        return $this->container['optimizePdfSize'];
    }

    /*
     * Sets optimizePdfSize
     *
     * @param bool $optimizePdfSize If True and converting to Pdf the conversion is optimized for better file size than print quality
     *
     * @return $this
     */
    public function setOptimizePdfSize($optimizePdfSize)
    {
        $this->container['optimizePdfSize'] = $optimizePdfSize;

        return $this;
    }

    /*
     * Gets convertRange
     *
     * @return string
     */
    public function getConvertRange()
    {
        return $this->container['convertRange'];
    }

    /*
     * Sets convertRange
     *
     * @param string $convertRange Convert specific range when converting to other than cells format. Example: \"D1:F8\"
     *
     * @return $this
     */
    public function setConvertRange($convertRange)
    {
        $this->container['convertRange'] = $convertRange;

        return $this;
    }

    /*
     * Gets skipEmptyRowsAndColumns
     *
     * @return bool
     */
    public function getSkipEmptyRowsAndColumns()
    {
        return $this->container['skipEmptyRowsAndColumns'];
    }

    /*
     * Sets skipEmptyRowsAndColumns
     *
     * @param bool $skipEmptyRowsAndColumns Skips empty rows and columns when converting. Default is True.
     *
     * @return $this
     */
    public function setSkipEmptyRowsAndColumns($skipEmptyRowsAndColumns)
    {
        $this->container['skipEmptyRowsAndColumns'] = $skipEmptyRowsAndColumns;

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


