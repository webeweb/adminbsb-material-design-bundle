<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\UI;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI\LabelUITwigExtension;

/**
 * Label UI Twig extension test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\UI
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
        $this->assertEquals("labelDanger", $res[0]->getName());
        $this->assertEquals([$obj, "labelDangerFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("labelDefault", $res[1]->getName());
        $this->assertEquals([$obj, "labelDefaultFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("labelInfo", $res[2]->getName());
        $this->assertEquals([$obj, "labelInfoFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("labelPrimary", $res[3]->getName());
        $this->assertEquals([$obj, "labelPrimaryFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("labelSuccess", $res[4]->getName());
        $this->assertEquals([$obj, "labelSuccessFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[5]);
        $this->assertEquals("labelWarning", $res[5]->getName());
        $this->assertEquals([$obj, "labelWarningFunction"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[6]);
        $this->assertEquals("materialDesignLabel", $res[6]->getName());
        $this->assertEquals([$obj, "materialDesignLabelFunction"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the labelDangerFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testLabelDangerFunction() {

        $obj = new LabelUITwigExtension();

        $arg0 = [];
        $res0 = '<span class="label label-danger">&nbsp;</span>';
        $this->assertEquals($res0, $obj->labelDangerFunction($arg0));
    }

    /**
     * Tests the labelDefaultFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testLabelDefaultFunction() {

        $obj = new LabelUITwigExtension();

        $arg0 = [];
        $res0 = '<span class="label label-default">&nbsp;</span>';
        $this->assertEquals($res0, $obj->labelDefaultFunction($arg0));
    }

    /**
     * Tests the labelInfoFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testLabelInfoFunction() {

        $obj = new LabelUITwigExtension();

        $arg0 = [];
        $res0 = '<span class="label label-info">&nbsp;</span>';
        $this->assertEquals($res0, $obj->labelInfoFunction($arg0));
    }

    /**
     * Tests the labelPrimaryFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testLabelPrimaryFunction() {

        $obj = new LabelUITwigExtension();

        $arg0 = [];
        $res0 = '<span class="label label-primary">&nbsp;</span>';
        $this->assertEquals($res0, $obj->labelPrimaryFunction($arg0));
    }

    /**
     * Tests the labelSuccessFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testLabelSuccessFunction() {

        $obj = new LabelUITwigExtension();

        $arg0 = [];
        $res0 = '<span class="label label-success">&nbsp;</span>';
        $this->assertEquals($res0, $obj->labelSuccessFunction($arg0));
    }

    /**
     * Tests the labelSuccessFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testLabelWarningFunction() {

        $obj = new LabelUITwigExtension();

        $arg0 = [];
        $res0 = '<span class="label label-warning">&nbsp;</span>';
        $this->assertEquals($res0, $obj->labelWarningFunction($arg0));
    }

    /**
     * Tests the materialDesignLabelFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testMaterialDesignLabelFunction() {

        $obj = new LabelUITwigExtension();

        $arg0 = [];
        $res0 = '<span class="label bg-red">&nbsp;</span>';
        $this->assertEquals($res0, $obj->materialDesignLabelFunction($arg0));

        $arg1 = ["content" => "content"];
        $res1 = '<span class="label bg-red">content</span>';
        $this->assertEquals($res1, $obj->materialDesignLabelFunction($arg1));

        $arg7 = ["color" => "black"];
        $res7 = '<span class="label bg-black">&nbsp;</span>';
        $this->assertEquals($res7, $obj->materialDesignLabelFunction($arg7));

        $arg9 = ["content" => "content", "color" => "black"];
        $res9 = '<span class="label bg-black">content</span>';
        $this->assertEquals($res9, $obj->materialDesignLabelFunction($arg9));
    }

}
