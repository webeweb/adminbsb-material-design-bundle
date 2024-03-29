<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Twig\Extension\Form;

use WBW\Bundle\AdminBSBBundle\Twig\Extension\Form\CheckboxTwigExtensionTrait;

/**
 * Test checkbox Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Twig\Extension\Form
 */
class TestCheckboxTwigExtensionTrait {

    use CheckboxTwigExtensionTrait {
        setCheckboxTwigExtension as public;
    }
}
