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

use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Tests\Cases\AbstractAdminBSBFrameworkTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Form\CheckboxTwigExtension;

/**
 * Checkbox Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Form
 * @final
 */
final class CheckboxTwigExtensionTest extends AbstractAdminBSBFrameworkTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new CheckboxTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(2, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("adminBSBCheckboxBasic", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBCheckboxBasicFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("adminBSBCheckboxMaterialDesign", $res[1]->getName());
        $this->assertEquals([$obj, "adminBSBCheckboxMaterialDesignFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the adminBSBCheckboxBasicFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBCheckboxBasicFunction() {

        $obj = new CheckboxTwigExtension();

        $arg0 = [];
        $res0 = '<input type="checkbox"><label></label>';
        $this->assertEquals($res0, $obj->adminBSBCheckboxBasicFunction($arg0));
    }

    /**
     * Tests the adminBSBMaterialDesignFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBCheckboxMaterialDesignFunction() {

        $obj = new CheckboxTwigExtension();

        $arg0 = [];
        $res0 = '<input class="chk-col-red" type="checkbox"><label></label>';
        $this->assertEquals($res0, $obj->adminBSBCheckboxMaterialDesignFunction($arg0));

        $arg1 = ["content" => "content"];
        $res1 = '<input class="chk-col-red" type="checkbox"><label>content</label>';
        $this->assertEquals($res1, $obj->adminBSBCheckboxMaterialDesignFunction($arg1));

        $arg2 = ["name" => "name"];
        $res2 = '<input class="chk-col-red" name="name" type="checkbox"><label></label>';
        $this->assertEquals($res2, $obj->adminBSBCheckboxMaterialDesignFunction($arg2));

        $arg3 = ["id" => "id"];
        $res3 = '<input class="chk-col-red" type="checkbox" id="id"><label for="id"></label>';
        $this->assertEquals($res3, $obj->adminBSBCheckboxMaterialDesignFunction($arg3));

        $arg4 = ["checked" => true];
        $res4 = '<input class="chk-col-red" type="checkbox" checked="checked"><label></label>';
        $this->assertEquals($res4, $obj->adminBSBCheckboxMaterialDesignFunction($arg4));

        $arg5 = ["disabled" => true];
        $res5 = '<input class="chk-col-red" type="checkbox" disabled="disabled"><label></label>';
        $this->assertEquals($res5, $obj->adminBSBCheckboxMaterialDesignFunction($arg5));

        $arg6 = ["filledIn" => true];
        $res6 = '<input class="filled-in chk-col-red" type="checkbox"><label></label>';
        $this->assertEquals($res6, $obj->adminBSBCheckboxMaterialDesignFunction($arg6));

        $arg7 = ["class" => "class"];
        $res7 = '<input class="class chk-col-red" type="checkbox"><label></label>';
        $this->assertEquals($res7, $obj->adminBSBCheckboxMaterialDesignFunction($arg7));

        $arg8 = ["color" => "black"];
        $res8 = '<input class="chk-col-black" type="checkbox"><label></label>';
        $this->assertEquals($res8, $obj->adminBSBCheckboxMaterialDesignFunction($arg8));

        $arg9 = ["content" => "content", "name" => "name", "id" => "id", "checked" => true, "disabled" => true, "filledIn" => true, "class" => "class", "color" => "black"];
        $res9 = '<input class="filled-in class chk-col-black" name="name" type="checkbox" id="id" checked="checked" disabled="disabled"><label for="id">content</label>';
        $this->assertEquals($res9, $obj->adminBSBCheckboxMaterialDesignFunction($arg9));
    }

}
