<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\UI;

use PHPUnit_Framework_TestCase;
use Twig_Node;
use Twig_SimpleFilter;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI\ButtonUITwigExtension;

/**
 * Button UI Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\UI
 * @final
 */
final class ButtonUITwigExtensionTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new ButtonUITwigExtension();

        $res = $obj->getFilters();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFilter::class, $res[0]);
        $this->assertEquals("absbmdLinkButton", $res[0]->getName());
        $this->assertEquals([$obj, "absbmdLinkButtonFilter"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new ButtonUITwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(7, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("absbmdButtonDanger", $res[0]->getName());
        $this->assertEquals([$obj, "absbmdButtonDangerFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("absbmdButtonDefault", $res[1]->getName());
        $this->assertEquals([$obj, "absbmdButtonDefaultFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("absbmdButtonInfo", $res[2]->getName());
        $this->assertEquals([$obj, "absbmdButtonInfoFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("absbmdButtonPrimary", $res[3]->getName());
        $this->assertEquals([$obj, "absbmdButtonPrimaryFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("absbmdButtonSuccess", $res[4]->getName());
        $this->assertEquals([$obj, "absbmdButtonSuccessFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[5]);
        $this->assertEquals("absbmdButtonWarning", $res[5]->getName());
        $this->assertEquals([$obj, "absbmdButtonWarningFunction"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[6]);
        $this->assertEquals("absbmdMaterialDesignButton", $res[6]->getName());
        $this->assertEquals([$obj, "absbmdMaterialDesignButtonFunction"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the absbmdButtonDangerFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAbsbmdButtonDangerFunction() {

        $obj = new ButtonUITwigExtension();

        $arg0 = [];
        $res0 = '<button class="btn btn-danger waves-effect" type="button">&nbsp;</button>';
        $this->assertEquals($res0, $obj->absbmdButtonDangerFunction($arg0));
    }

    /**
     * Tests the absbmdButtonDefaultFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAbsbmdButtonDefaultFunction() {

        $obj = new ButtonUITwigExtension();

        $arg0 = [];
        $res0 = '<button class="btn btn-default waves-effect" type="button">&nbsp;</button>';
        $this->assertEquals($res0, $obj->absbmdButtonDefaultFunction($arg0));
    }

    /**
     * Tests the absbmdButtonInfoFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAbsbmdButtonInfoFunction() {

        $obj = new ButtonUITwigExtension();

        $arg0 = [];
        $res0 = '<button class="btn btn-info waves-effect" type="button">&nbsp;</button>';
        $this->assertEquals($res0, $obj->absbmdButtonInfoFunction($arg0));
    }

    /**
     * Tests the absbmdButtonPrimaryFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAbsbmdButtonPrimaryFunction() {

        $obj = new ButtonUITwigExtension();

        $arg0 = [];
        $res0 = '<button class="btn btn-primary waves-effect" type="button">&nbsp;</button>';
        $this->assertEquals($res0, $obj->absbmdButtonPrimaryFunction($arg0));
    }

    /**
     * Tests the absbmdButtonSuccessFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAbsbmdButtonSuccessFunction() {

        $obj = new ButtonUITwigExtension();

        $arg0 = [];
        $res0 = '<button class="btn btn-success waves-effect" type="button">&nbsp;</button>';
        $this->assertEquals($res0, $obj->absbmdButtonSuccessFunction($arg0));
    }

    /**
     * Tests the absbmdButtonSuccessFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAbsbmdButtonWarningFunction() {

        $obj = new ButtonUITwigExtension();

        $arg0 = [];
        $res0 = '<button class="btn btn-warning waves-effect" type="button">&nbsp;</button>';
        $this->assertEquals($res0, $obj->absbmdButtonWarningFunction($arg0));
    }

    /**
     * Tests the absmdLinkButtonFilter() method.
     *
     * @return void
     * @depends testGetFilters
     */
    public function testAbsbmdLinkButtonFilter() {

        $obj = new ButtonUITwigExtension();

        $btn = $obj->absbmdMaterialDesignButtonFunction();

        $res0 = '<a class="btn bg-red waves-effect" href="javascript:void(0);">&nbsp;</a>';
        $this->assertEquals($res0, $obj->absbmdLinkButtonFilter($btn));

        $res1 = '<a class="btn bg-red waves-effect" href="https://github.com">&nbsp;</a>';
        $this->assertEquals($res1, $obj->absbmdLinkButtonFilter($btn, "https://github.com"));
    }

    /**
     * Tests the absbmdMaterialDesignButtonFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAbsbmdMaterialDesignButtonFunction() {

        $obj = new ButtonUITwigExtension();

        $arg0 = [];
        $res0 = '<button class="btn bg-red waves-effect" type="button">&nbsp;</button>';
        $this->assertEquals($res0, $obj->absbmdMaterialDesignButtonFunction($arg0));

        $arg1 = ["content" => "content"];
        $res1 = '<button class="btn bg-red waves-effect" type="button">content</button>';
        $this->assertEquals($res1, $obj->absbmdMaterialDesignButtonFunction($arg1));

        $arg2 = ["title" => "title"];
        $res2 = '<button class="btn bg-red waves-effect" title="title" type="button" data-toggle="tooltip">&nbsp;</button>';
        $this->assertEquals($res2, $obj->absbmdMaterialDesignButtonFunction($arg2));

        $arg3 = ["size" => "lg"];
        $res3 = '<button class="btn bg-red waves-effect btn-lg" type="button">&nbsp;</button>';
        $this->assertEquals($res3, $obj->absbmdMaterialDesignButtonFunction($arg3));

        $arg4 = ["block" => true];
        $res4 = '<button class="btn bg-red waves-effect btn-block" type="button">&nbsp;</button>';
        $this->assertEquals($res4, $obj->absbmdMaterialDesignButtonFunction($arg4));

        $arg5 = ["disable" => true];
        $res5 = '<button class="btn bg-red waves-effect" type="button" disabled="disabled">&nbsp;</button>';
        $this->assertEquals($res5, $obj->absbmdMaterialDesignButtonFunction($arg5));

        $arg6 = ["icon" => "person"];
        $res6 = '<button class="btn bg-red waves-effect" type="button"><i class="material-icons">person</i>&nbsp;</button>';
        $this->assertEquals($res6, $obj->absbmdMaterialDesignButtonFunction($arg6));

        $arg7 = ["circle" => true];
        $res7 = '<button class="btn bg-red waves-effect btn-circle waves-circle waves-float" type="button">&nbsp;</button>';
        $this->assertEquals($res7, $obj->absbmdMaterialDesignButtonFunction($arg7));

        $arg8 = ["color" => "black"];
        $res8 = '<button class="btn bg-black waves-effect" type="button">&nbsp;</button>';
        $this->assertEquals($res8, $obj->absbmdMaterialDesignButtonFunction($arg8));

        $arg9 = ["content" => "content", "title" => "title", "size" => "lg", "disable" => true, "icon" => "person", "color" => "black"];
        $res9 = '<button class="btn bg-black waves-effect btn-lg" title="title" type="button" data-toggle="tooltip" disabled="disabled"><i class="material-icons" style="margin: -4px 2px 0; vertical-align: sub;">person</i>content</button>';
        $this->assertEquals($res9, $obj->absbmdMaterialDesignButtonFunction($arg9));
    }

}
