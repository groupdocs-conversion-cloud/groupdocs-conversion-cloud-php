![](https://img.shields.io/badge/api-v2.0-lightgrey) ![Packagist Version](https://img.shields.io/packagist/v/groupdocscloud/groupdocs-conversion-cloud) ![Packagist PHP Version Support](https://img.shields.io/packagist/php-v/groupdocscloud/groupdocs-conversion-cloud) [![GitHub license](https://img.shields.io/github/license/groupdocs-conversion-cloud/groupdocs-conversion-cloud-php)](https://github.com/groupdocs-conversion-cloud/groupdocs-conversion-cloud-php/blob/master/LICENSE) 

# PHP SDK to Convert Documents in the Cloud

[GroupDocs.Conversion Cloud SDK for PHP](https://products.groupdocs.cloud/conversion/php) wraps GroupDocs.Conversion RESTful APIs so you may integrate **Document Conversion** features in your own apps with zero initial cost.

GroupDocs.Conversion Cloud API allows the developers to convert between 50+ file formats including Word documents, Excel spreadsheets, PowerPoint presentations, PDF, OpenDocument files, images & more.

## Document Conversion REST API

- Convert the whole document to the desired target format.
- Convert specific document page(s) or a page range.
- Auto-detect source document format without requiring the file extension.
- Load source document with extended options, such as specify password for password-protected documents.
- Load specific part of the document.
- Show or hide document comments.
- Obtain all supported conversion formats list.
- Replace missing fonts with any other font.
- Add text or image watermarks to any page.
- Specify resolution and quality for resultant images.
- Extract metadata & basic information about the source document.
- Integrated storage API.

Check out the [Developer's Guide](https://docs.groupdocs.cloud/conversion/developer-guide/) to know more about GroupDocs.Conversion REST API.

## Microsoft File Formats

**Microsoft Word:** DOC, DOCM, DOCX, DOT, DOTM, DOTX\
**Microsoft Excel:** XLS, XLSX, XLSB, XLSM\
**Microsoft PowerPoint:** PPT, PPTX, PPS, PPSX\
**Microsoft Project:** MPP, MPT\
**Microsoft Outlook:** MSG, EML\
**Microsoft Visio:** VSD, VDX, VSS, VSX, VST, VTX, VSDX, VDW, VSSX, VSTX, VSDM, VSTM, VSSM\
**Microsoft OneNote:** ONE

## Other Formats

**Page Layout Formats:** PDF, XPS\
**OpenDocument:** ODT, OTT, ODS, ODP, OTP, OTS, ODG\
**CAD:** DXF, DWG, IFC, STL\
**Images:** DCM, BMP, GIF, JPG, PNG, TIFF, WebP, DjVu, SVG, DNG, ICO\
**Web:** HTML, MHT, MHTML\
**Emails:** EML, EMLX\
**eBooks:** EPUB, MOBI\
**Metafile:** WMF, EMF\
**LaTeX:** TEX\
**Others:** TXT, RTF, CSV, TSV, XML

## Get Started with GroupDocs.Conversion Cloud SDK for PHP

First create an account at [GroupDocs for Cloud](https://dashboard.groupdocs.cloud/) and get your application information. Next, follow the installation steps as given below.

### Install via Composer

The package is available at [Packagist](https://packagist.org/) and it can be installed via [Composer](http://getcomposer.org/) by executing following command.

```shell
composer require groupdocscloud/groupdocs-conversion-cloud
```

You can also install the package directly from this repository. Add the following to `composer.json`, then run `composer install`.

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

### Install Manually

Clone or download this repository, then run `composer install` in the root directory to install dependencies and include `autoload.php` into your code file.

```php
require_once('/path/to/groupdocs-conversion-cloud-php/vendor/autoload.php');
```

### Tests

Set your application information in [json.config](tests/GroupDocs/Conversion/config.json) and execute the following command to run the unit tests.

```shell
php composer.phar install ./vendor/bin/phpunit
```

## Convert DOCX to PDF in the Cloud

```php
// Get application information from https://dashboard.groupdocs.cloud
use GroupDocs\Conversion\Model;
use GroupDocs\Conversion\Model\Requests;

$AppSid = "";
$AppKey = "";

$configuration = new GroupDocs\Conversion\Configuration();
$configuration->setAppSid($AppSid);
$configuration->setAppKey($AppKey);

$apiInstance = new GroupDocs\Conversion\ConvertApi($configuration);

// Prepare convert settings
$settings = new Model\ConvertSettings();
$settings->setFilePath("WordProcessing/four-pages.docx");
$settings->setFormat("pdf");
$settings->setOutputPath("converted");

// Convert
$result = $apiInstance->convertDocument(new Requests\ConvertDocumentRequest($settings));
```

## GroupDocs.Conversion Cloud SDKs in Popular Languages

| .NET | Java | PHP | Python | Ruby | Node.js | Android |
|---|---|---|---|---|---|---|
| [GitHub](https://github.com/groupdocs-conversion-cloud/groupdocs-conversion-cloud-dotnet) | [GitHub](https://github.com/groupdocs-conversion-cloud/groupdocs-conversion-cloud-java) | [GitHub](https://github.com/groupdocs-conversion-cloud/groupdocs-conversion-cloud-php) | [GitHub](https://github.com/groupdocs-conversion-cloud/groupdocs-conversion-cloud-python) | [GitHub](https://github.com/groupdocs-conversion-cloud/groupdocs-conversion-cloud-ruby)  | [GitHub](https://github.com/groupdocs-conversion-cloud/groupdocs-conversion-cloud-node) | [GitHub](https://github.com/groupdocs-conversion-cloud/groupdocs-conversion-cloud-android) |
| [NuGet](https://www.nuget.org/packages/GroupDocs.Conversion-Cloud/) | [Maven](https://repository.groupdocs.cloud/webapp/#/artifacts/browse/tree/General/repo/com/groupdocs/groupdocs-conversion-cloud) | [Composer](https://packagist.org/packages/groupdocscloud/groupdocs-conversion-cloud) | [PIP](https://pypi.org/project/groupdocs-conversion-cloud/) | [GEM](https://rubygems.org/gems/groupdocs_conversion_cloud)  | [NPM](https://www.npmjs.com/package/groupdocs-conversion-cloud) |  | 

[Home](https://www.groupdocs.cloud/) | [Product Page](https://products.groupdocs.cloud/conversion/php) | [Documentation](https://docs.groupdocs.cloud/conversion/) | [Live Demo](https://products.groupdocs.app/conversion/total) | [API Reference](https://apireference.groupdocs.cloud/conversion/) | [Code Samples](https://github.com/groupdocs-conversion-cloud/groupdocs-conversion-cloud-php-samples) | [Blog](https://blog.groupdocs.cloud/category/conversion/) | [Free Support](https://forum.groupdocs.cloud/c/conversion) | [Free Trial](https://dashboard.groupdocs.cloud)
