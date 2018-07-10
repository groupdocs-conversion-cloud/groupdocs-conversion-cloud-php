<?php
/**
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose Pty Ltd" file="ImageConvertApiTest.php">
*   Copyright (c) 2003-2018 Aspose Pty Ltd
* </copyright>
* <summary>
*  Permission is hereby granted, free of charge, to any person obtaining a copy
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
namespace GroupDocs\Conversion\ApiTests;

use GroupDocs\Conversion\Model;
use GroupDocs\Conversion\Model\Requests;

require_once "BaseApiTest.php";
require_once "Internal\TestFiles.php";

class ImageConvertApiTest extends BaseApiTest
{
    /**
     * Test ConvertToImage
     */
    public function testConvertToImage()
    {
        $testFile = Internal\TestFiles::getFileOnePageDocx();
        

        $payload = new Model\ImageConversionRequest();
        
        $payload->setSourceFile(self::ToConversionFileInfo($testFile));
        
        $options = new Model\ImageSaveOptionsDto();
        $payload->setOptions($options);
        
        $request = new Requests\ConvertToImageRequest($payload);
        
        $response = self::$conversionApi->convertToImage($request);
        
        $this->assertNotEmpty($response);

        $href = $response->getHref();

        $this->assertTrue(self::endsWith($href, ".jpg"));
    }

    /*
    * Test ConvertToImageStream
    */
    public function testConvertToImageStream()
    {
        $testFile = Internal\TestFiles::getFileOnePageDocx();
        

        $payload = new Model\ImageConversionRequest();
        
        $payload->setSourceFile(self::ToConversionFileInfo($testFile));
        
        $options = new Model\ImageSaveOptionsDto();
        $payload->setOptions($options);
        
        $request = new Requests\ConvertToImageStreamRequest($payload);
        
        $response = self::$conversionApi->convertToImageStream($request);
        
        $this->assertNotEmpty($response);
    }
}
