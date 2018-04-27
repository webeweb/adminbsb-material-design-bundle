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
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Form\CheckboxFormTwigExtension;

/**
 * Checkbox form Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Form
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
        $this->assertEquals("absbmdBasicCheckbox", $res[0]->getName());
        $this->assertEquals([$obj, "absbmdBasicCheckboxFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("absbmdMaterialDesignCheckbox", $res[1]->getName());
        $this->assertEquals([$obj, "absbmdMaterialDesignCheckboxFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the absbmdBasicCheckboxFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAbsbmdBasicCheckbox() {

        $obj = new CheckboxFormTwigExtension();

        $arg0 = [];
        $res0 = '<input type="checkbox"><label for=""></label>';
        $this->assertEquals($res0, $obj->absbmdBasicCheckboxFunction($arg0));
    }

    /**
     * Tests the absbmdMaterialDesignCheckboxFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAbsbmdMaterialDesignCheckboxCheckbox() {

        $obj = new CheckboxFormTwigExtension();

        $arg0 = [];
        $res0 = '<input class="chk-col-red" type="checkbox"><label for=""></label>';
        $this->assertEquals($res0, $obj->absbmdMaterialDesignCheckboxFunction($arg0));

        $arg1 = ["content" => "content"];
        $res1 = '<input class="chk-col-red" type="checkbox"><label for="">content</label>';
        $this->assertEquals($res1, $obj->absbmdMaterialDesignCheckboxFunction($arg1));

        $arg2 = ["name" => "name"];
        $res2 = '<input class="chk-col-red" name="name" type="checkbox"><label for=""></label>';
        $this->assertEquals($res2, $obj->absbmdMaterialDesignCheckboxFunction($arg2));

        $arg3 = ["id" => "id"];
        $res3 = '<input class="chk-col-red" type="checkbox" id="id"><label for="id"></label>';
        $this->assertEquals($res3, $obj->absbmdMaterialDesignCheckboxFunction($arg3));

        $arg4 = ["checked" => true];
        $res4 = '<input class="chk-col-red" type="checkbox" checked="checked"><label for=""></label>';
        $this->assertEquals($res4, $obj->absbmdMaterialDesignCheckboxFunction($arg4));

        $arg5 = ["disabled" => true];
        $res5 = '<input class="chk-col-red" type="checkbox" disabled="disabled"><label for=""></label>';
        $this->assertEquals($res5, $obj->absbmdMaterialDesignCheckboxFunction($arg5));

        $arg6 = ["filledIn" => true];
        $res6 = '<input class="filled-in chk-col-red" type="checkbox"><label for=""></label>';
        $this->assertEquals($res6, $obj->absbmdMaterialDesignCheckboxFunction($arg6));

        $arg7 = ["class" => "class"];
        $res7 = '<input class="class chk-col-red" type="checkbox"><label for=""></label>';
        $this->assertEquals($res7, $obj->absbmdMaterialDesignCheckboxFunction($arg7));

        $arg8 = ["color" => "black"];
        $res8 = '<input class="chk-col-black" type="checkbox"><label for=""></label>';
        $this->assertEquals($res8, $obj->absbmdMaterialDesignCheckboxFunction($arg8));

        $arg9 = ["content" => "content", "name" => "name", "id" => "id", "checked" => true, "disabled" => true, "filledIn" => true, "class" => "class", "color" => "black"];
        $res9 = '<input class="filled-in class chk-col-black" name="name" type="checkbox" id="id" checked="checked" disabled="disabled"><label for="id">content</label>';
        $this->assertEquals($res9, $obj->absbmdMaterialDesignCheckboxFunction($arg9));
    }

}
