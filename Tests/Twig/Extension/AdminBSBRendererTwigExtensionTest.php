<?php

/**
 * This file is part of the adminbsb-material-design-bundle ackage.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSB\Tests\Twig\Extension;

use WBW\Bundle\AdminBSBBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AdminBSBRendererTwigExtension;

/**
 * AdminBSB renderer Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension
 * @final
 */
final class AdminBSBRendererTwigExtensionTest extends AbstractFrameworkTestCase {

    /**
     * Tests the renderIcon() method.
     *
     * @return void
     */
    public function testRenderIcon() {

        $res0 = "";
        $this->assertEquals($res0, AdminBSBRendererTwigExtension::renderIcon("::"));

        $res1 = '<i class="zmdi zmdi-home"></i>';
        $this->assertEquals($res1, AdminBSBRendererTwigExtension::renderIcon("zmdi:home"));

        $res2 = '<i class="material-icons">home</i>';
        $this->assertEquals($res2, AdminBSBRendererTwigExtension::renderIcon("md:home"));

        $res3 = '<i class="fa fa-home"></i>';
        $this->assertEquals($res3, AdminBSBRendererTwigExtension::renderIcon("fa:home"));

        $res4 = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';
        $this->assertEquals($res4, AdminBSBRendererTwigExtension::renderIcon("g:home"));

        $res5 = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';
        $this->assertEquals($res5, AdminBSBRendererTwigExtension::renderIcon("b:home"));

        $res9 = '<i class="material-icons">home</i>';
        $this->assertEquals($res9, AdminBSBRendererTwigExtension::renderIcon("home"));
    }

}
