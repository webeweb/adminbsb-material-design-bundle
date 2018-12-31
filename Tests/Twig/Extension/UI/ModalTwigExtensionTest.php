<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI;

use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ModalTwigExtension;

/**
 * Modal Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI
 */
class ModalTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the adminBSBModalHeaderFunction() method.
     *
     * @return void
     */
    public function testAdminBSBModalHeaderFunctionWithContent() {

        $obj = new ModalTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<h3 class="modal-title">content</h3>';
        $this->assertEquals($res, $obj->adminBSBModalHeaderFunction($arg));
    }

    /**
     * Tests the adminBSBModalHeaderFunction() method.
     *
     * @return void
     */
    public function testAdminBSBModalHeaderFunctionWithContentAndIcon() {

        $obj = new ModalTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "icon" => "person"];
        $res = '<h3 class="modal-title"><i class="material-icons" style="margin: -4px 0; vertical-align: sub;">person</i>content</h3>';
        $this->assertEquals($res, $obj->adminBSBModalHeaderFunction($arg));
    }

    /**
     * Tests the adminBSBModalHeaderFunction() method.
     *
     * @return void
     */
    public function testAdminBSBModalHeaderFunctionWithIcon() {

        $obj = new ModalTwigExtension($this->twigEnvironment);

        $arg = ["icon" => "person"];
        $res = '<h3 class="modal-title"><i class="material-icons" style="margin: -4px 0; vertical-align: sub;">person</i></h3>';
        $this->assertEquals($res, $obj->adminBSBModalHeaderFunction($arg));
    }

    /**
     * Tests the adminBSBModalHeaderFunction() method.
     *
     * @return void
     */
    public function testAdminBSBModalHeaderFunctionWithoutArguments() {

        $obj = new ModalTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<h3 class="modal-title"></h3>';
        $this->assertEquals($res, $obj->adminBSBModalHeaderFunction($arg));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new ModalTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("adminBSBModalHeader", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBModalHeaderFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

}
