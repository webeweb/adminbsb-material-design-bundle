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

use Twig\Extension\ExtensionInterface;
use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\TypographyTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ModalTwigExtension;

/**
 * Modal Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI
 */
class ModalTwigExtensionTest extends AbstractTestCase {

    /**
     * Typography Twig extension.
     *
     * @var TypographyTwigExtension
     */
    private $typographyTwigExtension;

    /**
     * {@inheritdoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Typography Twig extension mock.
        $this->typographyTwigExtension = new TypographyTwigExtension($this->twigEnvironment);
    }

    /**
     * Test adminBSBModalHeaderFunction()
     *
     * @return void
     */
    public function testAdminBSBModalHeaderFunction(): void {

        $obj = new ModalTwigExtension($this->twigEnvironment, $this->typographyTwigExtension);

        $arg = ["content" => "content", "icon" => "person"];
        $res = '<h3 class="modal-title"><i class="material-icons" style="margin: -4px 0; vertical-align: sub;">person</i>content</h3>';

        $this->assertEquals($res, $obj->adminBSBModalHeaderFunction($arg));
    }

    /**
     * Test adminBSBModalHeaderFunction()
     *
     * @return void
     */
    public function testAdminBSBModalHeaderFunctionWithoutArguments(): void {

        $obj = new ModalTwigExtension($this->twigEnvironment, $this->typographyTwigExtension);

        $arg = [];
        $res = '<h3 class="modal-title"></h3>';

        $this->assertEquals($res, $obj->adminBSBModalHeaderFunction($arg));
    }

    /**
     * Test getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new ModalTwigExtension($this->twigEnvironment, $this->typographyTwigExtension);

        $res = $obj->getFunctions();
        $this->assertCount(1, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("adminBSBModalHeader", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBModalHeaderFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.adminbsb.twig.extension.ui.modal", ModalTwigExtension::SERVICE_NAME);

        $obj = new ModalTwigExtension($this->twigEnvironment, $this->typographyTwigExtension);

        $this->assertInstanceOf(ExtensionInterface::class, $obj);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
        $this->assertSame($this->typographyTwigExtension, $obj->getTypographyTwigExtension());
    }
}
