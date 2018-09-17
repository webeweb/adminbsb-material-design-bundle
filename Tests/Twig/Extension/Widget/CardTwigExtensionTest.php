<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Widget;

use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractAdminBSBFrameworkTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget\CardTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\TypographyTwigExtension;

/**
 * Card widget Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Widget
 * @final
 */
final class CardTwigExtensionTest extends AbstractAdminBSBFrameworkTestCase {

    /**
     * Typography.
     *
     * @var TypographyTwigExtension
     */
    private $typography;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Typography Twig extension mock.
        $this->typography = new TypographyTwigExtension();
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new CardTwigExtension($this->typography);

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("adminBSBCardHeader", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBCardHeaderFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the adminBSBCardHeaderFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBCardHeaderFunction() {

        $obj = new CardTwigExtension($this->typography);

        $arg0 = [];
        $res0 = '<h2 class="card-header"></h2>';
        $this->assertEquals($res0, $obj->adminBSBCardHeaderFunction($arg0));

        $arg1 = ["content" => "content"];
        $res1 = '<h2 class="card-header">content</h2>';
        $this->assertEquals($res1, $obj->adminBSBCardHeaderFunction($arg1));

        $arg2 = ["description" => "description"];
        $res2 = '<h2 class="card-header"><small>description</small></h2>';
        $this->assertEquals($res2, $obj->adminBSBCardHeaderFunction($arg2));

        $arg3 = ["icon" => "person"];
        $res3 = '<h2 class="card-header"><i class="material-icons" style="margin: -4px 4px 0 0; vertical-align: sub;">person</i></h2>';
        $this->assertEquals($res3, $obj->adminBSBCardHeaderFunction($arg3));

        $arg9 = ["content" => "content", "description" => "description", "icon" => "person"];
        $res9 = '<h2 class="card-header"><i class="material-icons" style="margin: -4px 4px 0 0; vertical-align: sub;">person</i>content<small>description</small></h2>';
        $this->assertEquals($res9, $obj->adminBSBCardHeaderFunction($arg9));
    }

}
