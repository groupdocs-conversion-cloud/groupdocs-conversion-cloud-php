<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="WordProcessingLoadOptions.php">
 *   Copyright (c) Aspose Pty Ltd
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
 * WordProcessingLoadOptions
 *
 * @description WordProcessing document load options
 */
class WordProcessingLoadOptions extends LoadOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "WordProcessingLoadOptions";

    /*
     * Array of property to type mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerTypes = [
        'defaultFont' => 'string',
        'fontSubstitutes' => 'map[string,string]',
        'password' => 'string',
        'hideWordTrackedChanges' => 'bool',
        'bookmarksOutlineLevel' => 'int',
        'headingsOutlineLevels' => 'int',
        'expandedOutlineLevels' => 'int',
        'clearCustomDocumentProperties' => 'bool',
        'clearBuiltInDocumentProperties' => 'bool',
        'depth' => 'int',
        'convertOwned' => 'bool',
        'convertOwner' => 'bool',
        'autoHyphenation' => 'bool',
        'hyphenateCaps' => 'bool',
        'pageNumbering' => 'bool',
        'preserveDocumentStructure' => 'bool',
        'skipExternalResources' => 'bool',
        'useTextShaper' => 'bool',
        'preserveFormFields' => 'bool',
        'commentDisplayMode' => 'string',
        'keepDateFieldOriginalValue' => 'bool',
        'updateFields' => 'bool',
        'updatePageLayout' => 'bool',
        'embedTrueTypeFonts' => 'bool',
        'fontInfoSubstitutionEnabled' => 'bool',
        'fontConfigSubstitutionEnabled' => 'bool',
        'fontNameSubstitutionEnabled' => 'bool',
        'showFullCommenterName' => 'bool'
    ];

    /*
     * Array of property to format mappings. Used for (de)serialization
     *
     * @var string[]
     */
    protected static $swaggerFormats = [
        'defaultFont' => null,
        'fontSubstitutes' => null,
        'password' => null,
        'hideWordTrackedChanges' => null,
        'bookmarksOutlineLevel' => 'int32',
        'headingsOutlineLevels' => 'int32',
        'expandedOutlineLevels' => 'int32',
        'clearCustomDocumentProperties' => null,
        'clearBuiltInDocumentProperties' => null,
        'depth' => 'int32',
        'convertOwned' => null,
        'convertOwner' => null,
        'autoHyphenation' => null,
        'hyphenateCaps' => null,
        'pageNumbering' => null,
        'preserveDocumentStructure' => null,
        'skipExternalResources' => null,
        'useTextShaper' => null,
        'preserveFormFields' => null,
        'commentDisplayMode' => null,
        'keepDateFieldOriginalValue' => null,
        'updateFields' => null,
        'updatePageLayout' => null,
        'embedTrueTypeFonts' => null,
        'fontInfoSubstitutionEnabled' => null,
        'fontConfigSubstitutionEnabled' => null,
        'fontNameSubstitutionEnabled' => null,
        'showFullCommenterName' => null
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
        'password' => 'Password',
        'hideWordTrackedChanges' => 'HideWordTrackedChanges',
        'bookmarksOutlineLevel' => 'BookmarksOutlineLevel',
        'headingsOutlineLevels' => 'HeadingsOutlineLevels',
        'expandedOutlineLevels' => 'ExpandedOutlineLevels',
        'clearCustomDocumentProperties' => 'ClearCustomDocumentProperties',
        'clearBuiltInDocumentProperties' => 'ClearBuiltInDocumentProperties',
        'depth' => 'Depth',
        'convertOwned' => 'ConvertOwned',
        'convertOwner' => 'ConvertOwner',
        'autoHyphenation' => 'AutoHyphenation',
        'hyphenateCaps' => 'HyphenateCaps',
        'pageNumbering' => 'PageNumbering',
        'preserveDocumentStructure' => 'PreserveDocumentStructure',
        'skipExternalResources' => 'SkipExternalResources',
        'useTextShaper' => 'UseTextShaper',
        'preserveFormFields' => 'PreserveFormFields',
        'commentDisplayMode' => 'CommentDisplayMode',
        'keepDateFieldOriginalValue' => 'KeepDateFieldOriginalValue',
        'updateFields' => 'UpdateFields',
        'updatePageLayout' => 'UpdatePageLayout',
        'embedTrueTypeFonts' => 'EmbedTrueTypeFonts',
        'fontInfoSubstitutionEnabled' => 'FontInfoSubstitutionEnabled',
        'fontConfigSubstitutionEnabled' => 'FontConfigSubstitutionEnabled',
        'fontNameSubstitutionEnabled' => 'FontNameSubstitutionEnabled',
        'showFullCommenterName' => 'ShowFullCommenterName'
    ];

    /*
     * Array of attributes to setter functions (for deserialization of responses)
     *
     * @var string[]
     */
    protected static $setters = [
        'defaultFont' => 'setDefaultFont',
        'fontSubstitutes' => 'setFontSubstitutes',
        'password' => 'setPassword',
        'hideWordTrackedChanges' => 'setHideWordTrackedChanges',
        'bookmarksOutlineLevel' => 'setBookmarksOutlineLevel',
        'headingsOutlineLevels' => 'setHeadingsOutlineLevels',
        'expandedOutlineLevels' => 'setExpandedOutlineLevels',
        'clearCustomDocumentProperties' => 'setClearCustomDocumentProperties',
        'clearBuiltInDocumentProperties' => 'setClearBuiltInDocumentProperties',
        'depth' => 'setDepth',
        'convertOwned' => 'setConvertOwned',
        'convertOwner' => 'setConvertOwner',
        'autoHyphenation' => 'setAutoHyphenation',
        'hyphenateCaps' => 'setHyphenateCaps',
        'pageNumbering' => 'setPageNumbering',
        'preserveDocumentStructure' => 'setPreserveDocumentStructure',
        'skipExternalResources' => 'setSkipExternalResources',
        'useTextShaper' => 'setUseTextShaper',
        'preserveFormFields' => 'setPreserveFormFields',
        'commentDisplayMode' => 'setCommentDisplayMode',
        'keepDateFieldOriginalValue' => 'setKeepDateFieldOriginalValue',
        'updateFields' => 'setUpdateFields',
        'updatePageLayout' => 'setUpdatePageLayout',
        'embedTrueTypeFonts' => 'setEmbedTrueTypeFonts',
        'fontInfoSubstitutionEnabled' => 'setFontInfoSubstitutionEnabled',
        'fontConfigSubstitutionEnabled' => 'setFontConfigSubstitutionEnabled',
        'fontNameSubstitutionEnabled' => 'setFontNameSubstitutionEnabled',
        'showFullCommenterName' => 'setShowFullCommenterName'
    ];

    /*
     * Array of attributes to getter functions (for serialization of requests)
     *
     * @var string[]
     */
    protected static $getters = [
        'defaultFont' => 'getDefaultFont',
        'fontSubstitutes' => 'getFontSubstitutes',
        'password' => 'getPassword',
        'hideWordTrackedChanges' => 'getHideWordTrackedChanges',
        'bookmarksOutlineLevel' => 'getBookmarksOutlineLevel',
        'headingsOutlineLevels' => 'getHeadingsOutlineLevels',
        'expandedOutlineLevels' => 'getExpandedOutlineLevels',
        'clearCustomDocumentProperties' => 'getClearCustomDocumentProperties',
        'clearBuiltInDocumentProperties' => 'getClearBuiltInDocumentProperties',
        'depth' => 'getDepth',
        'convertOwned' => 'getConvertOwned',
        'convertOwner' => 'getConvertOwner',
        'autoHyphenation' => 'getAutoHyphenation',
        'hyphenateCaps' => 'getHyphenateCaps',
        'pageNumbering' => 'getPageNumbering',
        'preserveDocumentStructure' => 'getPreserveDocumentStructure',
        'skipExternalResources' => 'getSkipExternalResources',
        'useTextShaper' => 'getUseTextShaper',
        'preserveFormFields' => 'getPreserveFormFields',
        'commentDisplayMode' => 'getCommentDisplayMode',
        'keepDateFieldOriginalValue' => 'getKeepDateFieldOriginalValue',
        'updateFields' => 'getUpdateFields',
        'updatePageLayout' => 'getUpdatePageLayout',
        'embedTrueTypeFonts' => 'getEmbedTrueTypeFonts',
        'fontInfoSubstitutionEnabled' => 'getFontInfoSubstitutionEnabled',
        'fontConfigSubstitutionEnabled' => 'getFontConfigSubstitutionEnabled',
        'fontNameSubstitutionEnabled' => 'getFontNameSubstitutionEnabled',
        'showFullCommenterName' => 'getShowFullCommenterName'
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

    const COMMENT_DISPLAY_MODE_HIDDEN = 'Hidden';
    const COMMENT_DISPLAY_MODE_BALLOON = 'Balloon';
    const COMMENT_DISPLAY_MODE_ANNOTATION = 'Annotation';
    

    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getCommentDisplayModeAllowableValues()
    {
        return [
            self::COMMENT_DISPLAY_MODE_HIDDEN,
            self::COMMENT_DISPLAY_MODE_BALLOON,
            self::COMMENT_DISPLAY_MODE_ANNOTATION,
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

        $this->container['defaultFont'] = isset($data['defaultFont']) ? $data['defaultFont'] : null;
        $this->container['fontSubstitutes'] = isset($data['fontSubstitutes']) ? $data['fontSubstitutes'] : null;
        $this->container['password'] = isset($data['password']) ? $data['password'] : null;
        $this->container['hideWordTrackedChanges'] = isset($data['hideWordTrackedChanges']) ? $data['hideWordTrackedChanges'] : null;
        $this->container['bookmarksOutlineLevel'] = isset($data['bookmarksOutlineLevel']) ? $data['bookmarksOutlineLevel'] : null;
        $this->container['headingsOutlineLevels'] = isset($data['headingsOutlineLevels']) ? $data['headingsOutlineLevels'] : null;
        $this->container['expandedOutlineLevels'] = isset($data['expandedOutlineLevels']) ? $data['expandedOutlineLevels'] : null;
        $this->container['clearCustomDocumentProperties'] = isset($data['clearCustomDocumentProperties']) ? $data['clearCustomDocumentProperties'] : null;
        $this->container['clearBuiltInDocumentProperties'] = isset($data['clearBuiltInDocumentProperties']) ? $data['clearBuiltInDocumentProperties'] : null;
        $this->container['depth'] = isset($data['depth']) ? $data['depth'] : null;
        $this->container['convertOwned'] = isset($data['convertOwned']) ? $data['convertOwned'] : null;
        $this->container['convertOwner'] = isset($data['convertOwner']) ? $data['convertOwner'] : null;
        $this->container['autoHyphenation'] = isset($data['autoHyphenation']) ? $data['autoHyphenation'] : null;
        $this->container['hyphenateCaps'] = isset($data['hyphenateCaps']) ? $data['hyphenateCaps'] : null;
        $this->container['pageNumbering'] = isset($data['pageNumbering']) ? $data['pageNumbering'] : null;
        $this->container['preserveDocumentStructure'] = isset($data['preserveDocumentStructure']) ? $data['preserveDocumentStructure'] : null;
        $this->container['skipExternalResources'] = isset($data['skipExternalResources']) ? $data['skipExternalResources'] : null;
        $this->container['useTextShaper'] = isset($data['useTextShaper']) ? $data['useTextShaper'] : null;
        $this->container['preserveFormFields'] = isset($data['preserveFormFields']) ? $data['preserveFormFields'] : null;
        $this->container['commentDisplayMode'] = isset($data['commentDisplayMode']) ? $data['commentDisplayMode'] : null;
        $this->container['keepDateFieldOriginalValue'] = isset($data['keepDateFieldOriginalValue']) ? $data['keepDateFieldOriginalValue'] : null;
        $this->container['updateFields'] = isset($data['updateFields']) ? $data['updateFields'] : null;
        $this->container['updatePageLayout'] = isset($data['updatePageLayout']) ? $data['updatePageLayout'] : null;
        $this->container['embedTrueTypeFonts'] = isset($data['embedTrueTypeFonts']) ? $data['embedTrueTypeFonts'] : null;
        $this->container['fontInfoSubstitutionEnabled'] = isset($data['fontInfoSubstitutionEnabled']) ? $data['fontInfoSubstitutionEnabled'] : null;
        $this->container['fontConfigSubstitutionEnabled'] = isset($data['fontConfigSubstitutionEnabled']) ? $data['fontConfigSubstitutionEnabled'] : null;
        $this->container['fontNameSubstitutionEnabled'] = isset($data['fontNameSubstitutionEnabled']) ? $data['fontNameSubstitutionEnabled'] : null;
        $this->container['showFullCommenterName'] = isset($data['showFullCommenterName']) ? $data['showFullCommenterName'] : null;
    }

    /*
     * Show all the invalid properties with reasons.
     *
     * @return array invalid properties with reasons
     */
    public function listInvalidProperties()
    {
        $invalidProperties = parent::listInvalidProperties();

        if ($this->container['hideWordTrackedChanges'] === null) {
            $invalidProperties[] = "'hideWordTrackedChanges' can't be null";
        }
        if ($this->container['bookmarksOutlineLevel'] === null) {
            $invalidProperties[] = "'bookmarksOutlineLevel' can't be null";
        }
        if ($this->container['headingsOutlineLevels'] === null) {
            $invalidProperties[] = "'headingsOutlineLevels' can't be null";
        }
        if ($this->container['expandedOutlineLevels'] === null) {
            $invalidProperties[] = "'expandedOutlineLevels' can't be null";
        }
        if ($this->container['clearCustomDocumentProperties'] === null) {
            $invalidProperties[] = "'clearCustomDocumentProperties' can't be null";
        }
        if ($this->container['clearBuiltInDocumentProperties'] === null) {
            $invalidProperties[] = "'clearBuiltInDocumentProperties' can't be null";
        }
        if ($this->container['depth'] === null) {
            $invalidProperties[] = "'depth' can't be null";
        }
        if ($this->container['convertOwned'] === null) {
            $invalidProperties[] = "'convertOwned' can't be null";
        }
        if ($this->container['convertOwner'] === null) {
            $invalidProperties[] = "'convertOwner' can't be null";
        }
        if ($this->container['autoHyphenation'] === null) {
            $invalidProperties[] = "'autoHyphenation' can't be null";
        }
        if ($this->container['hyphenateCaps'] === null) {
            $invalidProperties[] = "'hyphenateCaps' can't be null";
        }
        if ($this->container['pageNumbering'] === null) {
            $invalidProperties[] = "'pageNumbering' can't be null";
        }
        if ($this->container['preserveDocumentStructure'] === null) {
            $invalidProperties[] = "'preserveDocumentStructure' can't be null";
        }
        if ($this->container['skipExternalResources'] === null) {
            $invalidProperties[] = "'skipExternalResources' can't be null";
        }
        if ($this->container['useTextShaper'] === null) {
            $invalidProperties[] = "'useTextShaper' can't be null";
        }
        if ($this->container['preserveFormFields'] === null) {
            $invalidProperties[] = "'preserveFormFields' can't be null";
        }
        if ($this->container['commentDisplayMode'] === null) {
            $invalidProperties[] = "'commentDisplayMode' can't be null";
        }
        $allowedValues = $this->getCommentDisplayModeAllowableValues();
        if (!in_array($this->container['commentDisplayMode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'commentDisplayMode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['keepDateFieldOriginalValue'] === null) {
            $invalidProperties[] = "'keepDateFieldOriginalValue' can't be null";
        }
        if ($this->container['updateFields'] === null) {
            $invalidProperties[] = "'updateFields' can't be null";
        }
        if ($this->container['updatePageLayout'] === null) {
            $invalidProperties[] = "'updatePageLayout' can't be null";
        }
        if ($this->container['embedTrueTypeFonts'] === null) {
            $invalidProperties[] = "'embedTrueTypeFonts' can't be null";
        }
        if ($this->container['fontInfoSubstitutionEnabled'] === null) {
            $invalidProperties[] = "'fontInfoSubstitutionEnabled' can't be null";
        }
        if ($this->container['fontConfigSubstitutionEnabled'] === null) {
            $invalidProperties[] = "'fontConfigSubstitutionEnabled' can't be null";
        }
        if ($this->container['fontNameSubstitutionEnabled'] === null) {
            $invalidProperties[] = "'fontNameSubstitutionEnabled' can't be null";
        }
        if ($this->container['showFullCommenterName'] === null) {
            $invalidProperties[] = "'showFullCommenterName' can't be null";
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

        if ($this->container['hideWordTrackedChanges'] === null) {
            return false;
        }
        if ($this->container['bookmarksOutlineLevel'] === null) {
            return false;
        }
        if ($this->container['headingsOutlineLevels'] === null) {
            return false;
        }
        if ($this->container['expandedOutlineLevels'] === null) {
            return false;
        }
        if ($this->container['clearCustomDocumentProperties'] === null) {
            return false;
        }
        if ($this->container['clearBuiltInDocumentProperties'] === null) {
            return false;
        }
        if ($this->container['depth'] === null) {
            return false;
        }
        if ($this->container['convertOwned'] === null) {
            return false;
        }
        if ($this->container['convertOwner'] === null) {
            return false;
        }
        if ($this->container['autoHyphenation'] === null) {
            return false;
        }
        if ($this->container['hyphenateCaps'] === null) {
            return false;
        }
        if ($this->container['pageNumbering'] === null) {
            return false;
        }
        if ($this->container['preserveDocumentStructure'] === null) {
            return false;
        }
        if ($this->container['skipExternalResources'] === null) {
            return false;
        }
        if ($this->container['useTextShaper'] === null) {
            return false;
        }
        if ($this->container['preserveFormFields'] === null) {
            return false;
        }
        if ($this->container['commentDisplayMode'] === null) {
            return false;
        }
        $allowedValues = $this->getCommentDisplayModeAllowableValues();
        if (!in_array($this->container['commentDisplayMode'], $allowedValues)) {
            return false;
        }
        if ($this->container['keepDateFieldOriginalValue'] === null) {
            return false;
        }
        if ($this->container['updateFields'] === null) {
            return false;
        }
        if ($this->container['updatePageLayout'] === null) {
            return false;
        }
        if ($this->container['embedTrueTypeFonts'] === null) {
            return false;
        }
        if ($this->container['fontInfoSubstitutionEnabled'] === null) {
            return false;
        }
        if ($this->container['fontConfigSubstitutionEnabled'] === null) {
            return false;
        }
        if ($this->container['fontNameSubstitutionEnabled'] === null) {
            return false;
        }
        if ($this->container['showFullCommenterName'] === null) {
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
     * @param string $defaultFont Default font for Words document. The following font will be used if a font is missing.
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
     * @param map[string,string] $fontSubstitutes Substitute specific fonts when converting Words document.
     *
     * @return $this
     */
    public function setFontSubstitutes($fontSubstitutes)
    {
        $this->container['fontSubstitutes'] = $fontSubstitutes;

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
     * Gets clearCustomDocumentProperties
     *
     * @return bool
     */
    public function getClearCustomDocumentProperties()
    {
        return $this->container['clearCustomDocumentProperties'];
    }

    /*
     * Sets clearCustomDocumentProperties
     *
     * @param bool $clearCustomDocumentProperties Clear custom document properties. Default is false.
     *
     * @return $this
     */
    public function setClearCustomDocumentProperties($clearCustomDocumentProperties)
    {
        $this->container['clearCustomDocumentProperties'] = $clearCustomDocumentProperties;

        return $this;
    }

    /*
     * Gets clearBuiltInDocumentProperties
     *
     * @return bool
     */
    public function getClearBuiltInDocumentProperties()
    {
        return $this->container['clearBuiltInDocumentProperties'];
    }

    /*
     * Sets clearBuiltInDocumentProperties
     *
     * @param bool $clearBuiltInDocumentProperties Clear built-in document properties. Default is false.
     *
     * @return $this
     */
    public function setClearBuiltInDocumentProperties($clearBuiltInDocumentProperties)
    {
        $this->container['clearBuiltInDocumentProperties'] = $clearBuiltInDocumentProperties;

        return $this;
    }

    /*
     * Gets depth
     *
     * @return int
     */
    public function getDepth()
    {
        return $this->container['depth'];
    }

    /*
     * Sets depth
     *
     * @param int $depth Option to control how many levels in depth to perform conversion. Default: 1.
     *
     * @return $this
     */
    public function setDepth($depth)
    {
        $this->container['depth'] = $depth;

        return $this;
    }

    /*
     * Gets convertOwned
     *
     * @return bool
     */
    public function getConvertOwned()
    {
        return $this->container['convertOwned'];
    }

    /*
     * Sets convertOwned
     *
     * @param bool $convertOwned Option to control whether the owned documents in the documents container must be converted
     *
     * @return $this
     */
    public function setConvertOwned($convertOwned)
    {
        $this->container['convertOwned'] = $convertOwned;

        return $this;
    }

    /*
     * Gets convertOwner
     *
     * @return bool
     */
    public function getConvertOwner()
    {
        return $this->container['convertOwner'];
    }

    /*
     * Sets convertOwner
     *
     * @param bool $convertOwner Option to control whether the documents container itself must be converted If this property is true the documents container will be the first converted document. Default is true.
     *
     * @return $this
     */
    public function setConvertOwner($convertOwner)
    {
        $this->container['convertOwner'] = $convertOwner;

        return $this;
    }

    /*
     * Gets autoHyphenation
     *
     * @return bool
     */
    public function getAutoHyphenation()
    {
        return $this->container['autoHyphenation'];
    }

    /*
     * Sets autoHyphenation
     *
     * @param bool $autoHyphenation Gets or sets value determining whether automatic hyphenation is turned on for the document. Default value for this property is false.
     *
     * @return $this
     */
    public function setAutoHyphenation($autoHyphenation)
    {
        $this->container['autoHyphenation'] = $autoHyphenation;

        return $this;
    }

    /*
     * Gets hyphenateCaps
     *
     * @return bool
     */
    public function getHyphenateCaps()
    {
        return $this->container['hyphenateCaps'];
    }

    /*
     * Sets hyphenateCaps
     *
     * @param bool $hyphenateCaps Gets or sets value determining whether words written in all capital letters are hyphenated. Default value for this property is true.
     *
     * @return $this
     */
    public function setHyphenateCaps($hyphenateCaps)
    {
        $this->container['hyphenateCaps'] = $hyphenateCaps;

        return $this;
    }

    /*
     * Gets pageNumbering
     *
     * @return bool
     */
    public function getPageNumbering()
    {
        return $this->container['pageNumbering'];
    }

    /*
     * Sets pageNumbering
     *
     * @param bool $pageNumbering Enable or disable generation of page numbering in converted document. Default: false
     *
     * @return $this
     */
    public function setPageNumbering($pageNumbering)
    {
        $this->container['pageNumbering'] = $pageNumbering;

        return $this;
    }

    /*
     * Gets preserveDocumentStructure
     *
     * @return bool
     */
    public function getPreserveDocumentStructure()
    {
        return $this->container['preserveDocumentStructure'];
    }

    /*
     * Sets preserveDocumentStructure
     *
     * @param bool $preserveDocumentStructure Determines whether the document structure should be preserved when converting to PDF (default is false).
     *
     * @return $this
     */
    public function setPreserveDocumentStructure($preserveDocumentStructure)
    {
        $this->container['preserveDocumentStructure'] = $preserveDocumentStructure;

        return $this;
    }

    /*
     * Gets skipExternalResources
     *
     * @return bool
     */
    public function getSkipExternalResources()
    {
        return $this->container['skipExternalResources'];
    }

    /*
     * Sets skipExternalResources
     *
     * @param bool $skipExternalResources If true all external resource will not be loading. Default is true.
     *
     * @return $this
     */
    public function setSkipExternalResources($skipExternalResources)
    {
        $this->container['skipExternalResources'] = $skipExternalResources;

        return $this;
    }

    /*
     * Gets useTextShaper
     *
     * @return bool
     */
    public function getUseTextShaper()
    {
        return $this->container['useTextShaper'];
    }

    /*
     * Sets useTextShaper
     *
     * @param bool $useTextShaper Specifies whether to use a text shaper for better kerning display. Default is false.
     *
     * @return $this
     */
    public function setUseTextShaper($useTextShaper)
    {
        $this->container['useTextShaper'] = $useTextShaper;

        return $this;
    }

    /*
     * Gets preserveFormFields
     *
     * @return bool
     */
    public function getPreserveFormFields()
    {
        return $this->container['preserveFormFields'];
    }

    /*
     * Sets preserveFormFields
     *
     * @param bool $preserveFormFields Specifies whether to preserve Microsoft Word form fields as form fields in PDF or convert them to text. Default is false.
     *
     * @return $this
     */
    public function setPreserveFormFields($preserveFormFields)
    {
        $this->container['preserveFormFields'] = $preserveFormFields;

        return $this;
    }

    /*
     * Gets commentDisplayMode
     *
     * @return string
     */
    public function getCommentDisplayMode()
    {
        return $this->container['commentDisplayMode'];
    }

    /*
     * Sets commentDisplayMode
     *
     * @param string $commentDisplayMode Specifies how comments should be displayed in the output document. Default is Balloon.
     *
     * @return $this
     */
    public function setCommentDisplayMode($commentDisplayMode)
    {
        $allowedValues = $this->getCommentDisplayModeAllowableValues();
        if ((!is_numeric($commentDisplayMode) && !in_array($commentDisplayMode, $allowedValues)) || (is_numeric($commentDisplayMode) && !in_array($allowedValues[$commentDisplayMode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'commentDisplayMode', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['commentDisplayMode'] = $commentDisplayMode;

        return $this;
    }

    /*
     * Gets keepDateFieldOriginalValue
     *
     * @return bool
     */
    public function getKeepDateFieldOriginalValue()
    {
        return $this->container['keepDateFieldOriginalValue'];
    }

    /*
     * Sets keepDateFieldOriginalValue
     *
     * @param bool $keepDateFieldOriginalValue Keep original value of date field. Default: false
     *
     * @return $this
     */
    public function setKeepDateFieldOriginalValue($keepDateFieldOriginalValue)
    {
        $this->container['keepDateFieldOriginalValue'] = $keepDateFieldOriginalValue;

        return $this;
    }

    /*
     * Gets updateFields
     *
     * @return bool
     */
    public function getUpdateFields()
    {
        return $this->container['updateFields'];
    }

    /*
     * Sets updateFields
     *
     * @param bool $updateFields Update fields after loading. Default: false
     *
     * @return $this
     */
    public function setUpdateFields($updateFields)
    {
        $this->container['updateFields'] = $updateFields;

        return $this;
    }

    /*
     * Gets updatePageLayout
     *
     * @return bool
     */
    public function getUpdatePageLayout()
    {
        return $this->container['updatePageLayout'];
    }

    /*
     * Sets updatePageLayout
     *
     * @param bool $updatePageLayout Update page layout after loading. Default: false
     *
     * @return $this
     */
    public function setUpdatePageLayout($updatePageLayout)
    {
        $this->container['updatePageLayout'] = $updatePageLayout;

        return $this;
    }

    /*
     * Gets embedTrueTypeFonts
     *
     * @return bool
     */
    public function getEmbedTrueTypeFonts()
    {
        return $this->container['embedTrueTypeFonts'];
    }

    /*
     * Sets embedTrueTypeFonts
     *
     * @param bool $embedTrueTypeFonts If EmbedTrueTypeFonts is true, GroupDocs.Conversion Cloud embed true type fonts in the output document. Default: true
     *
     * @return $this
     */
    public function setEmbedTrueTypeFonts($embedTrueTypeFonts)
    {
        $this->container['embedTrueTypeFonts'] = $embedTrueTypeFonts;

        return $this;
    }

    /*
     * Gets fontInfoSubstitutionEnabled
     *
     * @return bool
     */
    public function getFontInfoSubstitutionEnabled()
    {
        return $this->container['fontInfoSubstitutionEnabled'];
    }

    /*
     * Sets fontInfoSubstitutionEnabled
     *
     * @param bool $fontInfoSubstitutionEnabled Automatically substitutes missing fonts based on FontInfo in the document. Default: false.
     *
     * @return $this
     */
    public function setFontInfoSubstitutionEnabled($fontInfoSubstitutionEnabled)
    {
        $this->container['fontInfoSubstitutionEnabled'] = $fontInfoSubstitutionEnabled;

        return $this;
    }

    /*
     * Gets fontConfigSubstitutionEnabled
     *
     * @return bool
     */
    public function getFontConfigSubstitutionEnabled()
    {
        return $this->container['fontConfigSubstitutionEnabled'];
    }

    /*
     * Sets fontConfigSubstitutionEnabled
     *
     * @param bool $fontConfigSubstitutionEnabled Automatically substitutes missing fonts based on FontConfig in the system. Default: false.
     *
     * @return $this
     */
    public function setFontConfigSubstitutionEnabled($fontConfigSubstitutionEnabled)
    {
        $this->container['fontConfigSubstitutionEnabled'] = $fontConfigSubstitutionEnabled;

        return $this;
    }

    /*
     * Gets fontNameSubstitutionEnabled
     *
     * @return bool
     */
    public function getFontNameSubstitutionEnabled()
    {
        return $this->container['fontNameSubstitutionEnabled'];
    }

    /*
     * Sets fontNameSubstitutionEnabled
     *
     * @param bool $fontNameSubstitutionEnabled Automatically substitutes missing fonts based on the font name. Default: false.
     *
     * @return $this
     */
    public function setFontNameSubstitutionEnabled($fontNameSubstitutionEnabled)
    {
        $this->container['fontNameSubstitutionEnabled'] = $fontNameSubstitutionEnabled;

        return $this;
    }

    /*
     * Gets showFullCommenterName
     *
     * @return bool
     */
    public function getShowFullCommenterName()
    {
        return $this->container['showFullCommenterName'];
    }

    /*
     * Sets showFullCommenterName
     *
     * @param bool $showFullCommenterName Show full commenter name in comments. Default is false.
     *
     * @return $this
     */
    public function setShowFullCommenterName($showFullCommenterName)
    {
        $this->container['showFullCommenterName'] = $showFullCommenterName;

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


