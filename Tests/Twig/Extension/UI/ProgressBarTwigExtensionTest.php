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
     * Tests adminBSBProgressBarMaterialDesignFunction()
     *
     * @return void
     */
    public function testAdminBSBProgressBarMaterialDesignFunction(): void {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);
        $obj->setVersion(3);

        $arg = ["content" => "content", "value" => 75, "min" => 1, "max" => 150, "striped" => true, "animated" => true, "color" => "pink"];
        $res = '<div class="progress"><div class="progress-bar bg-pink progress-bar-striped active" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="1" aria-valuemax="150">content</div></div>';

        $this->assertEquals($res, $obj->adminBSBProgressBarMaterialDesignFunction($arg));
    }

    /**
     * Tests adminBSBProgressBarMaterialDesignFunction()
     *
     * @return void
     */
    public function testAdminBSBProgressBarMaterialDesignFunctionWithoutArguments(): void {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);
        $obj->setVersion(3);

        $arg = [];
        $res = '<div class="progress"><div class="progress-bar bg-red" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"><span class="sr-only">50%</span></div></div>';

        $this->assertEquals($res, $obj->adminBSBProgressBarMaterialDesignFunction($arg));
    }

    /**
     * Tests getFilters()
     *
     * @return void
     */
    public function testGetFilters(): void {

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);
        $res = $obj->getFilters();
        $this->assertCount(0, $res);
    }

    /**
     * Tests getFunctions()
     *
     * @return void
     */
    public function testGetFunctions(): void {

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

    /**
     * Tests __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("wbw.adminbsb.twig.extension.ui.progress_bar", ProgressBarTwigExtension::SERVICE_NAME);

        $obj = new ProgressBarTwigExtension($this->twigEnvironment);

        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }
}
