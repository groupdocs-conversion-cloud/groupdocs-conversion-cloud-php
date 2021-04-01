<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="WatermarkOptions.php">
 *   Copyright (c) 2003-2021 Aspose Pty Ltd
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
 * WatermarkOptions
 *
 * @description Options for settings watermark to the converted document
 */
class WatermarkOptions implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "WatermarkOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'text' => 'string',
        'fontName' => 'string',
        'fontSize' => 'int',
        'bold' => 'bool',
        'italic' => 'bool',
        'color' => 'string',
        'width' => 'int',
        'height' => 'int',
        'top' => 'int',
        'left' => 'int',
        'rotationAngle' => 'int',
        'transparency' => 'double',
        'background' => 'bool',
        'image' => 'string'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'text' => null,
        'fontName' => null,
        'fontSize' => 'int32',
        'bold' => null,
        'italic' => null,
        'color' => null,
        'width' => 'int32',
        'height' => 'int32',
        'top' => 'int32',
        'left' => 'int32',
        'rotationAngle' => 'int32',
        'transparency' => 'double',
        'background' => null,
        'image' => null
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
        'text' => 'Text',
        'fontName' => 'FontName',
        'fontSize' => 'FontSize',
        'bold' => 'Bold',
        'italic' => 'Italic',
        'color' => 'Color',
        'width' => 'Width',
        'height' => 'Height',
        'top' => 'Top',
        'left' => 'Left',
        'rotationAngle' => 'RotationAngle',
        'transparency' => 'Transparency',
        'background' => 'Background',
        'image' => 'Image'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'text' => 'setText',
        'fontName' => 'setFontName',
        'fontSize' => 'setFontSize',
        'bold' => 'setBold',
        'italic' => 'setItalic',
        'color' => 'setColor',
        'width' => 'setWidth',
        'height' => 'setHeight',
        'top' => 'setTop',
        'left' => 'setLeft',
        'rotationAngle' => 'setRotationAngle',
        'transparency' => 'setTransparency',
        'background' => 'setBackground',
        'image' => 'setImage'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'text' => 'getText',
        'fontName' => 'getFontName',
        'fontSize' => 'getFontSize',
        'bold' => 'getBold',
        'italic' => 'getItalic',
        'color' => 'getColor',
        'width' => 'getWidth',
        'height' => 'getHeight',
        'top' => 'getTop',
        'left' => 'getLeft',
        'rotationAngle' => 'getRotationAngle',
        'transparency' => 'getTransparency',
        'background' => 'getBackground',
        'image' => 'getImage'
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
        $this->container['text'] = isset($data['text']) ? $data['text'] : null;
        $this->container['fontName'] = isset($data['fontName']) ? $data['fontName'] : null;
        $this->container['fontSize'] = isset($data['fontSize']) ? $data['fontSize'] : null;
        $this->container['bold'] = isset($data['bold']) ? $data['bold'] : null;
        $this->container['italic'] = isset($data['italic']) ? $data['italic'] : null;
        $this->container['color'] = isset($data['color']) ? $data['color'] : null;
        $this->container['width'] = isset($data['width']) ? $data['width'] : null;
        $this->container['height'] = isset($data['height']) ? $data['height'] : null;
        $this->container['top'] = isset($data['top']) ? $data['top'] : null;
        $this->container['left'] = isset($data['left']) ? $data['left'] : null;
        $this->container['rotationAngle'] = isset($data['rotationAngle']) ? $data['rotationAngle'] : null;
        $this->container['transparency'] = isset($data['transparency']) ? $data['transparency'] : null;
        $this->container['background'] = isset($data['background']) ? $data['background'] : null;
        $this->container['image'] = isset($data['image']) ? $data['image'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['fontSize'] === null) {
            $invalidProperties[] = "'fontSize' can't be null";
        }
        if ($this->container['bold'] === null) {
            $invalidProperties[] = "'bold' can't be null";
        }
        if ($this->container['italic'] === null) {
            $invalidProperties[] = "'italic' can't be null";
        }
        if ($this->container['width'] === null) {
            $invalidProperties[] = "'width' can't be null";
        }
        if ($this->container['height'] === null) {
            $invalidProperties[] = "'height' can't be null";
        }
        if ($this->container['top'] === null) {
            $invalidProperties[] = "'top' can't be null";
        }
        if ($this->container['left'] === null) {
            $invalidProperties[] = "'left' can't be null";
        }
        if ($this->container['rotationAngle'] === null) {
            $invalidProperties[] = "'rotationAngle' can't be null";
        }
        if ($this->container['transparency'] === null) {
            $invalidProperties[] = "'transparency' can't be null";
        }
        if ($this->container['background'] === null) {
            $invalidProperties[] = "'background' can't be null";
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

        if ($this->container['fontSize'] === null) {
            return false;
        }
        if ($this->container['bold'] === null) {
            return false;
        }
        if ($this->container['italic'] === null) {
            return false;
        }
        if ($this->container['width'] === null) {
            return false;
        }
        if ($this->container['height'] === null) {
            return false;
        }
        if ($this->container['top'] === null) {
            return false;
        }
        if ($this->container['left'] === null) {
            return false;
        }
        if ($this->container['rotationAngle'] === null) {
            return false;
        }
        if ($this->container['transparency'] === null) {
            return false;
        }
        if ($this->container['background'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets text
     *
     * @return string
     */
    public function getText()
    {
        return $this->container['text'];
    }

    /*
     * Sets text
     *
     * @param string $text Watermark text
     *
     * @return $this
     */
    public function setText($text)
    {
        $this->container['text'] = $text;

        return $this;
    }

    /*
     * Gets fontName
     *
     * @return string
     */
    public function getFontName()
    {
        return $this->container['fontName'];
    }

    /*
     * Sets fontName
     *
     * @param string $fontName Watermark font name if text watermark is applied
     *
     * @return $this
     */
    public function setFontName($fontName)
    {
        $this->container['fontName'] = $fontName;

        return $this;
    }

    /*
     * Gets fontSize
     *
     * @return int
     */
    public function getFontSize()
    {
        return $this->container['fontSize'];
    }

    /*
     * Sets fontSize
     *
     * @param int $fontSize Watermark font name if text watermark is applied
     *
     * @return $this
     */
    public function setFontSize($fontSize)
    {
        $this->container['fontSize'] = $fontSize;

        return $this;
    }

    /*
     * Gets bold
     *
     * @return bool
     */
    public function getBold()
    {
        return $this->container['bold'];
    }

    /*
     * Sets bold
     *
     * @param bool $bold Watermark font bold style if text watermark is applied
     *
     * @return $this
     */
    public function setBold($bold)
    {
        $this->container['bold'] = $bold;

        return $this;
    }

    /*
     * Gets italic
     *
     * @return bool
     */
    public function getItalic()
    {
        return $this->container['italic'];
    }

    /*
     * Sets italic
     *
     * @param bool $italic Watermark font italic style if text watermark is applied
     *
     * @return $this
     */
    public function setItalic($italic)
    {
        $this->container['italic'] = $italic;

        return $this;
    }

    /*
     * Gets color
     *
     * @return string
     */
    public function getColor()
    {
        return $this->container['color'];
    }

    /*
     * Sets color
     *
     * @param string $color Watermark font color if text watermark is applied
     *
     * @return $this
     */
    public function setColor($color)
    {
        $this->container['color'] = $color;

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
     * @param int $width Watermark width
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
     * @param int $height Watermark height
     *
     * @return $this
     */
    public function setHeight($height)
    {
        $this->container['height'] = $height;

        return $this;
    }

    /*
     * Gets top
     *
     * @return int
     */
    public function getTop()
    {
        return $this->container['top'];
    }

    /*
     * Sets top
     *
     * @param int $top Watermark top position
     *
     * @return $this
     */
    public function setTop($top)
    {
        $this->container['top'] = $top;

        return $this;
    }

    /*
     * Gets left
     *
     * @return int
     */
    public function getLeft()
    {
        return $this->container['left'];
    }

    /*
     * Sets left
     *
     * @param int $left Watermark left position
     *
     * @return $this
     */
    public function setLeft($left)
    {
        $this->container['left'] = $left;

        return $this;
    }

    /*
     * Gets rotationAngle
     *
     * @return int
     */
    public function getRotationAngle()
    {
        return $this->container['rotationAngle'];
    }

    /*
     * Sets rotationAngle
     *
     * @param int $rotationAngle Watermark rotation angle
     *
     * @return $this
     */
    public function setRotationAngle($rotationAngle)
    {
        $this->container['rotationAngle'] = $rotationAngle;

        return $this;
    }

    /*
     * Gets transparency
     *
     * @return double
     */
    public function getTransparency()
    {
        return $this->container['transparency'];
    }

    /*
     * Sets transparency
     *
     * @param double $transparency Watermark transparency. Value between 0 and 1. Value 0 is fully visible, value 1 is invisible.
     *
     * @return $this
     */
    public function setTransparency($transparency)
    {
        $this->container['transparency'] = $transparency;

        return $this;
    }

    /*
     * Gets background
     *
     * @return bool
     */
    public function getBackground()
    {
        return $this->container['background'];
    }

    /*
     * Sets background
     *
     * @param bool $background Indicates that the watermark is stamped as background. If the value is true, the watermark is layed at the bottom. By default is false and the watermark is layed on top.
     *
     * @return $this
     */
    public function setBackground($background)
    {
        $this->container['background'] = $background;

        return $this;
    }

    /*
     * Gets image
     *
     * @return string
     */
    public function getImage()
    {
        return $this->container['image'];
    }

    /*
     * Sets image
     *
     * @param string $image Image watermark
     *
     * @return $this
     */
    public function setImage($image)
    {
        $this->container['image'] = $image;

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


