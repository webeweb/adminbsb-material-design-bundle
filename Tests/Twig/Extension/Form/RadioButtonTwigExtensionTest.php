<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Form;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Form\RadioButtonTwigExtension;

/**
 * Radio button Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Form
 * @final
 */
final class RadioButtonTwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new RadioButtonTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(2, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("adminBSBRadioButtonBasic", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBRadioButtonBasicFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("adminBSBRadioButtonMaterialDesign", $res[1]->getName());
        $this->assertEquals([$obj, "adminBSBRadioButtonMaterialDesignFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the adminBSBRadioButtonBasicFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBRadioButtonBasicFunction() {

        $obj = new RadioButtonTwigExtension();

        $arg0 = [];
        $res0 = '<input type="radio"><label for=""></label>';
        $this->assertEquals($res0, $obj->adminBSBRadioButtonBasicFunction($arg0));
    }

    /**
     * Tests the adminBSBRadioButtonMaterialDesignFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBRadioButtonMaterialDesignFunction() {

        $obj = new RadioButtonTwigExtension();

        $arg0 = [];
        $res0 = '<input class="radio-col-red" type="radio"><label for=""></label>';
        $this->assertEquals($res0, $obj->adminBSBRadioButtonMaterialDesignFunction($arg0));

        $arg1 = ["content" => "content"];
        $res1 = '<input class="radio-col-red" type="radio"><label for="">content</label>';
        $this->assertEquals($res1, $obj->adminBSBRadioButtonMaterialDesignFunction($arg1));

        $arg2 = ["name" => "name"];
        $res2 = '<input class="radio-col-red" name="name" type="radio"><label for=""></label>';
        $this->assertEquals($res2, $obj->adminBSBRadioButtonMaterialDesignFunction($arg2));

        $arg3 = ["id" => "id"];
        $res3 = '<input class="radio-col-red" type="radio" id="id"><label for="id"></label>';
        $this->assertEquals($res3, $obj->adminBSBRadioButtonMaterialDesignFunction($arg3));

        $arg4 = ["checked" => true];
        $res4 = '<input class="radio-col-red" type="radio" checked="checked"><label for=""></label>';
        $this->assertEquals($res4, $obj->adminBSBRadioButtonMaterialDesignFunction($arg4));

        $arg5 = ["disabled" => true];
        $res5 = '<input class="radio-col-red" type="radio" disabled="disabled"><label for=""></label>';
        $this->assertEquals($res5, $obj->adminBSBRadioButtonMaterialDesignFunction($arg5));

        $arg6 = ["withGap" => true];
        $res6 = '<input class="with-gap radio-col-red" type="radio"><label for=""></label>';
        $this->assertEquals($res6, $obj->adminBSBRadioButtonMaterialDesignFunction($arg6));

        $arg7 = ["class" => "class"];
        $res7 = '<input class="class radio-col-red" type="radio"><label for=""></label>';
        $this->assertEquals($res7, $obj->adminBSBRadioButtonMaterialDesignFunction($arg7));

        $arg8 = ["color" => "black"];
        $res8 = '<input class="radio-col-black" type="radio"><label for=""></label>';
        $this->assertEquals($res8, $obj->adminBSBRadioButtonMaterialDesignFunction($arg8));

        $arg9 = ["content" => "content", "name" => "name", "id" => "id", "checked" => true, "disabled" => true, "withGap" => true, "class" => "class", "color" => "black"];
        $res9 = '<input class="with-gap class radio-col-black" name="name" type="radio" id="id" checked="checked" disabled="disabled"><label for="id">content</label>';
        $this->assertEquals($res9, $obj->adminBSBRadioButtonMaterialDesignFunction($arg9));
    }

}
