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
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ColorUITwigExtension;

/**
 * Color UI Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI
 * @final
 */
final class ColorUITwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new ColorUITwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("adminBSBMaterialDesignColor", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBMaterialDesignColorFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the adminBSBMaterialDesignColorFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testMaterialDesignColorFunction() {

        $service = new ColorUITwigExtension();

        $arg0 = [];
        $res0 = "col-red";
        $this->assertEquals($res0, $service->adminBSBMaterialDesignColorFunction($arg0));

        $arg1 = ["out" => "hex"];
        $res1 = "#F44336";
        $this->assertEquals($res1, $service->adminBSBMaterialDesignColorFunction($arg1));

        $arg2 = ["name" => "black"];
        $res2 = "col-black";
        $this->assertEquals($res2, $service->adminBSBMaterialDesignColorFunction($arg2));

        $arg9 = ["name" => "black", "code" => "500", "out" => "hex"];
        $res9 = "#000000";
        $this->assertEquals($res9, $service->adminBSBMaterialDesignColorFunction($arg9));
    }

}
