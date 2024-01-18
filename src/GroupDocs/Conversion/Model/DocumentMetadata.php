<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="DocumentMetadata.php">
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

use \ArrayAccess;
use \GroupDocs\Conversion\ObjectSerializer;

/*
 * DocumentMetadata
 *
 * @description Contains a document metadata
 */
class DocumentMetadata implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "DocumentMetadata";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'fileType' => 'string',
        'pageCount' => 'int',
        'size' => 'int',
        'width' => 'int',
        'height' => 'int',
        'horizontalResolution' => 'int',
        'verticalResolution' => 'int',
        'bitsPerPixel' => 'int',
        'title' => 'string',
        'author' => 'string',
        'createdDate' => '\DateTime',
        'modifiedDate' => '\DateTime',
        'layers' => 'string[]',
        'isPasswordProtected' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'fileType' => null,
        'pageCount' => 'int32',
        'size' => 'int64',
        'width' => 'int32',
        'height' => 'int32',
        'horizontalResolution' => 'int32',
        'verticalResolution' => 'int32',
        'bitsPerPixel' => 'int32',
        'title' => null,
        'author' => null,
        'createdDate' => 'date-time',
        'modifiedDate' => 'date-time',
        'layers' => null,
        'isPasswordProtected' => null
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
        'fileType' => 'FileType',
        'pageCount' => 'PageCount',
        'size' => 'Size',
        'width' => 'Width',
        'height' => 'Height',
        'horizontalResolution' => 'HorizontalResolution',
        'verticalResolution' => 'VerticalResolution',
        'bitsPerPixel' => 'BitsPerPixel',
        'title' => 'Title',
        'author' => 'Author',
        'createdDate' => 'CreatedDate',
        'modifiedDate' => 'ModifiedDate',
        'layers' => 'Layers',
        'isPasswordProtected' => 'IsPasswordProtected'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'fileType' => 'setFileType',
        'pageCount' => 'setPageCount',
        'size' => 'setSize',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'horizontalResolution' => 'setHorizontalResolution',
        'verticalResolution' => 'setVerticalResolution',
        'bitsPerPixel' => 'setBitsPerPixel',
        'title' => 'setTitle',
        'author' => 'setAuthor',
        'createdDate' => 'setCreatedDate',
        'modifiedDate' => 'setModifiedDate',
        'layers' => 'setLayers',
        'isPasswordProtected' => 'setIsPasswordProtected'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'fileType' => 'getFileType',
        'pageCount' => 'getPageCount',
        'size' => 'getSize',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'horizontalResolution' => 'getHorizontalResolution',
        'verticalResolution' => 'getVerticalResolution',
        'bitsPerPixel' => 'getBitsPerPixel',
        'title' => 'getTitle',
        'author' => 'getAuthor',
        'createdDate' => 'getCreatedDate',
        'modifiedDate' => 'getModifiedDate',
        'layers' => 'getLayers',
        'isPasswordProtected' => 'getIsPasswordProtected'
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
        $this->container['fileType'] = isset($data['fileType']) ? $data['fileType'] : null;
        $this->container['pageCount'] = isset($data['pageCount']) ? $data['pageCount'] : null;
        $this->container['size'] = isset($data['size']) ? $data['size'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['horizontalResolution'] = isset($data['horizontalResolution']) ? $data['horizontalResolution'] : null;
        $this->container['verticalResolution'] = isset($data['verticalResolution']) ? $data['verticalResolution'] : null;
        $this->container['bitsPerPixel'] = isset($data['bitsPerPixel']) ? $data['bitsPerPixel'] : null;
        $this->container['title'] = isset($data['title']) ? $data['title'] : null;
        $this->container['author'] = isset($data['author']) ? $data['author'] : null;
        $this->container['createdDate'] = isset($data['createdDate']) ? $data['createdDate'] : null;
        $this->container['modifiedDate'] = isset($data['modifiedDate']) ? $data['modifiedDate'] : null;
        $this->container['layers'] = isset($data['layers']) ? $data['layers'] : null;
        $this->container['isPasswordProtected'] = isset($data['isPasswordProtected']) ? $data['isPasswordProtected'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['pageCount'] === null) {
            $invalidProperties[] = "'pageCount' can't be null";
        }
        if ($this->container['size'] === null) {
            $invalidProperties[] = "'size' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['horizontalResolution'] === null) {
            $invalidProperties[] = "'horizontalResolution' can't be null";
        }
        if ($this->container['verticalResolution'] === null) {
            $invalidProperties[] = "'verticalResolution' can't be null";
        }
        if ($this->container['bitsPerPixel'] === null) {
            $invalidProperties[] = "'bitsPerPixel' can't be null";
        }
        if ($this->container['createdDate'] === null) {
            $invalidProperties[] = "'createdDate' can't be null";
        }
        if ($this->container['modifiedDate'] === null) {
            $invalidProperties[] = "'modifiedDate' can't be null";
        }
        if ($this->container['isPasswordProtected'] === null) {
            $invalidProperties[] = "'isPasswordProtected' can't be null";
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

        if ($this->container['pageCount'] === null) {
            return false;
        }
        if ($this->container['size'] === null) {
            return false;
        }
        if ($this->container['width'] === null) {
            return false;
        }
        if ($this->container['height'] === null) {
            return false;
        }
        if ($this->container['horizontalResolution'] === null) {
            return false;
        }
        if ($this->container['verticalResolution'] === null) {
            return false;
        }
        if ($this->container['bitsPerPixel'] === null) {
            return false;
        }
        if ($this->container['createdDate'] === null) {
            return false;
        }
        if ($this->container['modifiedDate'] === null) {
            return false;
        }
        if ($this->container['isPasswordProtected'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets fileType
     *
     * @return string
     */
    public function getFileType()
    {
        return $this->container['fileType'];
    }

    /*
     * Sets fileType
     *
     * @param string $fileType Document file type
     *
     * @return $this
     */
    public function setFileType($fileType)
    {
        $this->container['fileType'] = $fileType;

        return $this;
    }

    /*
     * Gets pageCount
     *
     * @return int
     */
    public function getPageCount()
    {
        return $this->container['pageCount'];
    }

    /*
     * Sets pageCount
     *
     * @param int $pageCount Gets pages count if applicable to the current document format
     *
     * @return $this
     */
    public function setPageCount($pageCount)
    {
        $this->container['pageCount'] = $pageCount;

        return $this;
    }

    /*
     * Gets size
     *
     * @return int
     */
    public function getSize()
    {
        return $this->container['size'];
    }

    /*
     * Sets size
     *
     * @param int $size Document bytes size
     *
     * @return $this
     */
    public function setSize($size)
    {
        $this->container['size'] = $size;

        return $this;
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
     * @param int $width Returns detected width if applicable to the current document format
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
     * @param int $height Returns detected height if applicable to the current document format
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

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
     * @param int $horizontalResolution Returns detected horizontal resolution if applicable to the current document format
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
     * @param int $verticalResolution Returns detected vertical resolution if applicable to the current document format
     *
     * @return $this
     */
    public function setVerticalResolution($verticalResolution)
    {
        $this->container['verticalResolution'] = $verticalResolution;

        return $this;
    }

    /*
     * Gets bitsPerPixel
     *
     * @return int
     */
    public function getBitsPerPixel()
    {
        return $this->container['bitsPerPixel'];
    }

    /*
     * Sets bitsPerPixel
     *
     * @param int $bitsPerPixel Returns detected bits per pixel if applicable to the current document format
     *
     * @return $this
     */
    public function setBitsPerPixel($bitsPerPixel)
    {
        $this->container['bitsPerPixel'] = $bitsPerPixel;

        return $this;
    }

    /*
     * Gets title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->container['title'];
    }

    /*
     * Sets title
     *
     * @param string $title Returns document title width if applicable to the current document format
     *
     * @return $this
     */
    public function setTitle($title)
    {
        $this->container['title'] = $title;

        return $this;
    }

    /*
     * Gets author
     *
     * @return string
     */
    public function getAuthor()
    {
        return $this->container['author'];
    }

    /*
     * Sets author
     *
     * @param string $author Returns detected document author if applicable to the current document format
     *
     * @return $this
     */
    public function setAuthor($author)
    {
        $this->container['author'] = $author;

        return $this;
    }

    /*
     * Gets createdDate
     *
     * @return \DateTime
     */
    public function getCreatedDate()
    {
        return $this->container['createdDate'];
    }

    /*
     * Sets createdDate
     *
     * @param \DateTime $createdDate Returns detected document creation date if it's applicable to the current document format
     *
     * @return $this
     */
    public function setCreatedDate($createdDate)
    {
        $this->container['createdDate'] = $createdDate;

        return $this;
    }

    /*
     * Gets modifiedDate
     *
     * @return \DateTime
     */
    public function getModifiedDate()
    {
        return $this->container['modifiedDate'];
    }

    /*
     * Sets modifiedDate
     *
     * @param \DateTime $modifiedDate Returns detected document modification date if applicable to the current document format
     *
     * @return $this
     */
    public function setModifiedDate($modifiedDate)
    {
        $this->container['modifiedDate'] = $modifiedDate;

        return $this;
    }

    /*
     * Gets layers
     *
     * @return string[]
     */
    public function getLayers()
    {
        return $this->container['layers'];
    }

    /*
     * Sets layers
     *
     * @param string[] $layers Returns list of layer names if applicable to the current document format
     *
     * @return $this
     */
    public function setLayers($layers)
    {
        $this->container['layers'] = $layers;

        return $this;
    }

    /*
     * Gets isPasswordProtected
     *
     * @return bool
     */
    public function getIsPasswordProtected()
    {
        return $this->container['isPasswordProtected'];
    }

    /*
     * Sets isPasswordProtected
     *
     * @param bool $isPasswordProtected Is document password protected
     *
     * @return $this
     */
    public function setIsPasswordProtected($isPasswordProtected)
    {
        $this->container['isPasswordProtected'] = $isPasswordProtected;

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


