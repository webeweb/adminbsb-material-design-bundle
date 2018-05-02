<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Typography;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\StrikethroughTypographyTwigExtension;

/**
 * Strikethrough typography Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Typography
 * @final
 */
final class StrikethroughTypographyTwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new StrikethroughTypographyTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("adminBSBLineThrough", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBLineThroughFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the adminBSBLineThroughFunction() method.
     *
     * @return void
     */
    public function testAdminBSBLineThroughFunction() {

        $obj = new StrikethroughTypographyTwigExtension();

        $arg0 = [];
        $res0 = '<span class="font-line-through"></span>';
        $this->assertEquals($res0, $obj->adminBSBLineThroughFunction($arg0));

        $arg9 = ["content" => "content"];
        $res9 = '<span class="font-line-through">content</span>';
        $this->assertEquals($res9, $obj->adminBSBLineThroughFunction($arg9));
    }

}
