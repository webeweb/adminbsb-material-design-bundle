<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\LabelUITwigExtension;

/**
 * Label UI Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI
 * @final
 */
final class LabelUITwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new LabelUITwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(7, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("adminBSBLabelDanger", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapLabelDangerFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("adminBSBLabelDefault", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapLabelDefaultFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("adminBSBLabelInfo", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapLabelInfoFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("adminBSBLabelPrimary", $res[3]->getName());
        $this->assertEquals([$obj, "bootstrapLabelPrimaryFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("adminBSBLabelSuccess", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapLabelSuccessFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[5]);
        $this->assertEquals("adminBSBLabelWarning", $res[5]->getName());
        $this->assertEquals([$obj, "bootstrapLabelWarningFunction"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[6]);
        $this->assertEquals("adminBSBMaterialDesignLabel", $res[6]->getName());
        $this->assertEquals([$obj, "adminBSBMaterialDesignLabelFunction"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the adminBSBMaterialDesignLabelFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBMaterialDesignLabelFunction() {

        $obj = new LabelUITwigExtension();

        $arg0 = [];
        $res0 = '<span class="label bg-red"></span>';
        $this->assertEquals($res0, $obj->adminBSBMaterialDesignLabelFunction($arg0));

        $arg1 = ["content" => "content"];
        $res1 = '<span class="label bg-red">content</span>';
        $this->assertEquals($res1, $obj->adminBSBMaterialDesignLabelFunction($arg1));

        $arg7 = ["color" => "black"];
        $res7 = '<span class="label bg-black"></span>';
        $this->assertEquals($res7, $obj->adminBSBMaterialDesignLabelFunction($arg7));

        $arg9 = ["content" => "content", "color" => "black"];
        $res9 = '<span class="label bg-black">content</span>';
        $this->assertEquals($res9, $obj->adminBSBMaterialDesignLabelFunction($arg9));
    }

}
