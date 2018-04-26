<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="SaveOptionsBaseDto.php">
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
 * SaveOptionsBaseDto
 */

namespace GroupDocs\Conversion\Model;

use \ArrayAccess;
use \GroupDocs\Conversion\ObjectSerializer;

/*
 * SaveOptionsBaseDto
 *
 * @description Base options class
 */
class SaveOptionsBaseDto implements ArrayAccess
{
    const DISCRIMINATOR = 'Type';

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "SaveOptionsBaseDto";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'pageNumber' => 'int',
        'numPagesToConvert' => 'int',
        'convertPages' => 'int[]',
        'watermarkOptions' => '\GroupDocs\Conversion\Model\WatermarkOptionsDto',
        'showGridLines' => 'bool',
        'showHiddenSheets' => 'bool',
        'hideWordTrackedChanges' => 'bool',
        'cadOptions' => '\GroupDocs\Conversion\Model\CadOptionsDto',
        'hidePdfAnnotations' => 'bool',
        'hideComments' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'pageNumber' => 'int32',
        'numPagesToConvert' => 'int32',
        'convertPages' => 'int32',
        'watermarkOptions' => null,
        'showGridLines' => null,
        'showHiddenSheets' => null,
        'hideWordTrackedChanges' => null,
        'cadOptions' => null,
        'hidePdfAnnotations' => null,
        'hideComments' => null
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
        'pageNumber' => 'PageNumber',
        'numPagesToConvert' => 'NumPagesToConvert',
        'convertPages' => 'ConvertPages',
        'watermarkOptions' => 'WatermarkOptions',
        'showGridLines' => 'ShowGridLines',
        'showHiddenSheets' => 'ShowHiddenSheets',
        'hideWordTrackedChanges' => 'HideWordTrackedChanges',
        'cadOptions' => 'CadOptions',
        'hidePdfAnnotations' => 'HidePdfAnnotations',
        'hideComments' => 'HideComments'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pageNumber' => 'setPageNumber',
        'numPagesToConvert' => 'setNumPagesToConvert',
        'convertPages' => 'setConvertPages',
        'watermarkOptions' => 'setWatermarkOptions',
        'showGridLines' => 'setShowGridLines',
        'showHiddenSheets' => 'setShowHiddenSheets',
        'hideWordTrackedChanges' => 'setHideWordTrackedChanges',
        'cadOptions' => 'setCadOptions',
        'hidePdfAnnotations' => 'setHidePdfAnnotations',
        'hideComments' => 'setHideComments'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pageNumber' => 'getPageNumber',
        'numPagesToConvert' => 'getNumPagesToConvert',
        'convertPages' => 'getConvertPages',
        'watermarkOptions' => 'getWatermarkOptions',
        'showGridLines' => 'getShowGridLines',
        'showHiddenSheets' => 'getShowHiddenSheets',
        'hideWordTrackedChanges' => 'getHideWordTrackedChanges',
        'cadOptions' => 'getCadOptions',
        'hidePdfAnnotations' => 'getHidePdfAnnotations',
        'hideComments' => 'getHideComments'
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
        $this->container['pageNumber'] = isset($data['pageNumber']) ? $data['pageNumber'] : null;
        $this->container['numPagesToConvert'] = isset($data['numPagesToConvert']) ? $data['numPagesToConvert'] : null;
        $this->container['convertPages'] = isset($data['convertPages']) ? $data['convertPages'] : null;
        $this->container['watermarkOptions'] = isset($data['watermarkOptions']) ? $data['watermarkOptions'] : null;
        $this->container['showGridLines'] = isset($data['showGridLines']) ? $data['showGridLines'] : null;
        $this->container['showHiddenSheets'] = isset($data['showHiddenSheets']) ? $data['showHiddenSheets'] : null;
        $this->container['hideWordTrackedChanges'] = isset($data['hideWordTrackedChanges']) ? $data['hideWordTrackedChanges'] : null;
        $this->container['cadOptions'] = isset($data['cadOptions']) ? $data['cadOptions'] : null;
        $this->container['hidePdfAnnotations'] = isset($data['hidePdfAnnotations']) ? $data['hidePdfAnnotations'] : null;
        $this->container['hideComments'] = isset($data['hideComments']) ? $data['hideComments'] : null;

        // Initialize discriminator property with the model name.
        $discriminator = array_search('Type', self::$attributeMap);
        $this->container[$discriminator] = static::$swaggerModelName;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pageNumber'] === null) {
            $invalidProperties[] = "'pageNumber' can't be null";
        }
        if ($this->container['numPagesToConvert'] === null) {
            $invalidProperties[] = "'numPagesToConvert' can't be null";
        }
        if ($this->container['showGridLines'] === null) {
            $invalidProperties[] = "'showGridLines' can't be null";
        }
        if ($this->container['showHiddenSheets'] === null) {
            $invalidProperties[] = "'showHiddenSheets' can't be null";
        }
        if ($this->container['hideWordTrackedChanges'] === null) {
            $invalidProperties[] = "'hideWordTrackedChanges' can't be null";
        }
        if ($this->container['hidePdfAnnotations'] === null) {
            $invalidProperties[] = "'hidePdfAnnotations' can't be null";
        }
        if ($this->container['hideComments'] === null) {
            $invalidProperties[] = "'hideComments' can't be null";
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

        if ($this->container['pageNumber'] === null) {
            return false;
        }
        if ($this->container['numPagesToConvert'] === null) {
            return false;
        }
        if ($this->container['showGridLines'] === null) {
            return false;
        }
        if ($this->container['showHiddenSheets'] === null) {
            return false;
        }
        if ($this->container['hideWordTrackedChanges'] === null) {
            return false;
        }
        if ($this->container['hidePdfAnnotations'] === null) {
            return false;
        }
        if ($this->container['hideComments'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets pageNumber
     *
     * @return int
     */
    public function getPageNumber()
    {
        return $this->container['pageNumber'];
    }

    /*
     * Sets pageNumber
     *
     * @param int $pageNumber Start conversion from PageNumber page
     *
     * @return $this
     */
    public function setPageNumber($pageNumber)
    {
        $this->container['pageNumber'] = $pageNumber;

        return $this;
    }

    /*
     * Gets numPagesToConvert
     *
     * @return int
     */
    public function getNumPagesToConvert()
    {
        return $this->container['numPagesToConvert'];
    }

    /*
     * Sets numPagesToConvert
     *
     * @param int $numPagesToConvert Number of pages to convert
     *
     * @return $this
     */
    public function setNumPagesToConvert($numPagesToConvert)
    {
        $this->container['numPagesToConvert'] = $numPagesToConvert;

        return $this;
    }

    /*
     * Gets convertPages
     *
     * @return int[]
     */
    public function getConvertPages()
    {
        return $this->container['convertPages'];
    }

    /*
     * Sets convertPages
     *
     * @param int[] $convertPages Convert specific pages. The list contains the page indexes of the pages to be converted
     *
     * @return $this
     */
    public function setConvertPages($convertPages)
    {
        $this->container['convertPages'] = $convertPages;

        return $this;
    }

    /*
     * Gets watermarkOptions
     *
     * @return \GroupDocs\Conversion\Model\WatermarkOptionsDto
     */
    public function getWatermarkOptions()
    {
        return $this->container['watermarkOptions'];
    }

    /*
     * Sets watermarkOptions
     *
     * @param \GroupDocs\Conversion\Model\WatermarkOptionsDto $watermarkOptions Watermark specific options
     *
     * @return $this
     */
    public function setWatermarkOptions($watermarkOptions)
    {
        $this->container['watermarkOptions'] = $watermarkOptions;

        return $this;
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
     * Gets hideWordTrackedChanges
     *
     * @return bool
     */
    public function getHideWordTrackedChanges()
    {
        return $this->container['hideWordTrackedChanges'];
    }

    /*
     * Sets hideWordTrackedChanges
     *
     * @param bool $hideWordTrackedChanges Hide markup and track changes for Word documents
     *
     * @return $this
     */
    public function setHideWordTrackedChanges($hideWordTrackedChanges)
    {
        $this->container['hideWordTrackedChanges'] = $hideWordTrackedChanges;

        return $this;
    }

    /*
     * Gets cadOptions
     *
     * @return \GroupDocs\Conversion\Model\CadOptionsDto
     */
    public function getCadOptions()
    {
        return $this->container['cadOptions'];
    }

    /*
     * Sets cadOptions
     *
     * @param \GroupDocs\Conversion\Model\CadOptionsDto $cadOptions CAD specific convert options
     *
     * @return $this
     */
    public function setCadOptions($cadOptions)
    {
        $this->container['cadOptions'] = $cadOptions;

        return $this;
    }

    /*
     * Gets hidePdfAnnotations
     *
     * @return bool
     */
    public function getHidePdfAnnotations()
    {
        return $this->container['hidePdfAnnotations'];
    }

    /*
     * Sets hidePdfAnnotations
     *
     * @param bool $hidePdfAnnotations Hide annotations in Pdf documents
     *
     * @return $this
     */
    public function setHidePdfAnnotations($hidePdfAnnotations)
    {
        $this->container['hidePdfAnnotations'] = $hidePdfAnnotations;

        return $this;
    }

    /*
     * Gets hideComments
     *
     * @return bool
     */
    public function getHideComments()
    {
        return $this->container['hideComments'];
    }

    /*
     * Sets hideComments
     *
     * @param bool $hideComments Hide comments during conversion if the source format support comments
     *
     * @return $this
     */
    public function setHideComments($hideComments)
    {
        $this->container['hideComments'] = $hideComments;

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


