<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="PdfConvertOptions.php">
 *   Copyright (c) 2003-2022 Aspose Pty Ltd
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
 * PdfConvertOptions
 *
 * @description Options for to PDF conversion
 */
class PdfConvertOptions extends ConvertOptions 
{
    const DISCRIMINATOR = null;

    /*
     * The original name of the model.
     *
     * @var string
     */
    protected static $swaggerModelName = "PdfConvertOptions";

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
        'marginTop' => 'int',
        'marginBottom' => 'int',
        'marginLeft' => 'int',
        'marginRight' => 'int',
        'pdfFormat' => 'string',
        'removePdfaCompliance' => 'bool',
        'zoom' => 'int',
        'linearize' => 'bool',
        'linkDuplicateStreams' => 'bool',
        'removeUnusedObjects' => 'bool',
        'removeUnusedStreams' => 'bool',
        'compressImages' => 'bool',
        'imageQuality' => 'int',
        'unembedFonts' => 'bool',
        'grayscale' => 'bool',
        'centerWindow' => 'bool',
        'direction' => 'string',
        'displayDocTitle' => 'bool',
        'fitWindow' => 'bool',
        'hideMenuBar' => 'bool',
        'hideToolBar' => 'bool',
        'hideWindowUI' => 'bool',
        'nonFullScreenPageMode' => 'string',
        'pageLayout' => 'string',
        'pageMode' => 'string',
        'rotate' => 'string',
        'watermarkOptions' => '\GroupDocs\Conversion\Model\WatermarkOptions'
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
        'marginTop' => 'int32',
        'marginBottom' => 'int32',
        'marginLeft' => 'int32',
        'marginRight' => 'int32',
        'pdfFormat' => null,
        'removePdfaCompliance' => null,
        'zoom' => 'int32',
        'linearize' => null,
        'linkDuplicateStreams' => null,
        'removeUnusedObjects' => null,
        'removeUnusedStreams' => null,
        'compressImages' => null,
        'imageQuality' => 'int32',
        'unembedFonts' => null,
        'grayscale' => null,
        'centerWindow' => null,
        'direction' => null,
        'displayDocTitle' => null,
        'fitWindow' => null,
        'hideMenuBar' => null,
        'hideToolBar' => null,
        'hideWindowUI' => null,
        'nonFullScreenPageMode' => null,
        'pageLayout' => null,
        'pageMode' => null,
        'rotate' => null,
        'watermarkOptions' => null
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
        'marginTop' => 'MarginTop',
        'marginBottom' => 'MarginBottom',
        'marginLeft' => 'MarginLeft',
        'marginRight' => 'MarginRight',
        'pdfFormat' => 'PdfFormat',
        'removePdfaCompliance' => 'RemovePdfaCompliance',
        'zoom' => 'Zoom',
        'linearize' => 'Linearize',
        'linkDuplicateStreams' => 'LinkDuplicateStreams',
        'removeUnusedObjects' => 'RemoveUnusedObjects',
        'removeUnusedStreams' => 'RemoveUnusedStreams',
        'compressImages' => 'CompressImages',
        'imageQuality' => 'ImageQuality',
        'unembedFonts' => 'UnembedFonts',
        'grayscale' => 'Grayscale',
        'centerWindow' => 'CenterWindow',
        'direction' => 'Direction',
        'displayDocTitle' => 'DisplayDocTitle',
        'fitWindow' => 'FitWindow',
        'hideMenuBar' => 'HideMenuBar',
        'hideToolBar' => 'HideToolBar',
        'hideWindowUI' => 'HideWindowUI',
        'nonFullScreenPageMode' => 'NonFullScreenPageMode',
        'pageLayout' => 'PageLayout',
        'pageMode' => 'PageMode',
        'rotate' => 'Rotate',
        'watermarkOptions' => 'WatermarkOptions'
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
        'marginTop' => 'setMarginTop',
        'marginBottom' => 'setMarginBottom',
        'marginLeft' => 'setMarginLeft',
        'marginRight' => 'setMarginRight',
        'pdfFormat' => 'setPdfFormat',
        'removePdfaCompliance' => 'setRemovePdfaCompliance',
        'zoom' => 'setZoom',
        'linearize' => 'setLinearize',
        'linkDuplicateStreams' => 'setLinkDuplicateStreams',
        'removeUnusedObjects' => 'setRemoveUnusedObjects',
        'removeUnusedStreams' => 'setRemoveUnusedStreams',
        'compressImages' => 'setCompressImages',
        'imageQuality' => 'setImageQuality',
        'unembedFonts' => 'setUnembedFonts',
        'grayscale' => 'setGrayscale',
        'centerWindow' => 'setCenterWindow',
        'direction' => 'setDirection',
        'displayDocTitle' => 'setDisplayDocTitle',
        'fitWindow' => 'setFitWindow',
        'hideMenuBar' => 'setHideMenuBar',
        'hideToolBar' => 'setHideToolBar',
        'hideWindowUI' => 'setHideWindowUI',
        'nonFullScreenPageMode' => 'setNonFullScreenPageMode',
        'pageLayout' => 'setPageLayout',
        'pageMode' => 'setPageMode',
        'rotate' => 'setRotate',
        'watermarkOptions' => 'setWatermarkOptions'
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
        'marginTop' => 'getMarginTop',
        'marginBottom' => 'getMarginBottom',
        'marginLeft' => 'getMarginLeft',
        'marginRight' => 'getMarginRight',
        'pdfFormat' => 'getPdfFormat',
        'removePdfaCompliance' => 'getRemovePdfaCompliance',
        'zoom' => 'getZoom',
        'linearize' => 'getLinearize',
        'linkDuplicateStreams' => 'getLinkDuplicateStreams',
        'removeUnusedObjects' => 'getRemoveUnusedObjects',
        'removeUnusedStreams' => 'getRemoveUnusedStreams',
        'compressImages' => 'getCompressImages',
        'imageQuality' => 'getImageQuality',
        'unembedFonts' => 'getUnembedFonts',
        'grayscale' => 'getGrayscale',
        'centerWindow' => 'getCenterWindow',
        'direction' => 'getDirection',
        'displayDocTitle' => 'getDisplayDocTitle',
        'fitWindow' => 'getFitWindow',
        'hideMenuBar' => 'getHideMenuBar',
        'hideToolBar' => 'getHideToolBar',
        'hideWindowUI' => 'getHideWindowUI',
        'nonFullScreenPageMode' => 'getNonFullScreenPageMode',
        'pageLayout' => 'getPageLayout',
        'pageMode' => 'getPageMode',
        'rotate' => 'getRotate',
        'watermarkOptions' => 'getWatermarkOptions'
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
    const DIRECTION_L2_R = 'L2R';
    const DIRECTION_R2_L = 'R2L';
    const NON_FULL_SCREEN_PAGE_MODE_USE_NONE = 'UseNone';
    const NON_FULL_SCREEN_PAGE_MODE_USE_OUTLINES = 'UseOutlines';
    const NON_FULL_SCREEN_PAGE_MODE_USE_THUMBS = 'UseThumbs';
    const NON_FULL_SCREEN_PAGE_MODE_FULL_SCREEN = 'FullScreen';
    const NON_FULL_SCREEN_PAGE_MODE_USE_OC = 'UseOC';
    const NON_FULL_SCREEN_PAGE_MODE_USE_ATTACHMENTS = 'UseAttachments';
    const PAGE_LAYOUT__DEFAULT = 'Default';
    const PAGE_LAYOUT_SINGLE_PAGE = 'SinglePage';
    const PAGE_LAYOUT_ONE_COLUMN = 'OneColumn';
    const PAGE_LAYOUT_TWO_COLUMN_LEFT = 'TwoColumnLeft';
    const PAGE_LAYOUT_TWO_COLUMN_RIGHT = 'TwoColumnRight';
    const PAGE_LAYOUT_TWO_PAGE_LEFT = 'TwoPageLeft';
    const PAGE_LAYOUT_TWO_PAGE_RIGHT = 'TwoPageRight';
    const PAGE_MODE_USE_NONE = 'UseNone';
    const PAGE_MODE_USE_OUTLINES = 'UseOutlines';
    const PAGE_MODE_USE_THUMBS = 'UseThumbs';
    const PAGE_MODE_FULL_SCREEN = 'FullScreen';
    const PAGE_MODE_USE_OC = 'UseOC';
    const PAGE_MODE_USE_ATTACHMENTS = 'UseAttachments';
    const ROTATE_NONE = 'None';
    const ROTATE_ON90 = 'On90';
    const ROTATE_ON180 = 'On180';
    const ROTATE_ON270 = 'On270';
    

    
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
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getDirectionAllowableValues()
    {
        return [
            self::DIRECTION_L2_R,
            self::DIRECTION_R2_L,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getNonFullScreenPageModeAllowableValues()
    {
        return [
            self::NON_FULL_SCREEN_PAGE_MODE_USE_NONE,
            self::NON_FULL_SCREEN_PAGE_MODE_USE_OUTLINES,
            self::NON_FULL_SCREEN_PAGE_MODE_USE_THUMBS,
            self::NON_FULL_SCREEN_PAGE_MODE_FULL_SCREEN,
            self::NON_FULL_SCREEN_PAGE_MODE_USE_OC,
            self::NON_FULL_SCREEN_PAGE_MODE_USE_ATTACHMENTS,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPageLayoutAllowableValues()
    {
        return [
            self::PAGE_LAYOUT__DEFAULT,
            self::PAGE_LAYOUT_SINGLE_PAGE,
            self::PAGE_LAYOUT_ONE_COLUMN,
            self::PAGE_LAYOUT_TWO_COLUMN_LEFT,
            self::PAGE_LAYOUT_TWO_COLUMN_RIGHT,
            self::PAGE_LAYOUT_TWO_PAGE_LEFT,
            self::PAGE_LAYOUT_TWO_PAGE_RIGHT,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getPageModeAllowableValues()
    {
        return [
            self::PAGE_MODE_USE_NONE,
            self::PAGE_MODE_USE_OUTLINES,
            self::PAGE_MODE_USE_THUMBS,
            self::PAGE_MODE_FULL_SCREEN,
            self::PAGE_MODE_USE_OC,
            self::PAGE_MODE_USE_ATTACHMENTS,
        ];
    }
    
    /*
     * Gets allowable values of the enum
     *
     * @return string[]
     */
    public function getRotateAllowableValues()
    {
        return [
            self::ROTATE_NONE,
            self::ROTATE_ON90,
            self::ROTATE_ON180,
            self::ROTATE_ON270,
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
        $this->container['marginTop'] = isset($data['marginTop']) ? $data['marginTop'] : null;
        $this->container['marginBottom'] = isset($data['marginBottom']) ? $data['marginBottom'] : null;
        $this->container['marginLeft'] = isset($data['marginLeft']) ? $data['marginLeft'] : null;
        $this->container['marginRight'] = isset($data['marginRight']) ? $data['marginRight'] : null;
        $this->container['pdfFormat'] = isset($data['pdfFormat']) ? $data['pdfFormat'] : null;
        $this->container['removePdfaCompliance'] = isset($data['removePdfaCompliance']) ? $data['removePdfaCompliance'] : null;
        $this->container['zoom'] = isset($data['zoom']) ? $data['zoom'] : null;
        $this->container['linearize'] = isset($data['linearize']) ? $data['linearize'] : null;
        $this->container['linkDuplicateStreams'] = isset($data['linkDuplicateStreams']) ? $data['linkDuplicateStreams'] : null;
        $this->container['removeUnusedObjects'] = isset($data['removeUnusedObjects']) ? $data['removeUnusedObjects'] : null;
        $this->container['removeUnusedStreams'] = isset($data['removeUnusedStreams']) ? $data['removeUnusedStreams'] : null;
        $this->container['compressImages'] = isset($data['compressImages']) ? $data['compressImages'] : null;
        $this->container['imageQuality'] = isset($data['imageQuality']) ? $data['imageQuality'] : null;
        $this->container['unembedFonts'] = isset($data['unembedFonts']) ? $data['unembedFonts'] : null;
        $this->container['grayscale'] = isset($data['grayscale']) ? $data['grayscale'] : null;
        $this->container['centerWindow'] = isset($data['centerWindow']) ? $data['centerWindow'] : null;
        $this->container['direction'] = isset($data['direction']) ? $data['direction'] : null;
        $this->container['displayDocTitle'] = isset($data['displayDocTitle']) ? $data['displayDocTitle'] : null;
        $this->container['fitWindow'] = isset($data['fitWindow']) ? $data['fitWindow'] : null;
        $this->container['hideMenuBar'] = isset($data['hideMenuBar']) ? $data['hideMenuBar'] : null;
        $this->container['hideToolBar'] = isset($data['hideToolBar']) ? $data['hideToolBar'] : null;
        $this->container['hideWindowUI'] = isset($data['hideWindowUI']) ? $data['hideWindowUI'] : null;
        $this->container['nonFullScreenPageMode'] = isset($data['nonFullScreenPageMode']) ? $data['nonFullScreenPageMode'] : null;
        $this->container['pageLayout'] = isset($data['pageLayout']) ? $data['pageLayout'] : null;
        $this->container['pageMode'] = isset($data['pageMode']) ? $data['pageMode'] : null;
        $this->container['rotate'] = isset($data['rotate']) ? $data['rotate'] : null;
        $this->container['watermarkOptions'] = isset($data['watermarkOptions']) ? $data['watermarkOptions'] : null;
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
        if ($this->container['marginTop'] === null) {
            $invalidProperties[] = "'marginTop' can't be null";
        }
        if ($this->container['marginBottom'] === null) {
            $invalidProperties[] = "'marginBottom' can't be null";
        }
        if ($this->container['marginLeft'] === null) {
            $invalidProperties[] = "'marginLeft' can't be null";
        }
        if ($this->container['marginRight'] === null) {
            $invalidProperties[] = "'marginRight' can't be null";
        }
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
        if ($this->container['zoom'] === null) {
            $invalidProperties[] = "'zoom' can't be null";
        }
        if ($this->container['linearize'] === null) {
            $invalidProperties[] = "'linearize' can't be null";
        }
        if ($this->container['linkDuplicateStreams'] === null) {
            $invalidProperties[] = "'linkDuplicateStreams' can't be null";
        }
        if ($this->container['removeUnusedObjects'] === null) {
            $invalidProperties[] = "'removeUnusedObjects' can't be null";
        }
        if ($this->container['removeUnusedStreams'] === null) {
            $invalidProperties[] = "'removeUnusedStreams' can't be null";
        }
        if ($this->container['compressImages'] === null) {
            $invalidProperties[] = "'compressImages' can't be null";
        }
        if ($this->container['imageQuality'] === null) {
            $invalidProperties[] = "'imageQuality' can't be null";
        }
        if ($this->container['unembedFonts'] === null) {
            $invalidProperties[] = "'unembedFonts' can't be null";
        }
        if ($this->container['grayscale'] === null) {
            $invalidProperties[] = "'grayscale' can't be null";
        }
        if ($this->container['centerWindow'] === null) {
            $invalidProperties[] = "'centerWindow' can't be null";
        }
        if ($this->container['direction'] === null) {
            $invalidProperties[] = "'direction' can't be null";
        }
        $allowedValues = $this->getDirectionAllowableValues();
        if (!in_array($this->container['direction'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'direction', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['displayDocTitle'] === null) {
            $invalidProperties[] = "'displayDocTitle' can't be null";
        }
        if ($this->container['fitWindow'] === null) {
            $invalidProperties[] = "'fitWindow' can't be null";
        }
        if ($this->container['hideMenuBar'] === null) {
            $invalidProperties[] = "'hideMenuBar' can't be null";
        }
        if ($this->container['hideToolBar'] === null) {
            $invalidProperties[] = "'hideToolBar' can't be null";
        }
        if ($this->container['hideWindowUI'] === null) {
            $invalidProperties[] = "'hideWindowUI' can't be null";
        }
        if ($this->container['nonFullScreenPageMode'] === null) {
            $invalidProperties[] = "'nonFullScreenPageMode' can't be null";
        }
        $allowedValues = $this->getNonFullScreenPageModeAllowableValues();
        if (!in_array($this->container['nonFullScreenPageMode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'nonFullScreenPageMode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['pageLayout'] === null) {
            $invalidProperties[] = "'pageLayout' can't be null";
        }
        $allowedValues = $this->getPageLayoutAllowableValues();
        if (!in_array($this->container['pageLayout'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pageLayout', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['pageMode'] === null) {
            $invalidProperties[] = "'pageMode' can't be null";
        }
        $allowedValues = $this->getPageModeAllowableValues();
        if (!in_array($this->container['pageMode'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'pageMode', must be one of '%s'",
                implode("', '", $allowedValues)
            );
        }

        if ($this->container['rotate'] === null) {
            $invalidProperties[] = "'rotate' can't be null";
        }
        $allowedValues = $this->getRotateAllowableValues();
        if (!in_array($this->container['rotate'], $allowedValues)) {
            $invalidProperties[] = sprintf(
                "invalid value for 'rotate', must be one of '%s'",
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
        if ($this->container['marginTop'] === null) {
            return false;
        }
        if ($this->container['marginBottom'] === null) {
            return false;
        }
        if ($this->container['marginLeft'] === null) {
            return false;
        }
        if ($this->container['marginRight'] === null) {
            return false;
        }
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
        if ($this->container['zoom'] === null) {
            return false;
        }
        if ($this->container['linearize'] === null) {
            return false;
        }
        if ($this->container['linkDuplicateStreams'] === null) {
            return false;
        }
        if ($this->container['removeUnusedObjects'] === null) {
            return false;
        }
        if ($this->container['removeUnusedStreams'] === null) {
            return false;
        }
        if ($this->container['compressImages'] === null) {
            return false;
        }
        if ($this->container['imageQuality'] === null) {
            return false;
        }
        if ($this->container['unembedFonts'] === null) {
            return false;
        }
        if ($this->container['grayscale'] === null) {
            return false;
        }
        if ($this->container['centerWindow'] === null) {
            return false;
        }
        if ($this->container['direction'] === null) {
            return false;
        }
        $allowedValues = $this->getDirectionAllowableValues();
        if (!in_array($this->container['direction'], $allowedValues)) {
            return false;
        }
        if ($this->container['displayDocTitle'] === null) {
            return false;
        }
        if ($this->container['fitWindow'] === null) {
            return false;
        }
        if ($this->container['hideMenuBar'] === null) {
            return false;
        }
        if ($this->container['hideToolBar'] === null) {
            return false;
        }
        if ($this->container['hideWindowUI'] === null) {
            return false;
        }
        if ($this->container['nonFullScreenPageMode'] === null) {
            return false;
        }
        $allowedValues = $this->getNonFullScreenPageModeAllowableValues();
        if (!in_array($this->container['nonFullScreenPageMode'], $allowedValues)) {
            return false;
        }
        if ($this->container['pageLayout'] === null) {
            return false;
        }
        $allowedValues = $this->getPageLayoutAllowableValues();
        if (!in_array($this->container['pageLayout'], $allowedValues)) {
            return false;
        }
        if ($this->container['pageMode'] === null) {
            return false;
        }
        $allowedValues = $this->getPageModeAllowableValues();
        if (!in_array($this->container['pageMode'], $allowedValues)) {
            return false;
        }
        if ($this->container['rotate'] === null) {
            return false;
        }
        $allowedValues = $this->getRotateAllowableValues();
        if (!in_array($this->container['rotate'], $allowedValues)) {
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
     * @param int $width Desired page width in pixels after conversion
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
     * @param int $height Desired page height in pixels after conversion
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
     * Gets marginTop
     *
     * @return int
     */
    public function getMarginTop()
    {
        return $this->container['marginTop'];
    }

    /*
     * Sets marginTop
     *
     * @param int $marginTop Desired page top margin in pixels after conversion
     *
     * @return $this
     */
    public function setMarginTop($marginTop)
    {
        $this->container['marginTop'] = $marginTop;

        return $this;
    }

    /*
     * Gets marginBottom
     *
     * @return int
     */
    public function getMarginBottom()
    {
        return $this->container['marginBottom'];
    }

    /*
     * Sets marginBottom
     *
     * @param int $marginBottom Desired page bottom margin in pixels after conversion
     *
     * @return $this
     */
    public function setMarginBottom($marginBottom)
    {
        $this->container['marginBottom'] = $marginBottom;

        return $this;
    }

    /*
     * Gets marginLeft
     *
     * @return int
     */
    public function getMarginLeft()
    {
        return $this->container['marginLeft'];
    }

    /*
     * Sets marginLeft
     *
     * @param int $marginLeft Desired page left margin in pixels after conversion
     *
     * @return $this
     */
    public function setMarginLeft($marginLeft)
    {
        $this->container['marginLeft'] = $marginLeft;

        return $this;
    }

    /*
     * Gets marginRight
     *
     * @return int
     */
    public function getMarginRight()
    {
        return $this->container['marginRight'];
    }

    /*
     * Sets marginRight
     *
     * @param int $marginRight Desired page right margin in pixels after conversion
     *
     * @return $this
     */
    public function setMarginRight($marginRight)
    {
        $this->container['marginRight'] = $marginRight;

        return $this;
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
     * @param int $zoom Specifies the zoom level in percentage. Default is 100.
     *
     * @return $this
     */
    public function setZoom($zoom)
    {
        $this->container['zoom'] = $zoom;

        return $this;
    }

    /*
     * Gets linearize
     *
     * @return bool
     */
    public function getLinearize()
    {
        return $this->container['linearize'];
    }

    /*
     * Sets linearize
     *
     * @param bool $linearize Linearize PDF Document for the Web
     *
     * @return $this
     */
    public function setLinearize($linearize)
    {
        $this->container['linearize'] = $linearize;

        return $this;
    }

    /*
     * Gets linkDuplicateStreams
     *
     * @return bool
     */
    public function getLinkDuplicateStreams()
    {
        return $this->container['linkDuplicateStreams'];
    }

    /*
     * Sets linkDuplicateStreams
     *
     * @param bool $linkDuplicateStreams Link duplicate streams
     *
     * @return $this
     */
    public function setLinkDuplicateStreams($linkDuplicateStreams)
    {
        $this->container['linkDuplicateStreams'] = $linkDuplicateStreams;

        return $this;
    }

    /*
     * Gets removeUnusedObjects
     *
     * @return bool
     */
    public function getRemoveUnusedObjects()
    {
        return $this->container['removeUnusedObjects'];
    }

    /*
     * Sets removeUnusedObjects
     *
     * @param bool $removeUnusedObjects Remove unused objects
     *
     * @return $this
     */
    public function setRemoveUnusedObjects($removeUnusedObjects)
    {
        $this->container['removeUnusedObjects'] = $removeUnusedObjects;

        return $this;
    }

    /*
     * Gets removeUnusedStreams
     *
     * @return bool
     */
    public function getRemoveUnusedStreams()
    {
        return $this->container['removeUnusedStreams'];
    }

    /*
     * Sets removeUnusedStreams
     *
     * @param bool $removeUnusedStreams Remove unused streams
     *
     * @return $this
     */
    public function setRemoveUnusedStreams($removeUnusedStreams)
    {
        $this->container['removeUnusedStreams'] = $removeUnusedStreams;

        return $this;
    }

    /*
     * Gets compressImages
     *
     * @return bool
     */
    public function getCompressImages()
    {
        return $this->container['compressImages'];
    }

    /*
     * Sets compressImages
     *
     * @param bool $compressImages If CompressImages set to true, all images in the document are recompressed. The compression is defined by the ImageQuality property.
     *
     * @return $this
     */
    public function setCompressImages($compressImages)
    {
        $this->container['compressImages'] = $compressImages;

        return $this;
    }

    /*
     * Gets imageQuality
     *
     * @return int
     */
    public function getImageQuality()
    {
        return $this->container['imageQuality'];
    }

    /*
     * Sets imageQuality
     *
     * @param int $imageQuality Value in percent where 100% is unchanged quality and image size. To decrease the image size, use ImageQuality less than 100
     *
     * @return $this
     */
    public function setImageQuality($imageQuality)
    {
        $this->container['imageQuality'] = $imageQuality;

        return $this;
    }

    /*
     * Gets unembedFonts
     *
     * @return bool
     */
    public function getUnembedFonts()
    {
        return $this->container['unembedFonts'];
    }

    /*
     * Sets unembedFonts
     *
     * @param bool $unembedFonts Make fonts not embedded if set to true
     *
     * @return $this
     */
    public function setUnembedFonts($unembedFonts)
    {
        $this->container['unembedFonts'] = $unembedFonts;

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
     * @param bool $grayscale Convert a PDF from RGB colorspace to Grayscale
     *
     * @return $this
     */
    public function setGrayscale($grayscale)
    {
        $this->container['grayscale'] = $grayscale;

        return $this;
    }

    /*
     * Gets centerWindow
     *
     * @return bool
     */
    public function getCenterWindow()
    {
        return $this->container['centerWindow'];
    }

    /*
     * Sets centerWindow
     *
     * @param bool $centerWindow Specify whether position of the document's window will be centered on the screen. Default: false.
     *
     * @return $this
     */
    public function setCenterWindow($centerWindow)
    {
        $this->container['centerWindow'] = $centerWindow;

        return $this;
    }

    /*
     * Gets direction
     *
     * @return string
     */
    public function getDirection()
    {
        return $this->container['direction'];
    }

    /*
     * Sets direction
     *
     * @param string $direction Sets reading order of text: L2R (left to right) or R2L (right to left). Default: L2R.
     *
     * @return $this
     */
    public function setDirection($direction)
    {
        $allowedValues = $this->getDirectionAllowableValues();
        if ((!is_numeric($direction) && !in_array($direction, $allowedValues)) || (is_numeric($direction) && !in_array($allowedValues[$direction], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'direction', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['direction'] = $direction;

        return $this;
    }

    /*
     * Gets displayDocTitle
     *
     * @return bool
     */
    public function getDisplayDocTitle()
    {
        return $this->container['displayDocTitle'];
    }

    /*
     * Sets displayDocTitle
     *
     * @param bool $displayDocTitle Specifying whether document's window title bar should display document title. Default: false.
     *
     * @return $this
     */
    public function setDisplayDocTitle($displayDocTitle)
    {
        $this->container['displayDocTitle'] = $displayDocTitle;

        return $this;
    }

    /*
     * Gets fitWindow
     *
     * @return bool
     */
    public function getFitWindow()
    {
        return $this->container['fitWindow'];
    }

    /*
     * Sets fitWindow
     *
     * @param bool $fitWindow Specify whether document window must be resized to fit the first displayed page. Default: false.
     *
     * @return $this
     */
    public function setFitWindow($fitWindow)
    {
        $this->container['fitWindow'] = $fitWindow;

        return $this;
    }

    /*
     * Gets hideMenuBar
     *
     * @return bool
     */
    public function getHideMenuBar()
    {
        return $this->container['hideMenuBar'];
    }

    /*
     * Sets hideMenuBar
     *
     * @param bool $hideMenuBar Specify whether menu bar should be hidden when document is active. Default: false.
     *
     * @return $this
     */
    public function setHideMenuBar($hideMenuBar)
    {
        $this->container['hideMenuBar'] = $hideMenuBar;

        return $this;
    }

    /*
     * Gets hideToolBar
     *
     * @return bool
     */
    public function getHideToolBar()
    {
        return $this->container['hideToolBar'];
    }

    /*
     * Sets hideToolBar
     *
     * @param bool $hideToolBar Specifying whether toolbar should be hidden when document is active. Default: false.
     *
     * @return $this
     */
    public function setHideToolBar($hideToolBar)
    {
        $this->container['hideToolBar'] = $hideToolBar;

        return $this;
    }

    /*
     * Gets hideWindowUI
     *
     * @return bool
     */
    public function getHideWindowUI()
    {
        return $this->container['hideWindowUI'];
    }

    /*
     * Sets hideWindowUI
     *
     * @param bool $hideWindowUI Specify whether user interface elements should be hidden when document is active. Default: false.
     *
     * @return $this
     */
    public function setHideWindowUI($hideWindowUI)
    {
        $this->container['hideWindowUI'] = $hideWindowUI;

        return $this;
    }

    /*
     * Gets nonFullScreenPageMode
     *
     * @return string
     */
    public function getNonFullScreenPageMode()
    {
        return $this->container['nonFullScreenPageMode'];
    }

    /*
     * Sets nonFullScreenPageMode
     *
     * @param string $nonFullScreenPageMode Sets page mode, specifying how to display the document on exiting full-screen mode.
     *
     * @return $this
     */
    public function setNonFullScreenPageMode($nonFullScreenPageMode)
    {
        $allowedValues = $this->getNonFullScreenPageModeAllowableValues();
        if ((!is_numeric($nonFullScreenPageMode) && !in_array($nonFullScreenPageMode, $allowedValues)) || (is_numeric($nonFullScreenPageMode) && !in_array($allowedValues[$nonFullScreenPageMode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'nonFullScreenPageMode', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['nonFullScreenPageMode'] = $nonFullScreenPageMode;

        return $this;
    }

    /*
     * Gets pageLayout
     *
     * @return string
     */
    public function getPageLayout()
    {
        return $this->container['pageLayout'];
    }

    /*
     * Sets pageLayout
     *
     * @param string $pageLayout Sets page layout which shall be used when the document is opened.
     *
     * @return $this
     */
    public function setPageLayout($pageLayout)
    {
        $allowedValues = $this->getPageLayoutAllowableValues();
        if ((!is_numeric($pageLayout) && !in_array($pageLayout, $allowedValues)) || (is_numeric($pageLayout) && !in_array($allowedValues[$pageLayout], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'pageLayout', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['pageLayout'] = $pageLayout;

        return $this;
    }

    /*
     * Gets pageMode
     *
     * @return string
     */
    public function getPageMode()
    {
        return $this->container['pageMode'];
    }

    /*
     * Sets pageMode
     *
     * @param string $pageMode Sets page mode, specifying how document should be displayed when opened.
     *
     * @return $this
     */
    public function setPageMode($pageMode)
    {
        $allowedValues = $this->getPageModeAllowableValues();
        if ((!is_numeric($pageMode) && !in_array($pageMode, $allowedValues)) || (is_numeric($pageMode) && !in_array($allowedValues[$pageMode], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'pageMode', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['pageMode'] = $pageMode;

        return $this;
    }

    /*
     * Gets rotate
     *
     * @return string
     */
    public function getRotate()
    {
        return $this->container['rotate'];
    }

    /*
     * Sets rotate
     *
     * @param string $rotate Rotate page
     *
     * @return $this
     */
    public function setRotate($rotate)
    {
        $allowedValues = $this->getRotateAllowableValues();
        if ((!is_numeric($rotate) && !in_array($rotate, $allowedValues)) || (is_numeric($rotate) && !in_array($allowedValues[$rotate], $allowedValues))) {
            throw new \InvalidArgumentException(sprintf("Invalid value for 'rotate', must be one of '%s'", implode("', '", $allowedValues)));
        }
			
        $this->container['rotate'] = $rotate;

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


