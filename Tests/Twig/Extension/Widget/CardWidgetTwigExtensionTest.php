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

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget\CardWidgetTwigExtension;

/**
 * Card widget Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Widget
 * @final
 */
final class CardWidgetTwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new CardWidgetTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("absbmdCardHeader", $res[0]->getName());
        $this->assertEquals([$obj, "absbmdCardHeaderFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the absbmdCardHeaderFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAbsbmdCardHeaderFunction() {

        $obj = new CardWidgetTwigExtension();

        $arg0 = [];
        $res0 = '<h2 class="card-header">&nbsp;</h2>';
        $this->assertEquals($res0, $obj->absbmdCardHeaderFunction($arg0));

        $arg1 = ["content" => "content"];
        $res1 = '<h2 class="card-header">content</h2>';
        $this->assertEquals($res1, $obj->absbmdCardHeaderFunction($arg1));

        $arg2 = ["description" => "description"];
        $res2 = '<h2 class="card-header">&nbsp;<small>description</small></h2>';
        $this->assertEquals($res2, $obj->absbmdCardHeaderFunction($arg2));

        $arg3 = ["icon" => "person"];
        $res3 = '<h2 class="card-header"><i class="material-icons" style="margin: -4px 0; vertical-align: sub;">person</i>&nbsp;</h2>';
        $this->assertEquals($res3, $obj->absbmdCardHeaderFunction($arg3));

        $arg9 = ["content" => "content", "description" => "description", "icon" => "person"];
        $res9 = '<h2 class="card-header"><i class="material-icons" style="margin: -4px 0; vertical-align: sub;">person</i>content<small>description</small></h2>';
        $this->assertEquals($res9, $obj->absbmdCardHeaderFunction($arg9));
    }

}
