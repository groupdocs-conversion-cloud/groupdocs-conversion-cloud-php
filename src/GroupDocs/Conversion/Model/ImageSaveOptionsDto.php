<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="ImageSaveOptionsDto.php">
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
 * ImageSaveOptionsDto
 */

namespace GroupDocs\Conversion\Model;
use \GroupDocs\Conversion\ObjectSerializer;

/*
 * ImageSaveOptionsDto
 *
 * @description Image save options
 */
class ImageSaveOptionsDto extends SaveOptionsBaseDto 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "ImageSaveOptionsDto";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'width' => 'int',
        'height' => 'int',
        'usePdf' => 'bool',
        'convertFileType' => 'string',
        'horizontalResolution' => 'int',
        'verticalResolution' => 'int',
        'jpegQuality' => 'int',
        'tiffOptions' => '\GroupDocs\Conversion\Model\TiffOptionsDto',
        'psdOptions' => '\GroupDocs\Conversion\Model\PsdOptionsDto',
        'webpOptions' => '\GroupDocs\Conversion\Model\WebpOptionsDto',
        'grayscale' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'width' => 'int32',
        'height' => 'int32',
        'usePdf' => null,
        'convertFileType' => null,
        'horizontalResolution' => 'int32',
        'verticalResolution' => 'int32',
        'jpegQuality' => 'int32',
        'tiffOptions' => null,
        'psdOptions' => null,
        'webpOptions' => null,
        'grayscale' => null
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
        'width' => 'width',
        'height' => 'height',
        'usePdf' => 'usePdf',
        'convertFileType' => 'convertFileType',
        'horizontalResolution' => 'horizontalResolution',
        'verticalResolution' => 'verticalResolution',
        'jpegQuality' => 'jpegQuality',
        'tiffOptions' => 'tiffOptions',
        'psdOptions' => 'psdOptions',
        'webpOptions' => 'webpOptions',
        'grayscale' => 'grayscale'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'width' => 'setWidth',
        'height' => 'setHeight',
        'usePdf' => 'setUsePdf',
        'convertFileType' => 'setConvertFileType',
        'horizontalResolution' => 'setHorizontalResolution',
        'verticalResolution' => 'setVerticalResolution',
        'jpegQuality' => 'setJpegQuality',
        'tiffOptions' => 'setTiffOptions',
        'psdOptions' => 'setPsdOptions',
        'webpOptions' => 'setWebpOptions',
        'grayscale' => 'setGrayscale'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'width' => 'getWidth',
        'height' => 'getHeight',
        'usePdf' => 'getUsePdf',
        'convertFileType' => 'getConvertFileType',
        'horizontalResolution' => 'getHorizontalResolution',
        'verticalResolution' => 'getVerticalResolution',
        'jpegQuality' => 'getJpegQuality',
        'tiffOptions' => 'getTiffOptions',
        'psdOptions' => 'getPsdOptions',
        'webpOptions' => 'getWebpOptions',
        'grayscale' => 'getGrayscale'
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

    const CONVERT_FILE_TYPE_TIFF = 'Tiff';
    const CONVERT_FILE_TYPE_TIF = 'Tif';
    const CONVERT_FILE_TYPE_JPG = 'Jpg';
    const CONVERT_FILE_TYPE_JPEG = 'Jpeg';
    const CONVERT_FILE_TYPE_PNG = 'Png';
    const CONVERT_FILE_TYPE_GIF = 'Gif';
    const CONVERT_FILE_TYPE_BMP = 'Bmp';
    const CONVERT_FILE_TYPE_ICO = 'Ico';
    const CONVERT_FILE_TYPE_PSD = 'Psd';
    const CONVERT_FILE_TYPE_WEBP = 'Webp';
    const CONVERT_FILE_TYPE_SVG = 'Svg';
    const CONVERT_FILE_TYPE_JP2 = 'Jp2';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getConvertFileTypeAllowableValues()
    {
        return [
            self::CONVERT_FILE_TYPE_TIFF,
            self::CONVERT_FILE_TYPE_TIF,
            self::CONVERT_FILE_TYPE_JPG,
            self::CONVERT_FILE_TYPE_JPEG,
            self::CONVERT_FILE_TYPE_PNG,
            self::CONVERT_FILE_TYPE_GIF,
            self::CONVERT_FILE_TYPE_BMP,
            self::CONVERT_FILE_TYPE_ICO,
            self::CONVERT_FILE_TYPE_PSD,
            self::CONVERT_FILE_TYPE_WEBP,
            self::CONVERT_FILE_TYPE_SVG,
            self::CONVERT_FILE_TYPE_JP2,
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
        $this->container['usePdf'] = isset($data['usePdf']) ? $data['usePdf'] : null;
        $this->container['convertFileType'] = isset($data['convertFileType']) ? $data['convertFileType'] : null;
        $this->container['horizontalResolution'] = isset($data['horizontalResolution']) ? $data['horizontalResolution'] : null;
        $this->container['verticalResolution'] = isset($data['verticalResolution']) ? $data['verticalResolution'] : null;
        $this->container['jpegQuality'] = isset($data['jpegQuality']) ? $data['jpegQuality'] : null;
        $this->container['tiffOptions'] = isset($data['tiffOptions']) ? $data['tiffOptions'] : null;
        $this->container['psdOptions'] = isset($data['psdOptions']) ? $data['psdOptions'] : null;
        $this->container['webpOptions'] = isset($data['webpOptions']) ? $data['webpOptions'] : null;
        $this->container['grayscale'] = isset($data['grayscale']) ? $data['grayscale'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        $allowedValues = $this->getConvertFileTypeAllowableValues();
        if (!in_array($this->container['convertFileType'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'convertFileType', must be one of '%s'",
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

        $allowedValues = $this->getConvertFileTypeAllowableValues();
        if (!in_array($this->container['convertFileType'], $allowedValues)) {
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
     * @param int $width Desired image width after conversion
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
     * @param int $height Desired image height after conversion
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /*
     * Gets usePdf
     *
     * @return bool
     */
    public function getUsePdf()
    {
        return $this->container['usePdf'];
    }

    /*
     * Sets usePdf
     *
     * @param bool $usePdf If true, the input firstly is converted to PDF and after that to desired format
     *
     * @return $this
     */
    public function setUsePdf($usePdf)
    {
        $this->container['usePdf'] = $usePdf;

        return $this;
    }

    /*
     * Gets convertFileType
     *
     * @return string
     */
    public function getConvertFileType()
    {
        return $this->container['convertFileType'];
    }

    /*
     * Sets convertFileType
     *
     * @param string $convertFileType The desired file type to which the input document should be converted to
     *
     * @return $this
     */
    public function setConvertFileType($convertFileType)
    {
        $allowedValues = $this->getConvertFileTypeAllowableValues();
        if ((!is_numeric($convertFileType) && !in_array($convertFileType, $allowedValues)) || (is_numeric($convertFileType) && !in_array($allowedValues[$convertFileType], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'convertFileType', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['convertFileType'] = $convertFileType;

        return $this;
    }

    /*
     * Gets horizontalResolution
     *
     * @return int
     */
    public function getHorizontalResolution()
    {
        return $this->container['horizontalResolution'];
    }

    /*
     * Sets horizontalResolution
     *
     * @param int $horizontalResolution Desired image horizontal resolution after conversion. The default resolution is the resolution of the input file or 96dpi
     *
     * @return $this
     */
    public function setHorizontalResolution($horizontalResolution)
    {
        $this->container['horizontalResolution'] = $horizontalResolution;

        return $this;
    }

    /*
     * Gets verticalResolution
     *
     * @return int
     */
    public function getVerticalResolution()
    {
        return $this->container['verticalResolution'];
    }

    /*
     * Sets verticalResolution
     *
     * @param int $verticalResolution Desired image vertical resolution after conversion. The default resolution is the resolution of the input file or 96dpi
     *
     * @return $this
     */
    public function setVerticalResolution($verticalResolution)
    {
        $this->container['verticalResolution'] = $verticalResolution;

        return $this;
    }

    /*
     * Gets jpegQuality
     *
     * @return int
     */
    public function getJpegQuality()
    {
        return $this->container['jpegQuality'];
    }

    /*
     * Sets jpegQuality
     *
     * @param int $jpegQuality Desired image quality when converting to Jpeg. The value must be between 0 and 100. The default value is 100.
     *
     * @return $this
     */
    public function setJpegQuality($jpegQuality)
    {
        $this->container['jpegQuality'] = $jpegQuality;

        return $this;
    }

    /*
     * Gets tiffOptions
     *
     * @return \GroupDocs\Conversion\Model\TiffOptionsDto
     */
    public function getTiffOptions()
    {
        return $this->container['tiffOptions'];
    }

    /*
     * Sets tiffOptions
     *
     * @param \GroupDocs\Conversion\Model\TiffOptionsDto $tiffOptions Tiff specific convert options
     *
     * @return $this
     */
    public function setTiffOptions($tiffOptions)
    {
        $this->container['tiffOptions'] = $tiffOptions;

        return $this;
    }

    /*
     * Gets psdOptions
     *
     * @return \GroupDocs\Conversion\Model\PsdOptionsDto
     */
    public function getPsdOptions()
    {
        return $this->container['psdOptions'];
    }

    /*
     * Sets psdOptions
     *
     * @param \GroupDocs\Conversion\Model\PsdOptionsDto $psdOptions Psd specific convert options
     *
     * @return $this
     */
    public function setPsdOptions($psdOptions)
    {
        $this->container['psdOptions'] = $psdOptions;

        return $this;
    }

    /*
     * Gets webpOptions
     *
     * @return \GroupDocs\Conversion\Model\WebpOptionsDto
     */
    public function getWebpOptions()
    {
        return $this->container['webpOptions'];
    }

    /*
     * Sets webpOptions
     *
     * @param \GroupDocs\Conversion\Model\WebpOptionsDto $webpOptions Webp specific convert options
     *
     * @return $this
     */
    public function setWebpOptions($webpOptions)
    {
        $this->container['webpOptions'] = $webpOptions;

        return $this;
    }

    /*
     * Gets grayscale
     *
     * @return bool
     */
    public function getGrayscale()
    {
        return $this->container['grayscale'];
    }

    /*
     * Sets grayscale
     *
     * @param bool $grayscale Convert to grayscale image
     *
     * @return $this
     */
    public function setGrayscale($grayscale)
    {
        $this->container['grayscale'] = $grayscale;

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


