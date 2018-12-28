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

use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Form\RadioButtonTwigExtension;

/**
 * Radio button Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Form
 */
class RadioButtonTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the adminBSBRadioButtonBasicFunction() method.
     *
     * @return void
     */
    public function testAdminBSBRadioButtonBasicFunction() {

        $obj = new RadioButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<input type="radio"><label></label>';
        $this->assertEquals($res, $obj->adminBSBRadioButtonBasicFunction($arg));
    }

    /**
     * Tests the adminBSBRadioButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBRadioButtonMaterialDesignFunction() {

        $obj = new RadioButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "name" => "name", "id" => "id", "checked" => true, "disabled" => true, "withGap" => true, "class" => "class", "color" => "black"];
        $res = '<input class="with-gap class radio-col-black" name="name" type="radio" id="id" checked="checked" disabled="disabled"><label for="id">content</label>';
        $this->assertEquals($res, $obj->adminBSBRadioButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBRadioButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBRadioButtonMaterialDesignFunctionWithChecked() {

        $obj = new RadioButtonTwigExtension($this->twigEnvironment);

        $arg = ["checked" => true];
        $res = '<input class="radio-col-red" type="radio" checked="checked"><label></label>';
        $this->assertEquals($res, $obj->adminBSBRadioButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBRadioButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBRadioButtonMaterialDesignFunctionWithClass() {

        $obj = new RadioButtonTwigExtension($this->twigEnvironment);

        $arg = ["class" => "class"];
        $res = '<input class="class radio-col-red" type="radio"><label></label>';
        $this->assertEquals($res, $obj->adminBSBRadioButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBRadioButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBRadioButtonMaterialDesignFunctionWithColor() {

        $obj = new RadioButtonTwigExtension($this->twigEnvironment);

        $arg = ["color" => "black"];
        $res = '<input class="radio-col-black" type="radio"><label></label>';
        $this->assertEquals($res, $obj->adminBSBRadioButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBRadioButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBRadioButtonMaterialDesignFunctionWithContent() {

        $obj = new RadioButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<input class="radio-col-red" type="radio"><label>content</label>';
        $this->assertEquals($res, $obj->adminBSBRadioButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBRadioButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBRadioButtonMaterialDesignFunctionWithDisabled() {

        $obj = new RadioButtonTwigExtension($this->twigEnvironment);

        $arg = ["disabled" => true];
        $res = '<input class="radio-col-red" type="radio" disabled="disabled"><label></label>';
        $this->assertEquals($res, $obj->adminBSBRadioButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBRadioButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBRadioButtonMaterialDesignFunctionWithId() {

        $obj = new RadioButtonTwigExtension($this->twigEnvironment);

        $arg = ["id" => "id"];
        $res = '<input class="radio-col-red" type="radio" id="id"><label for="id"></label>';
        $this->assertEquals($res, $obj->adminBSBRadioButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBRadioButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBRadioButtonMaterialDesignFunctionWithName() {

        $obj = new RadioButtonTwigExtension($this->twigEnvironment);

        $arg = ["name" => "name"];
        $res = '<input class="radio-col-red" name="name" type="radio"><label></label>';
        $this->assertEquals($res, $obj->adminBSBRadioButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBRadioButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBRadioButtonMaterialDesignFunctionWithWithGap() {

        $obj = new RadioButtonTwigExtension($this->twigEnvironment);

        $arg = ["withGap" => true];
        $res = '<input class="with-gap radio-col-red" type="radio"><label></label>';
        $this->assertEquals($res, $obj->adminBSBRadioButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBRadioButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBRadioButtonMaterialDesignFunctionWithoutArguments() {

        $obj = new RadioButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<input class="radio-col-red" type="radio"><label></label>';
        $this->assertEquals($res, $obj->adminBSBRadioButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new RadioButtonTwigExtension($this->twigEnvironment);

        $this->assertEquals("webeweb.adminbsb.twig.extension.form.radio_button", RadioButtonTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new RadioButtonTwigExtension($this->twigEnvironment);

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

}
