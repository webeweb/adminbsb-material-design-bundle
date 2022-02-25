<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Twig\Extension\Widget;

use WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget\CardTwigExtensionTrait;

/**
 * Test card Twig extension trait.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Twig\Extension\Widget
 */
class TestCardTwigExtensionTrait {

    use CardTwigExtensionTrait {
        setCardTwigExtension as public;
    }
}
