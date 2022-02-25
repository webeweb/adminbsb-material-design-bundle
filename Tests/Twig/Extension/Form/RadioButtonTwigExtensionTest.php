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
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Form\RadioButtonTwigExtension;

/**
 * Radio button Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Form
 */
class RadioButtonTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests adminBSBRadioButtonBasicFunction()
     *
     * @return void
     */
    public function testAdminBSBRadioButtonBasicFunction(): void {

        $obj = new RadioButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<input type="radio"><label></label>';

        $this->assertEquals($res, $obj->adminBSBRadioButtonBasicFunction($arg));
    }

    /**
     * Tests adminBSBRadioButtonMaterialDesignFunction()
     *
     * @return void
     */
    public function testAdminBSBRadioButtonMaterialDesignFunction(): void {

        $obj = new RadioButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "name" => "name", "id" => "id", "checked" => true, "disabled" => true, "withGap" => true, "class" => "class", "color" => "pink"];
        $res = '<input class="with-gap class radio-col-pink" name="name" type="radio" id="id" checked="checked" disabled="disabled"><label for="id">content</label>';

        $this->assertEquals($res, $obj->adminBSBRadioButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests adminBSBRadioButtonMaterialDesignFunction()
     *
     * @return void
     */
    public function testAdminBSBRadioButtonMaterialDesignFunctionWithoutArguments(): void {

        $obj = new RadioButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<input class="radio-col-red" type="radio"><label></label>';

        $this->assertEquals($res, $obj->adminBSBRadioButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new RadioButtonTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(2, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("adminBSBRadioButtonBasic", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBRadioButtonBasicFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("adminBSBRadioButtonMaterialDesign", $res[1]->getName());
        $this->assertEquals([$obj, "adminBSBRadioButtonMaterialDesignFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));
    }

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.adminbsb.twig.extension.form.radio_button", RadioButtonTwigExtension::SERVICE_NAME);

        $obj = new RadioButtonTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
