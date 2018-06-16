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

use PHPUnit_Framework_TestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\FactoryAdminBSBTwigExtension;

/**
 * Factory AdminBSB Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\BootstrapBundle\Tests\Twig\Extension
 * @final
 */
final class FactoryAdminBSBTwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the adminBSBIcon() method.
     *
     * @return void
     */
    public function testAdminBSBIcon() {

        $res0 = "";
        $this->assertEquals($res0, FactoryAdminBSBTwigExtension::adminBSBIcon("::"));

        $res1 = '<i class="zmdi zmdi-home"></i>';
        $this->assertEquals($res1, FactoryAdminBSBTwigExtension::adminBSBIcon("zmdi:home"));

        $res2 = '<i class="material-icons">home</i>';
        $this->assertEquals($res2, FactoryAdminBSBTwigExtension::adminBSBIcon("md:home"));

        $res3 = '<i class="fa fa-home"></i>';
        $this->assertEquals($res3, FactoryAdminBSBTwigExtension::adminBSBIcon("fa:home"));

        $res4 = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';
        $this->assertEquals($res4, FactoryAdminBSBTwigExtension::adminBSBIcon("g:home"));

        $res5 = '<span class="glyphicon glyphicon-home" aria-hidden="true"></span>';
        $this->assertEquals($res5, FactoryAdminBSBTwigExtension::adminBSBIcon("b:home"));

        $res9 = '<i class="material-icons">home</i>';
        $this->assertEquals($res9, FactoryAdminBSBTwigExtension::adminBSBIcon("home"));
    }

}
