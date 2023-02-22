<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="WordProcessingConvertOptions.php">
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
 * WordProcessingConvertOptions
 *
 * @description Options for to word processing conversion
 */
class WordProcessingConvertOptions extends ConvertOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "WordProcessingConvertOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'width' => 'int',
        'height' => 'int',
        'dpi' => 'double',
        'password' => 'string',
        'zoom' => 'int',
        'watermarkOptions' => '\GroupDocs\Conversion\Model\WatermarkOptions',
        'pdfRecognitionMode' => 'string',
        'pageSize' => 'string',
        'pageOrientation' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'width' => 'int32',
        'height' => 'int32',
        'dpi' => 'double',
        'password' => null,
        'zoom' => 'int32',
        'watermarkOptions' => null,
        'pdfRecognitionMode' => null,
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
        'width' => 'Width',
        'height' => 'Height',
        'dpi' => 'Dpi',
        'password' => 'Password',
        'zoom' => 'Zoom',
        'watermarkOptions' => 'WatermarkOptions',
        'pdfRecognitionMode' => 'PdfRecognitionMode',
        'pageSize' => 'PageSize',
        'pageOrientation' => 'PageOrientation'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'width' => 'setWidth',
        'height' => 'setHeight',
        'dpi' => 'setDpi',
        'password' => 'setPassword',
        'zoom' => 'setZoom',
        'watermarkOptions' => 'setWatermarkOptions',
        'pdfRecognitionMode' => 'setPdfRecognitionMode',
        'pageSize' => 'setPageSize',
        'pageOrientation' => 'setPageOrientation'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'width' => 'getWidth',
        'height' => 'getHeight',
        'dpi' => 'getDpi',
        'password' => 'getPassword',
        'zoom' => 'getZoom',
        'watermarkOptions' => 'getWatermarkOptions',
        'pdfRecognitionMode' => 'getPdfRecognitionMode',
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

    const PDF_RECOGNITION_MODE_TEXTBOX = 'Textbox';
    const PDF_RECOGNITION_MODE_FLOW = 'Flow';
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
    public function getPdfRecognitionModeAllowableValues()
    {
        return [
            self::PDF_RECOGNITION_MODE_TEXTBOX,
            self::PDF_RECOGNITION_MODE_FLOW,
        ];
    }
    
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

        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['dpi'] = isset($data['dpi']) ? $data['dpi'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['zoom'] = isset($data['zoom']) ? $data['zoom'] : null;
        $this->container['watermarkOptions'] = isset($data['watermarkOptions']) ? $data['watermarkOptions'] : null;
        $this->container['pdfRecognitionMode'] = isset($data['pdfRecognitionMode']) ? $data['pdfRecognitionMode'] : null;
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

        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['dpi'] === null) {
            $invalidProperties[] = "'dpi' can't be null";
        }
        if ($this->container['zoom'] === null) {
            $invalidProperties[] = "'zoom' can't be null";
        }
        if ($this->container['pdfRecognitionMode'] === null) {
            $invalidProperties[] = "'pdfRecognitionMode' can't be null";
        }
        $allowedValues = $this->getPdfRecognitionModeAllowableValues();
        if (!in_array($this->container['pdfRecognitionMode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pdfRecognitionMode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

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

        if ($this->container['width'] === null) {
            return false;
        }
        if ($this->container['height'] === null) {
            return false;
        }
        if ($this->container['dpi'] === null) {
            return false;
        }
        if ($this->container['zoom'] === null) {
            return false;
        }
        if ($this->container['pdfRecognitionMode'] === null) {
            return false;
        }
        $allowedValues = $this->getPdfRecognitionModeAllowableValues();
        if (!in_array($this->container['pdfRecognitionMode'], $allowedValues)) {
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
     * Gets width
     *
     * @return int
     */
    public function getWidth()
    {
        return $this->container['width'];
    }

    /*
     * Sets width
     *
     * @param int $width Desired page width after conversion
     *
     * @return $this
     */
    public function setWidth($width)
    {
        $this->container['width'] = $width;

        return $this;
    }

    /*
     * Gets height
     *
     * @return int
     */
    public function getHeight()
    {
        return $this->container['height'];
    }

    /*
     * Sets height
     *
     * @param int $height Desired page height after conversion
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /*
     * Gets dpi
     *
     * @return double
     */
    public function getDpi()
    {
        return $this->container['dpi'];
    }

    /*
     * Sets dpi
     *
     * @param double $dpi Desired page DPI after conversion. The default resolution is: 96dpi
     *
     * @return $this
     */
    public function setDpi($dpi)
    {
        $this->container['dpi'] = $dpi;

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
     * @param string $password Set this property if you want to protect the converted document with a password
     *
     * @return $this
     */
    public function setPassword($password)
    {
        $this->container['password'] = $password;

        return $this;
    }

    /*
     * Gets zoom
     *
     * @return int
     */
    public function getZoom()
    {
        return $this->container['zoom'];
    }

    /*
     * Sets zoom
     *
     * @param int $zoom Specifies the zoom level in percentage. Default is 100. Default zoom is supported till Microsoft Word 2010. Starting from Microsoft Word 2013 default zoom is no longer set to document, instead it appears to use the zoom factor of the last document that was opened.
     *
     * @return $this
     */
    public function setZoom($zoom)
    {
        $this->container['zoom'] = $zoom;

        return $this;
    }

    /*
     * Gets watermarkOptions
     *
     * @return \GroupDocs\Conversion\Model\WatermarkOptions
     */
    public function getWatermarkOptions()
    {
        return $this->container['watermarkOptions'];
    }

    /*
     * Sets watermarkOptions
     *
     * @param \GroupDocs\Conversion\Model\WatermarkOptions $watermarkOptions Watermark specific options
     *
     * @return $this
     */
    public function setWatermarkOptions($watermarkOptions)
    {
        $this->container['watermarkOptions'] = $watermarkOptions;

        return $this;
    }

    /*
     * Gets pdfRecognitionMode
     *
     * @return string
     */
    public function getPdfRecognitionMode()
    {
        return $this->container['pdfRecognitionMode'];
    }

    /*
     * Sets pdfRecognitionMode
     *
     * @param string $pdfRecognitionMode Recognition mode when converting from pdf
     *
     * @return $this
     */
    public function setPdfRecognitionMode($pdfRecognitionMode)
    {
        $allowedValues = $this->getPdfRecognitionModeAllowableValues();
        if ((!is_numeric($pdfRecognitionMode) && !in_array($pdfRecognitionMode, $allowedValues)) || (is_numeric($pdfRecognitionMode) && !in_array($allowedValues[$pdfRecognitionMode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'pdfRecognitionMode', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['pdfRecognitionMode'] = $pdfRecognitionMode;

        return $this;
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
     * @param string $pageSize Page size
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


