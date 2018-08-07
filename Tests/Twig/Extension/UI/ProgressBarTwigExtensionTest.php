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

use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Tests\Cases\AbstractAdminBSBFrameworkTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ProgressBarTwigExtension;

/**
 * Progress bar UI Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI
 * @final
 */
final class ProgressBarTwigExtensionTest extends AbstractAdminBSBFrameworkTestCase {

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new ProgressBarTwigExtension();

        $res = $obj->getFunctions();

        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("adminBSBProgressBarMaterialDesign", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBProgressBarMaterialDesignFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the adminBSBProgressBarMaterialDesignFunction() method.
     *
     * @return void
     * @depends testGetFunctions
     */
    public function testAdminBSBProgressBarMaterialDesignFunction() {

        $obj = new ProgressBarTwigExtension();

        $arg0 = [];
        $res0 = '<div class="progress"><div class="progress-bar bg-red" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res0, $obj->adminBSBProgressBarMaterialDesignFunction($arg0));

        $arg1 = ["content" => "content"];
        $res1 = '<div class="progress"><div class="progress-bar bg-red" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">content</div></div>';
        $this->assertEquals($res1, $obj->adminBSBProgressBarMaterialDesignFunction($arg1));

        $arg2 = ["value" => 75];
        $res2 = '<div class="progress"><div class="progress-bar bg-red" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">75%</span></div></div>';
        $this->assertEquals($res2, $obj->adminBSBProgressBarMaterialDesignFunction($arg2));

        $arg3 = ["min" => 1];
        $res3 = '<div class="progress"><div class="progress-bar bg-red" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="1" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res3, $obj->adminBSBProgressBarMaterialDesignFunction($arg3));

        $arg4 = ["max" => 200];
        $res4 = '<div class="progress"><div class="progress-bar bg-red" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="200%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res4, $obj->adminBSBProgressBarMaterialDesignFunction($arg4));

        $arg5 = ["striped" => true];
        $res5 = '<div class="progress"><div class="progress-bar bg-red progress-bar-striped" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res5, $obj->adminBSBProgressBarMaterialDesignFunction($arg5));

        $arg6 = ["animated" => true];
        $res6 = '<div class="progress"><div class="progress-bar bg-red active" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res6, $obj->adminBSBProgressBarMaterialDesignFunction($arg6));

        $arg7 = ["color" => "black"];
        $res7 = '<div class="progress"><div class="progress-bar bg-black" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res7, $obj->adminBSBProgressBarMaterialDesignFunction($arg7));

        $arg9 = ["content" => "content", "value" => 75, "min" => 1, "max" => 150, "striped" => true, "animated" => true, "color" => "black"];
        $res9 = '<div class="progress"><div class="progress-bar bg-black progress-bar-striped active" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="1" aria-valuemax="150%">content</div></div>';
        $this->assertEquals($res9, $obj->adminBSBProgressBarMaterialDesignFunction($arg9));
    }

}
