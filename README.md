adminbsb-material-design-bundle
===============================

[![Build Status](https://travis-ci.org/webeweb/adminbsb-material-design-bundle.svg?branch=master)](https://travis-ci.org/webeweb/adminbsb-material-design-bundle) [![Coverage Status](https://coveralls.io/repos/github/webeweb/adminbsb-material-design-bundle/badge.svg?branch=master)](https://coveralls.io/github/webeweb/adminbsb-material-design-bundle?branch=master) [![Latest Stable Version](https://poser.pugx.org/webeweb/adminbsb-material-design-bundle/v/stable)](https://packagist.org/packages/webeweb/adminbsb-material-design-bundle) [![Latest Unstable Version](https://poser.pugx.org/webeweb/adminbsb-material-design-bundle/v/unstable)](https://packagist.org/packages/webeweb/adminbsb-material-design-bundle) [![License](https://poser.pugx.org/webeweb/adminbsb-material-design-bundle/license)](https://packagist.org/packages/webeweb/adminbsb-material-design-bundle) [![composer.lock](https://poser.pugx.org/webeweb/adminbsb-material-design-bundle/composerlock)](https://packagist.org/packages/webeweb/adminbsb-material-design-bundle) [![SensioLabsInsight](https://insight.sensiolabs.com/projects/76b7c506-f37c-48d6-baa7-1b44246ae97d/mini.png)](https://insight.sensiolabs.com/projects/76b7c506-f37c-48d6-baa7-1b44246ae97d)

Integrate AdminBSB Material Design theme with Symfony2

/!\ This package is currently in developpment /!\

---

## Installation

Open a command console, enter your project directory and execute the following
command to download the latest stable version of this package:

```bash

$ composer require webeweb/adminbsb-material-design-bundle "~1.0@dev"

```

This command requires you to have Composer installed globally, as explained
in the [installation chapter](https://getcomposer.org/doc/00-intro.md) of the
Composer documentation.

Then, enable the bundle by adding it to the list of registered bundles
in the `app/AppKernel.php` file of your project:

```php

	public function registerBundles() {
		$bundles = [
            // ...
            new WBW\Bundle\AdminBSBMaterialDesignBundle\AdminBSBMaterialDesignBundle(),
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

$ mkdir adminbsb-material-design-bundle
$ cd adminbsb-material-design-bundle
$ git clone git@github.com:webeweb/adminbsb-material-design-bundle.git .
$ composer install

```

Once all required libraries are installed then do:

```bash

$ vendor/bin/phpunit

```

---

## License

adminbsb-material-design-bundle is released under the LGPL License. See the bundled
[LICENSE](LICENSE) file for details.