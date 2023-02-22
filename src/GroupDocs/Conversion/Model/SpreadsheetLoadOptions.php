<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="SpreadsheetLoadOptions.php">
 *   Copyright (c) 2003-2023 Aspose Pty Ltd
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
 * SpreadsheetLoadOptions
 *
 * @description Spreadsheet document load options
 */
class SpreadsheetLoadOptions extends LoadOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "SpreadsheetLoadOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'defaultFont' => 'string',
        'fontSubstitutes' => 'map[string,string]',
        'showGridLines' => 'bool',
        'showHiddenSheets' => 'bool',
        'onePagePerSheet' => 'bool',
        'convertRange' => 'string',
        'skipEmptyRowsAndColumns' => 'bool',
        'password' => 'string',
        'hideComments' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'defaultFont' => null,
        'fontSubstitutes' => null,
        'showGridLines' => null,
        'showHiddenSheets' => null,
        'onePagePerSheet' => null,
        'convertRange' => null,
        'skipEmptyRowsAndColumns' => null,
        'password' => null,
        'hideComments' => null
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
        'defaultFont' => 'DefaultFont',
        'fontSubstitutes' => 'FontSubstitutes',
        'showGridLines' => 'ShowGridLines',
        'showHiddenSheets' => 'ShowHiddenSheets',
        'onePagePerSheet' => 'OnePagePerSheet',
        'convertRange' => 'ConvertRange',
        'skipEmptyRowsAndColumns' => 'SkipEmptyRowsAndColumns',
        'password' => 'Password',
        'hideComments' => 'HideComments'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'defaultFont' => 'setDefaultFont',
        'fontSubstitutes' => 'setFontSubstitutes',
        'showGridLines' => 'setShowGridLines',
        'showHiddenSheets' => 'setShowHiddenSheets',
        'onePagePerSheet' => 'setOnePagePerSheet',
        'convertRange' => 'setConvertRange',
        'skipEmptyRowsAndColumns' => 'setSkipEmptyRowsAndColumns',
        'password' => 'setPassword',
        'hideComments' => 'setHideComments'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'defaultFont' => 'getDefaultFont',
        'fontSubstitutes' => 'getFontSubstitutes',
        'showGridLines' => 'getShowGridLines',
        'showHiddenSheets' => 'getShowHiddenSheets',
        'onePagePerSheet' => 'getOnePagePerSheet',
        'convertRange' => 'getConvertRange',
        'skipEmptyRowsAndColumns' => 'getSkipEmptyRowsAndColumns',
        'password' => 'getPassword',
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

        $this->container['defaultFont'] = isset($data['defaultFont']) ? $data['defaultFont'] : null;
        $this->container['fontSubstitutes'] = isset($data['fontSubstitutes']) ? $data['fontSubstitutes'] : null;
        $this->container['showGridLines'] = isset($data['showGridLines']) ? $data['showGridLines'] : null;
        $this->container['showHiddenSheets'] = isset($data['showHiddenSheets']) ? $data['showHiddenSheets'] : null;
        $this->container['onePagePerSheet'] = isset($data['onePagePerSheet']) ? $data['onePagePerSheet'] : null;
        $this->container['convertRange'] = isset($data['convertRange']) ? $data['convertRange'] : null;
        $this->container['skipEmptyRowsAndColumns'] = isset($data['skipEmptyRowsAndColumns']) ? $data['skipEmptyRowsAndColumns'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['hideComments'] = isset($data['hideComments']) ? $data['hideComments'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['showGridLines'] === null) {
            $invalidProperties[] = "'showGridLines' can't be null";
        }
        if ($this->container['showHiddenSheets'] === null) {
            $invalidProperties[] = "'showHiddenSheets' can't be null";
        }
        if ($this->container['onePagePerSheet'] === null) {
            $invalidProperties[] = "'onePagePerSheet' can't be null";
        }
        if ($this->container['skipEmptyRowsAndColumns'] === null) {
            $invalidProperties[] = "'skipEmptyRowsAndColumns' can't be null";
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
        if (!parent::valid()) {
            return false;
        }

        if ($this->container['showGridLines'] === null) {
            return false;
        }
        if ($this->container['showHiddenSheets'] === null) {
            return false;
        }
        if ($this->container['onePagePerSheet'] === null) {
            return false;
        }
        if ($this->container['skipEmptyRowsAndColumns'] === null) {
            return false;
        }
        if ($this->container['hideComments'] === null) {
            return false;
        }
        return true;
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
     * @param string $defaultFont Default font for Cells document. The following font will be used if a font is missing.
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
     * @param map[string,string] $fontSubstitutes Substitute specific fonts when converting Cells document.
     *
     * @return $this
     */
    public function setFontSubstitutes($fontSubstitutes)
    {
        $this->container['fontSubstitutes'] = $fontSubstitutes;

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
     * Gets password
     *
     * @return string
     */
    public function getPassword()
    {
        return $this->container['password'];
    }

    /*
     * Sets password
     *
     * @param string $password Set password to unprotect protected document
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

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
     * @param bool $hideComments Hide comments
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


