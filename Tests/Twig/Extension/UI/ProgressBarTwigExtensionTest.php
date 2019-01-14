<?php

/*
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
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ProgressBarTwigExtension;

/**
 * Progress bar Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI
 */
class ProgressBarTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the adminBSBProgressBarMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBProgressBarMaterialDesignFunction() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "value" => 75, "min" => 1, "max" => 150, "striped" => true, "animated" => true, "color" => "black"];
        $res = '<div class="progress"><div class="progress-bar bg-black progress-bar-striped active" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="1" aria-valuemax="150%">content</div></div>';
        $this->assertEquals($res, $obj->adminBSBProgressBarMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBProgressBarMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBProgressBarMaterialDesignFunctionWithAnimated() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["animated" => true];
        $res = '<div class="progress"><div class="progress-bar bg-red active" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->adminBSBProgressBarMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBProgressBarMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBProgressBarMaterialDesignFunctionWithColor() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["color" => "black"];
        $res = '<div class="progress"><div class="progress-bar bg-black" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->adminBSBProgressBarMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBProgressBarMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBProgressBarMaterialDesignFunctionWithContent() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<div class="progress"><div class="progress-bar bg-red" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">content</div></div>';
        $this->assertEquals($res, $obj->adminBSBProgressBarMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBProgressBarMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBProgressBarMaterialDesignFunctionWithMax() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["max" => 200];
        $res = '<div class="progress"><div class="progress-bar bg-red" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="200%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->adminBSBProgressBarMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBProgressBarMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBProgressBarMaterialDesignFunctionWithMin() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["min" => 1];
        $res = '<div class="progress"><div class="progress-bar bg-red" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="1" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->adminBSBProgressBarMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBProgressBarMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBProgressBarMaterialDesignFunctionWithStriped() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["striped" => true];
        $res = '<div class="progress"><div class="progress-bar bg-red progress-bar-striped" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->adminBSBProgressBarMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBProgressBarMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBProgressBarMaterialDesignFunctionWithValue() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = ["value" => 75];
        $res = '<div class="progress"><div class="progress-bar bg-red" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">75%</span></div></div>';
        $this->assertEquals($res, $obj->adminBSBProgressBarMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBProgressBarMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBProgressBarMaterialDesignFunctionWithoutArguments() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<div class="progress"><div class="progress-bar bg-red" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
        $this->assertEquals($res, $obj->adminBSBProgressBarMaterialDesignFunction($arg));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $this->assertEquals("webeweb.adminbsb.twig.extension.ui.progress_bar", ProgressBarTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("adminBSBProgressBarMaterialDesign", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBProgressBarMaterialDesignFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }
}
