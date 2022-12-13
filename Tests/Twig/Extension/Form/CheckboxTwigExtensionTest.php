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

use Twig\Extension\ExtensionInterface;
use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Form\CheckboxTwigExtension;

/**
 * Checkbox Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Form
 */
class CheckboxTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests adminBSBCheckboxBasicFunction()
     *
     * @return void
     */
    public function testAdminBSBCheckboxBasicFunction(): void {

        $obj = new CheckboxTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<input type="checkbox"><label></label>';

        $this->assertEquals($res, $obj->adminBSBCheckboxBasicFunction($arg));
    }

    /**
     * Tests adminBSBCheckboxMaterialDesignFunction()
     *
     * @return void
     */
    public function testAdminBSBCheckboxMaterialDesignFunction(): void {

        $obj = new CheckboxTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "name" => "name", "id" => "id", "checked" => true, "disabled" => true, "filledIn" => true, "class" => "class", "color" => "pink"];
        $res = '<input class="filled-in class chk-col-pink" name="name" type="checkbox" id="id" checked="checked" disabled="disabled"><label for="id">content</label>';

        $this->assertEquals($res, $obj->adminBSBCheckboxMaterialDesignFunction($arg));
    }

    /**
     * Tests adminBSBCheckboxMaterialDesignFunction()
     *
     * @return void
     */
    public function testAdminBSBCheckboxMaterialDesignFunctionWithoutArguments(): void {

        $obj = new CheckboxTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<input class="chk-col-red" type="checkbox"><label></label>';

        $this->assertEquals($res, $obj->adminBSBCheckboxMaterialDesignFunction($arg));
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

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

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.adminbsb.twig.extension.form.checkbox", CheckboxTwigExtension::SERVICE_NAME);

        $obj = new CheckboxTwigExtension($this->twigEnvironment);

        $this->assertInstanceOf(ExtensionInterface::class, $obj);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
