<?php
/*
 * --------------------------------------------------------------------------------------------------------------------
 * <copyright company="Aspose Pty Ltd" file="PdfFormatType.php">
 *   Copyright (c) 2003-2019 Aspose Pty Ltd
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
 * PdfFormatType
 *
 * @description Defines an pdf format types.
 */
class PdfFormatType
{
    /*
     * Possible values of this enum
     */
    const _DEFAULT = 'Default';
    const PDF_A_1_A = 'PdfA_1A';
    const PDF_A_1_B = 'PdfA_1B';
    const PDF_A_2_A = 'PdfA_2A';
    const PDF_A_3_A = 'PdfA_3A';
    const PDF_A_2_B = 'PdfA_2B';
    const PDF_A_2_U = 'PdfA_2U';
    const PDF_A_3_B = 'PdfA_3B';
    const PDF_A_3_U = 'PdfA_3U';
    const V1_3 = 'v1_3';
    const V1_4 = 'v1_4';
    const V1_5 = 'v1_5';
    const V1_6 = 'v1_6';
    const V1_7 = 'v1_7';
    const PDF_X_1_A = 'PdfX_1A';
    const PDF_X3 = 'PdfX3';
    
    /*
     * Gets allowable values of the enum
     * @return string[]
     */
    public static function getAllowableEnumValues()
    {
        return [
            self::_DEFAULT,
            self::PDF_A_1_A,
            self::PDF_A_1_B,
            self::PDF_A_2_A,
            self::PDF_A_3_A,
            self::PDF_A_2_B,
            self::PDF_A_2_U,
            self::PDF_A_3_B,
            self::PDF_A_3_U,
            self::V1_3,
            self::V1_4,
            self::V1_5,
            self::V1_6,
            self::V1_7,
            self::PDF_X_1_A,
            self::PDF_X3,
        ];
    }
}


