<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Widget;

use Twig\Node\Node;
use Twig\TwigFunction;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget\InfoboxTwigExtension;

/**
 * Infobox Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Widget
 */
class InfoboxTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the adminBSBInfobox1Function() method.
     *
     * @return void
     */
    public function testAdminBSBInfobox1Function(): void {

        $obj = new InfoboxTwigExtension($this->twigEnvironment);

        $arg = ["iconName" => "shopping_cart", "iconColor" => "red", "contentText" => "NEW ORDERS", "contentNumber" => 125];
        $res = file_get_contents(__DIR__ . "/InfoboxTwigExtensionTest.testAdminBSBInfobox1Function.html.txt");

        $this->assertEquals($res, $obj->adminBSBInfobox1Function($arg));
    }

    /**
     * Tests the adminBSBInfobox2Function() method.
     *
     * @return void
     */
    public function testAdminBSBInfobox2Function(): void {

        $obj = new InfoboxTwigExtension($this->twigEnvironment);

        $arg = ["color" => "red", "iconName" => "shopping_cart", "contentText" => "NEW ORDERS", "contentNumber" => 125];
        $res = file_get_contents(__DIR__ . "/InfoboxTwigExtensionTest.testAdminBSBInfobox2Function.html.txt");

        $this->assertEquals($res, $obj->adminBSBInfobox2Function($arg));
    }

    /**
     * Tests the adminBSBInfobox3Function() method.
     *
     * @return void
     */
    public function testAdminBSBInfobox3Function(): void {

        $obj = new InfoboxTwigExtension($this->twigEnvironment);

        $arg = ["color" => "red", "iconName" => "shopping_cart", "contentText" => "NEW ORDERS", "contentNumber" => 125];
        $res = file_get_contents(__DIR__ . "/InfoboxTwigExtensionTest.testAdminBSBInfobox3Function.html.txt");

        $this->assertEquals($res, $obj->adminBSBInfobox3Function($arg));
    }

    /**
     * Tests the adminBSBInfobox4Function() method.
     *
     * @return void
     */
    public function testAdminBSBInfobox4Function(): void {

        $obj = new InfoboxTwigExtension($this->twigEnvironment);

        $arg = ["color" => "red", "iconName" => "shopping_cart", "contentText" => "NEW ORDERS", "contentNumber" => 125];
        $res = file_get_contents(__DIR__ . "/InfoboxTwigExtensionTest.testAdminBSBInfobox4Function.html.txt");

        $this->assertEquals($res, $obj->adminBSBInfobox4Function($arg));
    }

    /**
     * Tests the adminBSBInfobox5Function() method.
     *
     * @return void
     */
    public function testAdminBSBInfobox5Function(): void {

        $obj = new InfoboxTwigExtension($this->twigEnvironment);

        $arg = ["iconColor" => "red", "iconName" => "shopping_cart", "contentText" => "NEW ORDERS", "contentNumber" => 125, "hoverZoomEffect" => true, "hoverExpandEffect" => true, "countTo" => [
            "data-from"           => 0,
            "data-to"             => 125,
            "data-speed"          => 1000,
            "data-fresh-interval" => 20,
        ]];
        $res = file_get_contents(__DIR__ . "/InfoboxTwigExtensionTest.testAdminBSBInfobox5Function.html.txt");

        $this->assertEquals($res, $obj->adminBSBInfobox5Function($arg));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions(): void {

        $obj = new InfoboxTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(5, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("adminBSBInfobox1", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBInfobox1Function"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("adminBSBInfobox2", $res[1]->getName());
        $this->assertEquals([$obj, "adminBSBInfobox2Function"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[2]);
        $this->assertEquals("adminBSBInfobox3", $res[2]->getName());
        $this->assertEquals([$obj, "adminBSBInfobox3Function"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[3]);
        $this->assertEquals("adminBSBInfobox4", $res[3]->getName());
        $this->assertEquals([$obj, "adminBSBInfobox4Function"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[4]);
        $this->assertEquals("adminBSBInfobox5", $res[4]->getName());
        $this->assertEquals([$obj, "adminBSBInfobox5Function"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Node()));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.adminbsb.twig.extension.widget.infobox", InfoboxTwigExtension::SERVICE_NAME);

        $obj = new InfoboxTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
