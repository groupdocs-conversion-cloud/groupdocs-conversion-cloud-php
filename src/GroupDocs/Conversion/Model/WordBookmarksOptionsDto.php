<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="WordBookmarksOptionsDto.php">
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
 * WordBookmarksOptionsDto
 */

namespace GroupDocs\Conversion\Model;

use \ArrayAccess;
use \GroupDocs\Conversion\ObjectSerializer;

/*
 * WordBookmarksOptionsDto
 *
 * @description Options for handling Bookmarks in Word to PDF conversions
 */
class WordBookmarksOptionsDto implements ArrayAccess
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "WordBookmarksOptionsDto";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'bookmarksOutlineLevel' => 'int',
        'headingsOutlineLevels' => 'int',
        'expandedOutlineLevels' => 'int'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'bookmarksOutlineLevel' => 'int32',
        'headingsOutlineLevels' => 'int32',
        'expandedOutlineLevels' => 'int32'
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
        'bookmarksOutlineLevel' => 'BookmarksOutlineLevel',
        'headingsOutlineLevels' => 'HeadingsOutlineLevels',
        'expandedOutlineLevels' => 'ExpandedOutlineLevels'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'bookmarksOutlineLevel' => 'setBookmarksOutlineLevel',
        'headingsOutlineLevels' => 'setHeadingsOutlineLevels',
        'expandedOutlineLevels' => 'setExpandedOutlineLevels'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'bookmarksOutlineLevel' => 'getBookmarksOutlineLevel',
        'headingsOutlineLevels' => 'getHeadingsOutlineLevels',
        'expandedOutlineLevels' => 'getExpandedOutlineLevels'
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
        $this->container['bookmarksOutlineLevel'] = isset($data['bookmarksOutlineLevel']) ? $data['bookmarksOutlineLevel'] : null;
        $this->container['headingsOutlineLevels'] = isset($data['headingsOutlineLevels']) ? $data['headingsOutlineLevels'] : null;
        $this->container['expandedOutlineLevels'] = isset($data['expandedOutlineLevels']) ? $data['expandedOutlineLevels'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = [];

        if ($this->container['bookmarksOutlineLevel'] === null) {
            $invalidProperties[] = "'bookmarksOutlineLevel' can't be null";
        }
        if ($this->container['headingsOutlineLevels'] === null) {
            $invalidProperties[] = "'headingsOutlineLevels' can't be null";
        }
        if ($this->container['expandedOutlineLevels'] === null) {
            $invalidProperties[] = "'expandedOutlineLevels' can't be null";
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

        if ($this->container['bookmarksOutlineLevel'] === null) {
            return false;
        }
        if ($this->container['headingsOutlineLevels'] === null) {
            return false;
        }
        if ($this->container['expandedOutlineLevels'] === null) {
            return false;
        }
        return true;
    }


    /*
     * Gets bookmarksOutlineLevel
     *
     * @return int
     */
    public function getBookmarksOutlineLevel()
    {
        return $this->container['bookmarksOutlineLevel'];
    }

    /*
     * Sets bookmarksOutlineLevel
     *
     * @param int $bookmarksOutlineLevel Specifies the default level in the document outline at which to display Word bookmarks. Default is 0. Valid range is 0 to 9.
     *
     * @return $this
     */
    public function setBookmarksOutlineLevel($bookmarksOutlineLevel)
    {
        $this->container['bookmarksOutlineLevel'] = $bookmarksOutlineLevel;

        return $this;
    }

    /*
     * Gets headingsOutlineLevels
     *
     * @return int
     */
    public function getHeadingsOutlineLevels()
    {
        return $this->container['headingsOutlineLevels'];
    }

    /*
     * Sets headingsOutlineLevels
     *
     * @param int $headingsOutlineLevels Specifies how many levels of headings (paragraphs formatted with the Heading styles) to include in the document outline. Default is 0. Valid range is 0 to 9.
     *
     * @return $this
     */
    public function setHeadingsOutlineLevels($headingsOutlineLevels)
    {
        $this->container['headingsOutlineLevels'] = $headingsOutlineLevels;

        return $this;
    }

    /*
     * Gets expandedOutlineLevels
     *
     * @return int
     */
    public function getExpandedOutlineLevels()
    {
        return $this->container['expandedOutlineLevels'];
    }

    /*
     * Sets expandedOutlineLevels
     *
     * @param int $expandedOutlineLevels Specifies how many levels in the document outline to show expanded when the file is viewed. Default is 0. Valid range is 0 to 9. Note that this options will not work when saving to XPS.
     *
     * @return $this
     */
    public function setExpandedOutlineLevels($expandedOutlineLevels)
    {
        $this->container['expandedOutlineLevels'] = $expandedOutlineLevels;

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


