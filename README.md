adminbsb-material-design-bundle
===============================

[![Build Status](https://img.shields.io/travis/webeweb/adminbsb-material-design-bundle/master.svg?style=flat-square)](https://travis-ci.org/webeweb/adminbsb-material-design-bundle)
[![Coverage Status](https://img.shields.io/coveralls/webeweb/adminbsb-material-design-bundle/master.svg?style=flat-square)](https://coveralls.io/github/webeweb/adminbsb-material-design-bundle?branch=master)
[![Scrutinizer Code Quality](https://img.shields.io/scrutinizer/quality/g/webeweb/adminbsb-material-design-bundle/master.svg?style=flat-square)](https://scrutinizer-ci.com/g/webeweb/adminbsb-material-design-bundle/?branch=master)
[![Latest Stable Version](https://img.shields.io/packagist/v/webeweb/adminbsb-material-design-bundle.svg?style=flat-square)](https://packagist.org/packages/webeweb/adminbsb-material-design-bundle)
[![Latest Unstable Version](https://img.shields.io/packagist/vpre/webeweb/adminbsb-material-design-bundle.svg?style=flat-square)](https://packagist.org/packages/webeweb/adminbsb-material-design-bundle)
[![License](https://img.shields.io/packagist/l/webeweb/adminbsb-material-design-bundle.svg?style=flat-square)](https://packagist.org/packages/webeweb/adminbsb-material-design-bundle)
[![composer.lock](https://img.shields.io/badge/.lock-uncommited-important.svg?style=flat-square)](https://packagist.org/packages/webeweb/adminbsb-material-design-bundle)

Integrate AdminBSB Material Design theme with Symfony 2 and more.

Based on the work of [AdminBSB - Free admin panel that is based on Bootstrap 3.x with Material Design](https://github.com/gurayyarar/AdminBSBMaterialDesign/)

> IMPORTANT NOTICE: This package is still under development. Any changes will be
> done without prior notice to consumers of this package. Of course this code
> will become stable at a certain point, but for now, use at your own risk.

<img src="https://raw.githubusercontent.com/webeweb/adminbsb-material-design-bundle/master/Resources/doc/screenshot_promo.png" alt="AdminBSB Material Design bundle" align="right" />

Includes:

- [Animate.css 3.5.0](https://daneden.github.io/animate.css/)
- [Autosize 3.0.17](http://www.jacklmoore.com/autosize/)
- [Bootstrap 3.3.6](https://getbootstrap.com/docs/3.3/)
- [Bootstrap Colorpicker 2.3.3](https://github.com/farbelous/bootstrap-colorpicker/) (Bootstrap plug-in)
- Bootstrap Material Datetimepicker (Bootstrap plug-in)
- [Bootstrap Notify 3.1.3](https://github.com/mouse0270/bootstrap-growl/) (Bootstrap plug-in)
- [Bootstrap Select 1.10.0](https://silviomoreto.github.io/bootstrap-select/) (Bootstrap plug-in)
- [Bootstrap Tagsinput](https://github.com/bootstrap-tagsinput/bootstrap-tagsinput/) (Bootstrap plug-in)
- [Chart.js 2.2.1](http://www.chartjs.org/)
- [Chosen 1.6.1](https://harvesthq.github.io/chosen/)
- [CKEditor 4.5.10](https://ckeditor.com/ckeditor-4/)
- [Dropzone](http://www.dropzonejs.com/)
- [editableTableWidget](http://mindmup.github.io/editable-table/)
- [Flot 0.8.3](http://www.flotcharts.org/)
- [Font Awesome 4.6.3](https://fontawesome.com/)
- [GMaps.js 0.4.24](http://hpneo.github.com/gmaps/)
- [Ion.RangeSlider 2.1.4](http://ionden.com/a/plugins/ion.rangeSlider/en.html)
- [jQuery 1.12.4](http://jquery.com/) (Bootstrap dependency)
- [jQuery Cookie 1.4.1](https://github.com/carhartl/jquery-cookie/) (jQuery plug-in)
- [jQuery countTo](https://github.com/mhuggins/jquery-countTo/) (jQuery plug-in)
- [jQuery dataTables 1.10.12](http://www.datatables.net/) (jQuery plug-in)
- [jQuery InputMask 3.3.1](https://github.com/RobinHerbots/Inputmask/) (jQuery plug-in)
- [jQuery Knob](https://github.com/aterrien/jQuery-Knob/) (jQuery plug-in)
- jQuery SlimScroll 1.3.0 (jQuery plug-in)
- [jQuery Sparlines 2.3.2](http://omnipotent.net/jquery.sparkline/) (jQuery plug-in)
- [jQuery Spinner 0.2.1](https://vsn4ik.github.io/jquery.spinner/) (jQuery plug-in)
- [jQuery Steps 1.1.0](http://www.jquery-steps.com/) (jQuery plug-in)
- [jQuery Validation 1.15.1](http://jqueryvalidation.org/) (jQuery plug-in)
- [jQuery lightGallery 1.2.21](http://sachinchoolur.github.io/lightGallery/) (jQuery plug-in)
- [jQuery MultiSelect 0.9.12](http://loudev.com/) (jQuery plug-in)
- [jQuery Nestable](http://dbushell.com/) (jQuery plug-in)
- [jVectorMap 1.2.2](http://jvectormap.com/)
- [Material Design Iconic Font](http://zavoloklom.github.io/material-design-iconic-font/)
- [Materialize 0.97.7](https://materializecss.com/)
- [Moment.js 2.14.1](http://momentjs.com/)
- [Moris.js 0.5.0](http://morrisjs.github.io/morris.js/)
- [noUiSlider 8.5.1](https://refreshless.com/nouislider/)
- [Raphaël 2.2.0](http://dmitrybaranovskiy.github.io/raphael/)
- [SweetAlert](https://sweetalert.js.org/)
- [TinyMCE 4.4.1](https://www.tinymce.com/)
- [waitMe 1.15](https://github.com/vadimsva/waitMe/)
- [Waves](http://fian.my.id/Waves/)

---

## Compatibility

[![PHP](https://img.shields.io/packagist/php-v/webeweb/adminbsb-material-design-bundle.svg?style=flat-square)](http://php.net)
[![Symfony](https://img.shields.io/badge/symfony-%5E2.7%7C%5E3.0%7C%5E4.0-brightness.svg?style=flat-square)](https://symfony.com)

---

## Installation

Open a command console, enter your project directory and execute the following
command to download the latest stable version of this package:

```bash
$ composer require webeweb/adminbsb-material-design-bundle "^1.0"
```

This command requires you to have Composer installed globally, as explained in
the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the
Composer documentation.

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php
    public function registerBundles() {
        $bundles = [
            // ...
            new WBW\Bundle\AdminBSBBundle\AdminBSBBundle(),
            new WBW\Bundle\BootstrapBundle\BootstrapBundle(),
            new WBW\Bundle\JQuery\DataTablesBundle\JQueryDataTablesBundle(),
        ];

        // ...

        return $bundles;
    }
```

Once the bundle is added then do:

```bash
$ php bin/console assets:install
```

---

## Testing

To test the package, is better to clone this repository on your computer.
Open a command console and execute the following commands to download the latest
stable version of this package:

```bash
$ git clone https://github.com/webeweb/adminbsb-material-design-bundle.git
$ cd adminbsb-material-design-bundle
$ composer install
```

Once all required libraries are installed then do:

```bash
$ vendor/bin/phpunit
```

---

## License

`adminbsb-material-design-bundle` is released under the LGPL License. See the bundled
[LICENSE](LICENSE) file for details.
