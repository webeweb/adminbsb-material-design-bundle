<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Grid;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Grid\GridTwigExtension;

/**
 * Grid Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Grid
 * @final
 */
final class GridTwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new GridTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(5, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("adminBSBGrid", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapGridFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("adminBSBGridOffset", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapGridOffsetFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("adminBSBGridPull", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapGridPullFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("adminBSBGridPush", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapGridPushFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("adminBSBGridStacked", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapGridStackedFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));
    }

}
