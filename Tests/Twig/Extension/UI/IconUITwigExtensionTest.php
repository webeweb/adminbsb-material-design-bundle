<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\IconUITwigExtension;

/**
 * Icon UI Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI
 * @final
 */
final class IconUITwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new IconUITwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(2, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("adminBSBBasicIcon", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBBasicIconFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("adminBSBMaterialDesignIcon", $res[1]->getName());
        $this->assertEquals([$obj, "adminBSBMaterialDesignIconFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the adminBSBBasicIconFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBBasicIconFunction() {

        $service = new IconUITwigExtension();

        $arg0 = [];
        $res0 = '<i class="material-icons">home</i>';
        $this->assertEquals($res0, $service->adminBSBBasicIconFunction($arg0));

        $arg1 = ["name" => "person"];
        $res1 = '<i class="material-icons">person</i>';
        $this->assertEquals($res1, $service->adminBSBBasicIconFunction($arg1));

        $arg2 = ["style" => "margin: 4px;"];
        $res2 = '<i class="material-icons" style="margin: 4px;">home</i>';
        $this->assertEquals($res2, $service->adminBSBBasicIconFunction($arg2));

        $arg9 = ["name" => "person", "style" => "margin: 4px;"];
        $res9 = '<i class="material-icons" style="margin: 4px;">person</i>';
        $this->assertEquals($res9, $service->adminBSBBasicIconFunction($arg9));
    }

    /**
     * Tests the adminBSBMaterialDesignIconFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBMaterialDesignIconFunction() {

        $service = new IconUITwigExtension();

        $arg0 = [];
        $res0 = '<i class="material-icons col-red">home</i>';
        $this->assertEquals($res0, $service->adminBSBMaterialDesignIconFunction($arg0));

        $arg1 = ["name" => "person"];
        $res1 = '<i class="material-icons col-red">person</i>';
        $this->assertEquals($res1, $service->adminBSBMaterialDesignIconFunction($arg1));

        $arg2 = ["style" => "margin: 4px;"];
        $res2 = '<i class="material-icons col-red" style="margin: 4px;">home</i>';
        $this->assertEquals($res2, $service->adminBSBMaterialDesignIconFunction($arg2));

        $arg3 = ["color" => "black"];
        $res3 = '<i class="material-icons col-black">home</i>';
        $this->assertEquals($res3, $service->adminBSBMaterialDesignIconFunction($arg3));

        $arg9 = ["name" => "person", "color" => "black", "style" => "margin: 4px;"];
        $res9 = '<i class="material-icons col-black" style="margin: 4px;">person</i>';
        $this->assertEquals($res9, $service->adminBSBMaterialDesignIconFunction($arg9));
    }

}
