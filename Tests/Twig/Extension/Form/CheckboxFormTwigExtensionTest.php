<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\Form;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Form\CheckboxFormTwigExtension;

/**
 * Checkbox form Twig extension test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\Form
 * @final
 */
final class CheckboxFormTwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new CheckboxFormTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(2, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("basicCheckbox", $res[0]->getName());
        $this->assertEquals([$obj, "basicCheckboxFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("materialDesignCheckbox", $res[1]->getName());
        $this->assertEquals([$obj, "materialDesignCheckboxFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the basicCheckboxFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testBasicCheckbox() {

        $obj = new CheckboxFormTwigExtension();

        $arg0 = [];
        $res0 = '<input type="checkbox"><label for="">&nbsp;</label>';
        $this->assertEquals($res0, $obj->basicCheckboxFunction($arg0));
    }

    /**
     * Tests the materialDesignCheckboxFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testMaterialDesignCheckboxCheckbox() {

        $obj = new CheckboxFormTwigExtension();

        $arg0 = [];
        $res0 = '<input class="chk-col-red" type="checkbox"><label for="">&nbsp;</label>';
        $this->assertEquals($res0, $obj->materialDesignCheckboxFunction($arg0));

        $arg1 = ["content" => "content"];
        $res1 = '<input class="chk-col-red" type="checkbox"><label for="">content</label>';
        $this->assertEquals($res1, $obj->materialDesignCheckboxFunction($arg1));

        $arg2 = ["name" => "name"];
        $res2 = '<input class="chk-col-red" name="name" type="checkbox"><label for="">&nbsp;</label>';
        $this->assertEquals($res2, $obj->materialDesignCheckboxFunction($arg2));

        $arg3 = ["id" => "id"];
        $res3 = '<input class="chk-col-red" type="checkbox" id="id"><label for="id">&nbsp;</label>';
        $this->assertEquals($res3, $obj->materialDesignCheckboxFunction($arg3));

        $arg4 = ["checked" => true];
        $res4 = '<input class="chk-col-red" type="checkbox" checked="checked"><label for="">&nbsp;</label>';
        $this->assertEquals($res4, $obj->materialDesignCheckboxFunction($arg4));

        $arg5 = ["disabled" => true];
        $res5 = '<input class="chk-col-red" type="checkbox" disabled="disabled"><label for="">&nbsp;</label>';
        $this->assertEquals($res5, $obj->materialDesignCheckboxFunction($arg5));

        $arg6 = ["filledIn" => true];
        $res6 = '<input class="filled-in chk-col-red" type="checkbox"><label for="">&nbsp;</label>';
        $this->assertEquals($res6, $obj->materialDesignCheckboxFunction($arg6));

        $arg7 = ["class" => "class"];
        $res7 = '<input class="class chk-col-red" type="checkbox"><label for="">&nbsp;</label>';
        $this->assertEquals($res7, $obj->materialDesignCheckboxFunction($arg7));

        $arg8 = ["color" => "black"];
        $res8 = '<input class="chk-col-black" type="checkbox"><label for="">&nbsp;</label>';
        $this->assertEquals($res8, $obj->materialDesignCheckboxFunction($arg8));

        $arg9 = ["content" => "content", "name" => "name", "id" => "id", "checked" => true, "disabled" => true, "filledIn" => true, "class" => "class", "color" => "black"];
        $res9 = '<input class="filled-in class chk-col-black" name="name" type="checkbox" id="id" checked="checked" disabled="disabled"><label for="id">content</label>';
        $this->assertEquals($res9, $obj->materialDesignCheckboxFunction($arg9));
    }

}
