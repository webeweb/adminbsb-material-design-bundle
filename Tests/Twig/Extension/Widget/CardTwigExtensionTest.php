<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Widget;

use Twig\Extension\ExtensionInterface;
use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\TypographyTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget\CardTwigExtension;

/**
 * Card widget Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Widget
 */
class CardTwigExtensionTest extends AbstractTestCase {

    /**
     * Typography.
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
     * Test adminBSBCardHeaderFunction()
     *
     * @return void
     */
    public function testAdminBSBCardHeaderFunction(): void {

        $obj = new CardTwigExtension($this->twigEnvironment, $this->typographyTwigExtension);

        $arg = ["content" => "content", "description" => "description", "icon" => "person"];
        $res = '<h2 class="card-header"><i class="material-icons" style="margin: -4px 4px 0 0; vertical-align: sub;">person</i>content<small>description</small></h2>';

        $this->assertEquals($res, $obj->adminBSBCardHeaderFunction($arg));
    }

    /**
     * Test adminBSBCardHeaderFunction()
     *
     * @return void
     */
    public function testAdminBSBCardHeaderFunctionWithContent(): void {

        $obj = new CardTwigExtension($this->twigEnvironment, $this->typographyTwigExtension);

        $arg = ["content" => "content"];
        $res = '<h2 class="card-header">content</h2>';

        $this->assertEquals($res, $obj->adminBSBCardHeaderFunction($arg));
    }

    /**
     * Test adminBSBCardHeaderFunction()
     *
     * @return void
     */
    public function testAdminBSBCardHeaderFunctionWithDescription(): void {

        $obj = new CardTwigExtension($this->twigEnvironment, $this->typographyTwigExtension);

        $arg = ["description" => "description"];
        $res = '<h2 class="card-header"><small>description</small></h2>';

        $this->assertEquals($res, $obj->adminBSBCardHeaderFunction($arg));
    }

    /**
     * Test adminBSBCardHeaderFunction()
     *
     * @return void
     */
    public function testAdminBSBCardHeaderFunctionWithIcon(): void {

        $obj = new CardTwigExtension($this->twigEnvironment, $this->typographyTwigExtension);

        $arg = ["icon" => "person"];
        $res = '<h2 class="card-header"><i class="material-icons" style="margin: -4px 4px 0 0; vertical-align: sub;">person</i></h2>';

        $this->assertEquals($res, $obj->adminBSBCardHeaderFunction($arg));
    }

    /**
     * Test adminBSBCardHeaderFunction()
     *
     * @return void
     */
    public function testAdminBSBCardHeaderFunctionWithoutArguments(): void {

        $obj = new CardTwigExtension($this->twigEnvironment, $this->typographyTwigExtension);

        $arg = [];
        $res = '<h2 class="card-header"></h2>';

        $this->assertEquals($res, $obj->adminBSBCardHeaderFunction($arg));
    }

    /**
     * Test getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new CardTwigExtension($this->twigEnvironment, $this->typographyTwigExtension);

        $res = $obj->getFunctions();
        $this->assertCount(1, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("adminBSBCardHeader", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBCardHeaderFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.adminbsb.twig.extension.widget.card", CardTwigExtension::SERVICE_NAME);

        $obj = new CardTwigExtension($this->twigEnvironment, $this->typographyTwigExtension);

        $this->assertInstanceOf(ExtensionInterface::class, $obj);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
        $this->assertSame($this->typographyTwigExtension, $obj->getTypographyTwigExtension());
    }
}
