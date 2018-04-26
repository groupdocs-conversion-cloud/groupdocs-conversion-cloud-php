<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="PdfOptionsDto.php">
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
 * PdfOptionsDto
 */

namespace GroupDocs\Conversion\Model;

use \ArrayAccess;
use \GroupDocs\Conversion\ObjectSerializer;

/*
 * PdfOptionsDto
 *
 * @description Pdf options
 */
class PdfOptionsDto implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PdfOptionsDto";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'pdfFormat' => 'string',
        'removePdfaCompliance' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'pdfFormat' => null,
        'removePdfaCompliance' => null
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
        'pdfFormat' => 'PdfFormat',
        'removePdfaCompliance' => 'RemovePdfaCompliance'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'pdfFormat' => 'setPdfFormat',
        'removePdfaCompliance' => 'setRemovePdfaCompliance'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'pdfFormat' => 'getPdfFormat',
        'removePdfaCompliance' => 'getRemovePdfaCompliance'
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

    const PDF_FORMAT__DEFAULT = 'Default';
    const PDF_FORMAT_PDF_A_1_A = 'PdfA_1A';
    const PDF_FORMAT_PDF_A_1_B = 'PdfA_1B';
    const PDF_FORMAT_PDF_A_2_A = 'PdfA_2A';
    const PDF_FORMAT_PDF_A_3_A = 'PdfA_3A';
    const PDF_FORMAT_PDF_A_2_B = 'PdfA_2B';
    const PDF_FORMAT_PDF_A_2_U = 'PdfA_2U';
    const PDF_FORMAT_PDF_A_3_B = 'PdfA_3B';
    const PDF_FORMAT_PDF_A_3_U = 'PdfA_3U';
    const PDF_FORMAT_V1_3 = 'v1_3';
    const PDF_FORMAT_V1_4 = 'v1_4';
    const PDF_FORMAT_V1_5 = 'v1_5';
    const PDF_FORMAT_V1_6 = 'v1_6';
    const PDF_FORMAT_V1_7 = 'v1_7';
    const PDF_FORMAT_PDF_X_1_A = 'PdfX_1A';
    const PDF_FORMAT_PDF_X3 = 'PdfX3';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPdfFormatAllowableValues()
    {
        return [
            self::PDF_FORMAT__DEFAULT,
            self::PDF_FORMAT_PDF_A_1_A,
            self::PDF_FORMAT_PDF_A_1_B,
            self::PDF_FORMAT_PDF_A_2_A,
            self::PDF_FORMAT_PDF_A_3_A,
            self::PDF_FORMAT_PDF_A_2_B,
            self::PDF_FORMAT_PDF_A_2_U,
            self::PDF_FORMAT_PDF_A_3_B,
            self::PDF_FORMAT_PDF_A_3_U,
            self::PDF_FORMAT_V1_3,
            self::PDF_FORMAT_V1_4,
            self::PDF_FORMAT_V1_5,
            self::PDF_FORMAT_V1_6,
            self::PDF_FORMAT_V1_7,
            self::PDF_FORMAT_PDF_X_1_A,
            self::PDF_FORMAT_PDF_X3,
        ];
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
        $this->container['pdfFormat'] = isset($data['pdfFormat']) ? $data['pdfFormat'] : null;
        $this->container['removePdfaCompliance'] = isset($data['removePdfaCompliance']) ? $data['removePdfaCompliance'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pdfFormat'] === null) {
            $invalidProperties[] = "'pdfFormat' can't be null";
        }
        $allowedValues = $this->getPdfFormatAllowableValues();
        if (!in_array($this->container['pdfFormat'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pdfFormat', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['removePdfaCompliance'] === null) {
            $invalidProperties[] = "'removePdfaCompliance' can't be null";
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

        if ($this->container['pdfFormat'] === null) {
            return false;
        }
        $allowedValues = $this->getPdfFormatAllowableValues();
        if (!in_array($this->container['pdfFormat'], $allowedValues)) {
            return false;
        }
        if ($this->container['removePdfaCompliance'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets pdfFormat
     *
     * @return string
     */
    public function getPdfFormat()
    {
        return $this->container['pdfFormat'];
    }

    /*
     * Sets pdfFormat
     *
     * @param string $pdfFormat Set the pdf format of the converted document.
     *
     * @return $this
     */
    public function setPdfFormat($pdfFormat)
    {
        $allowedValues = $this->getPdfFormatAllowableValues();
        if ((!is_numeric($pdfFormat) && !in_array($pdfFormat, $allowedValues)) || (is_numeric($pdfFormat) && !in_array($allowedValues[$pdfFormat], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'pdfFormat', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['pdfFormat'] = $pdfFormat;

        return $this;
    }

    /*
     * Gets removePdfaCompliance
     *
     * @return bool
     */
    public function getRemovePdfaCompliance()
    {
        return $this->container['removePdfaCompliance'];
    }

    /*
     * Sets removePdfaCompliance
     *
     * @param bool $removePdfaCompliance Remove Pdf-A Compliance
     *
     * @return $this
     */
    public function setRemovePdfaCompliance($removePdfaCompliance)
    {
        $this->container['removePdfaCompliance'] = $removePdfaCompliance;

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


