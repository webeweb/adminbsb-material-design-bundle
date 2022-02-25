<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Twig\Extension\UI;

use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ButtonTwigExtensionTrait;

/**
 * Test button Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Twig\Extension\UI
 */
class TestButtonTwigExtensionTrait {

    use ButtonTwigExtensionTrait {
        setButtonTwigExtension as public;
    }
}
