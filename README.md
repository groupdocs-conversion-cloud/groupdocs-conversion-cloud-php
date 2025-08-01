# GroupDocs.Conversion Cloud SDK for PHP

This repository contains GroupDocs.Conversion Cloud SDK for PHP source code. This SDK has been developed to help you get started with using our document conversion REST API, allowing to seamlessly convert your documents to any format you need. With this single API, you can convert back and forth between over 50 types of documents and images, including all Microsoft Office and OpenDocument file formats, PDF documents, HTML, CAD, raster images and many more.

## Installation

### Composer

The package is available at [Packagist](https://packagist.org/) and it can be installed via [Composer](http://getcomposer.org/) by executing following command:

```shell
composer require groupdocscloud/groupdocs-conversion-cloud
```

Or you can install SDK via [Composer](http://getcomposer.org/) directly from this repository, add the following to `composer.json`:

```javascript
{
  "repositories": [
    {
      "type": "git",
      "url": "https://github.com/groupdocs-conversion-cloud/groupdocs-conversion-cloud-php.git"
    }
  ],
  "require": {
    "groupdocscloud/groupdocs-conversion-cloud": "*"
  }
}
```

Then run `composer install`

### Manual Installation

Clone or download this repository, then run `composer install` in the root directory to install dependencies and include `autoload.php` into your code file:

```php
require_once('/path/to/groupdocs-conversion-cloud-php/vendor/autoload.php');
```


### Create an account
Creating an account is very simple. Go to Dashboard to create a free account.
We’re using Single Sign On across our websites, therefore, if you already have an account with our services, you can use it to also access the [Dashboard](https://dashboard.groupdocs.cloud).

### Create an API client app
Before you can make any requests to GroupDocs Cloud API you need to get a Client Id and a Client Secret. This will be used to invoke GroupDocs Cloud API. You can get it by creating a new [Application](https://dashboard.groupdocs.cloud/applications).

## Convert document

```php
<?php

require_once(__DIR__ . '/vendor/autoload.php');

//TODO: Get your Client Id and a Client Secret at https://dashboard.groupdocs.cloud (free registration is required).
$configuration = new GroupDocs\Conversion\Configuration();
$configuration->setAppSid("XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX");
$configuration->setAppKey("XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX");

$apiInstance = new GroupDocs\Conversion\ConvertApi($configuration);

try {
    // Prepare request
    $filePath = dirname(realpath(__DIR__)) . '/myFile.docx';
    $request = new Requests\ConvertDocumentDirectRequest("pdf", $filePath);

    // Convert
    $result = $apiInstance->convertDocumentDirect($request);

    // Done
    echo "Document converted: " . $result->getSize();
    echo "\n";
} catch (Exception $e) {
    echo  "Something went wrong: ",  $e->getMessage(), "\n";
    PHP_EOL;
}

?>
```

## Convert document using cloud storage

```php
<?php

require_once(__DIR__ . '/vendor/autoload.php');

//TODO: Get your Client Id and a Client Secret at https://dashboard.groupdocs.cloud (free registration is required).
$configuration = new GroupDocs\Conversion\Configuration();
$configuration->setAppSid("XXXXXXXX-XXXX-XXXX-XXXX-XXXXXXXXXXXX");
$configuration->setAppKey("XXXXXXXXXXXXXXXXXXXXXXXXXXXXXXXX");

$fileApi = new GroupDocs\Conversion\FileApi($configuration);
$convertApi = new GroupDocs\Conversion\ConvertApi($configuration);

try {
    // Upload file to cloud storage
    $putCreateRequest = new \GroupDocs\Conversion\Model\Requests\uploadFileRequest('myFile.docx', './myFile.docx');
    $putCreateResponse = $fileApi->uploadFile($putCreateRequest);

    // Convert
    $settings = new \GroupDocs\Conversion\Model\ConvertSettings();
    $settings->setFilePath('myFile.docx');
    $settings->setFormat("pdf");
    $settings->setOutputPath("converted");
    $result = $convertApi->convertDocument(new \GroupDocs\Conversion\Model\Requests\ConvertDocumentRequest($settings));
    echo "Document converted: " . $result[0]->getUrl();
    echo "\n"; 
    
    // Download converted document
    $request = new GroupDocs\Conversion\Model\Requests\DownloadFileRequest("converted/myFile.pdf", null, null);
    $response = $fileApi->downloadFile($request);  
    echo "Expected response type is File: ", strlen($response);

} catch (Exception $e) {
    echo  "Something went wrong: ",  $e->getMessage(), "\n";
    PHP_EOL;
}

?>
```

## Licensing

GroupDocs.Conversion Cloud SDK for PHP is licensed under [MIT License](LICENSE).

## Resources

+[**Website**](https://www.groupdocs.cloud)
+[**Product Home**](https://products.groupdocs.cloud/conversion)
+[**Documentation**](https://docs.groupdocs.cloud/conversion)
+[**Free Support Forum**](https://forum.groupdocs.cloud/c/conversion)
+[**Blog**](https://blog.groupdocs.cloud/category/conversion)

## Contact Us

Your feedback is very important to us. Please feel free to contact us using our [Support Forums](https://forum.groupdocs.cloud/c/conversion).
