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

use Twig\Node\Node;
use Twig\TwigFunction;
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

        $arg = ["content" => "content", "value" => 75, "min" => 1, "max" => 150, "striped" => true, "animated" => true, "color" => "pink"];
        $res = '<div class="progress"><div class="progress-bar bg-pink progress-bar-striped active" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="1" aria-valuemax="150%">content</div></div>';
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

        $arg = ["color" => "pink"];
        $res = '<div class="progress"><div class="progress-bar bg-pink" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%"><span class="sr-only">50%</span></div></div>';
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

        $this->assertEquals("wbw.adminbsb.twig.extension.ui.progress_bar", ProgressBarTwigExtension::SERVICE_NAME);

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);
        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(6, $res);

        $this->assertInstanceOf(TwigFunction::class, $res[0]);
        $this->assertEquals("adminBSBProgressBarBasic", $res[0]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarBasicFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[1]);
        $this->assertEquals("adminBSBProgressBarDanger", $res[1]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarDangerFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[2]);
        $this->assertEquals("adminBSBProgressBarInfo", $res[2]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarInfoFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[3]);
        $this->assertEquals("adminBSBProgressBarMaterialDesign", $res[3]->getName());
        $this->assertEquals([$obj, "adminBSBProgressBarMaterialDesignFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[4]);
        $this->assertEquals("adminBSBProgressBarSuccess", $res[4]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarSuccessFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Node()));

        $this->assertInstanceOf(TwigFunction::class, $res[5]);
        $this->assertEquals("adminBSBProgressBarWarning", $res[5]->getName());
        $this->assertEquals([$obj, "bootstrapProgressBarWarningFunction"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Node()));
    }
}
