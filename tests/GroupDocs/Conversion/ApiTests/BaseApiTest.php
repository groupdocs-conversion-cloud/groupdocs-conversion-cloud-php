<?php
/*
* --------------------------------------------------------------------------------------------------------------------
* <copyright company="Aspose" file="BaseApiTest.php">
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
namespace GroupDocs\Conversion\ApiTests;

use PHPUnit\Framework\TestCase;
use GroupDocs\Conversion\Configuration;
use GroupDocs\Conversion\ConvertApi;
use GroupDocs\Conversion\InfoApi;
use GroupDocs\Conversion\StorageApi;
use GroupDocs\Conversion\FileApi;
use GroupDocs\Conversion\FolderApi;

abstract class BaseApiTest extends \PHPUnit\Framework\TestCase
{
    protected static $conversionConfig;

    protected static $convertApi;    
    protected static $infoApi;
    protected static $storageApi;
    protected static $fileApi;
    protected static $folderApi;
    
    protected static $testFilesUploaded = false;

    /**
     * Cleanup after each test case
     */
    public function tearDown(): void
    {
        self::_deleteFolder("conversion");        
    }

    private static function _deleteFolder($folder)
    {
        $request = new \GroupDocs\Conversion\Model\Requests\deleteFolderRequest($folder, null, true);

        self::$folderApi->DeleteFolder($request);
    }

    /**
     * Setup before each test suite
     */
    public static function setUpBeforeClass(): void
    {
        self::_initTests();
    }

    private static function _initTests()
    {
        $config = self::getConfig();

        //TODO: Get your AppSID and AppKey at https://dashboard.groupdocs.cloud 
        //      (free registration is required).

        $appSid = $config["AppSID"];
        $appKey = $config["AppKey"];
        $apiBaseUrl = $config["ApiBaseUrl"];

        self::$conversionConfig = new Configuration();
        self::$conversionConfig->setAppSid($appSid);
        self::$conversionConfig->setAppKey($appKey);
        self::$conversionConfig->setApiBaseUrl($apiBaseUrl);

        self::$convertApi = new ConvertApi(self::$conversionConfig);
        self::$infoApi = new InfoApi(self::$conversionConfig);
        self::$storageApi = new StorageApi(self::$conversionConfig);
        self::$fileApi = new FileApi(self::$conversionConfig);
        self::$folderApi = new FolderApi(self::$conversionConfig);

        self::_uploadTestFiles();
    }

    protected static function getConfig()
    {
        $contents = file_get_contents(realpath(__DIR__ . "/../config.json"));
        $config = \GuzzleHttp\json_decode($contents, true);

        return $config;
    }

    private static function _uploadTestFiles()
    {
        if (self::$testFilesUploaded) {
            return;
        }

        $folder = self::_getTestDataPath();
        $files = Internal\TestFiles::getTestFilesList();
        foreach ($files as $file) {
            $path = $file->folder . $file->fileName;
            $isExistRequest = new \GroupDocs\Conversion\Model\Requests\objectExistsRequest($path);
            $isExistResponse = self::$storageApi->objectExists($isExistRequest);
            if (!$isExistResponse->getExists()) {
                $uploadRequest = new \GroupDocs\Conversion\Model\Requests\uploadFileRequest($path, $folder . DIRECTORY_SEPARATOR . $path);
                $response = self::$fileApi->uploadFile($uploadRequest);
            }
        }

        self::$testFilesUploaded = true;
    }

    private static function _getTestDataPath()
    {
        return realpath(__DIR__ . '/../Resources/TestData/');
    }

    /**
     * Serializes object as JSON
     */
    protected static function serializeObject($obj)
    {
        $optionsFile = tmpfile();
        $optionsFilePath = stream_get_meta_data($optionsFile)['uri'];
        fwrite($optionsFile, $obj->__toString());

        return [$optionsFile, $optionsFilePath];
    }

    /**
     * Returns path to test file
     */
    protected static function getTestFilePath($file)
    {
        return realpath(self::_getTestDataPath() . DIRECTORY_SEPARATOR . $file->folder . $file->fileName);
    }
}
