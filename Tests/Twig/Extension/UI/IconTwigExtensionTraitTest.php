<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI;

use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Twig\Extension\UI\TestIconTwigExtensionTrait;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\IconTwigExtension;

/**
 * Icon Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI
 */
class IconTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the setIconTwigExtension() method.
     *
     * @return void
     */
    public function testSetIconTwigExtension() {

        // Set a Icon Twig extension mock.
        $iconTwigExtension = new IconTwigExtension($this->twigEnvironment);

        $obj = new TestIconTwigExtensionTrait();

        $obj->setIconTwigExtension($iconTwigExtension);
        $this->assertSame($iconTwigExtension, $obj->getIconTwigExtension());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new TestIconTwigExtensionTrait();

        $this->assertNull($obj->getIconTwigExtension());
    }
}
