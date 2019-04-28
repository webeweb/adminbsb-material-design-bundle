<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Form;

use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Form\CheckboxTwigExtension;

/**
 * Checkbox Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Form
 */
class CheckboxTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the adminBSBCheckboxBasicFunction() method.
     *
     * @return void
     */
    public function testAdminBSBCheckboxBasicFunction() {

        $obj = new CheckboxTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<input type="checkbox"><label></label>';
        $this->assertEquals($res, $obj->adminBSBCheckboxBasicFunction($arg));
    }

    /**
     * Tests the adminBSBCheckboxMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBCheckboxMaterialDesignFunction() {

        $obj = new CheckboxTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "name" => "name", "id" => "id", "checked" => true, "disabled" => true, "filledIn" => true, "class" => "class", "color" => "pink"];
        $res = '<input class="filled-in class chk-col-pink" name="name" type="checkbox" id="id" checked="checked" disabled="disabled"><label for="id">content</label>';
        $this->assertEquals($res, $obj->adminBSBCheckboxMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBCheckboxMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBCheckboxMaterialDesignFunctionWithChecked() {

        $obj = new CheckboxTwigExtension($this->twigEnvironment);

        $arg = ["checked" => true];
        $res = '<input class="chk-col-red" type="checkbox" checked="checked"><label></label>';
        $this->assertEquals($res, $obj->adminBSBCheckboxMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBCheckboxMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBCheckboxMaterialDesignFunctionWithClass() {

        $obj = new CheckboxTwigExtension($this->twigEnvironment);

        $arg = ["class" => "class"];
        $res = '<input class="class chk-col-red" type="checkbox"><label></label>';
        $this->assertEquals($res, $obj->adminBSBCheckboxMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBCheckboxMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBCheckboxMaterialDesignFunctionWithColor() {

        $obj = new CheckboxTwigExtension($this->twigEnvironment);

        $arg = ["color" => "pink"];
        $res = '<input class="chk-col-pink" type="checkbox"><label></label>';
        $this->assertEquals($res, $obj->adminBSBCheckboxMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBCheckboxMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBCheckboxMaterialDesignFunctionWithContent() {

        $obj = new CheckboxTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<input class="chk-col-red" type="checkbox"><label>content</label>';
        $this->assertEquals($res, $obj->adminBSBCheckboxMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBCheckboxMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBCheckboxMaterialDesignFunctionWithDisabled() {

        $obj = new CheckboxTwigExtension($this->twigEnvironment);

        $arg = ["disabled" => true];
        $res = '<input class="chk-col-red" type="checkbox" disabled="disabled"><label></label>';
        $this->assertEquals($res, $obj->adminBSBCheckboxMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBCheckboxMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBCheckboxMaterialDesignFunctionWithFilledIn() {

        $obj = new CheckboxTwigExtension($this->twigEnvironment);

        $arg = ["filledIn" => true];
        $res = '<input class="filled-in chk-col-red" type="checkbox"><label></label>';
        $this->assertEquals($res, $obj->adminBSBCheckboxMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBCheckboxMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBCheckboxMaterialDesignFunctionWithId() {

        $obj = new CheckboxTwigExtension($this->twigEnvironment);

        $arg = ["id" => "id"];
        $res = '<input class="chk-col-red" type="checkbox" id="id"><label for="id"></label>';
        $this->assertEquals($res, $obj->adminBSBCheckboxMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBCheckboxMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBCheckboxMaterialDesignFunctionWithName() {

        $obj = new CheckboxTwigExtension($this->twigEnvironment);

        $arg = ["name" => "name"];
        $res = '<input class="chk-col-red" name="name" type="checkbox"><label></label>';
        $this->assertEquals($res, $obj->adminBSBCheckboxMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBCheckboxMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBCheckboxMaterialDesignFunctionWithoutArguments() {

        $obj = new CheckboxTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<input class="chk-col-red" type="checkbox"><label></label>';
        $this->assertEquals($res, $obj->adminBSBCheckboxMaterialDesignFunction($arg));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new CheckboxTwigExtension($this->twigEnvironment);

        $this->assertEquals("wbw.adminbsb.twig.extension.form.checkbox", CheckboxTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new CheckboxTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(2, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("adminBSBCheckboxBasic", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBCheckboxBasicFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("adminBSBCheckboxMaterialDesign", $res[1]->getName());
        $this->assertEquals([$obj, "adminBSBCheckboxMaterialDesignFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));
    }
}
