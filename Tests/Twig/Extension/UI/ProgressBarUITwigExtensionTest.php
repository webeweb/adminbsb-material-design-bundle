<?php

/*
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
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI\ProgressBarUITwigExtension;

/**
 * Progress bar UI Twig extension test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Twig\Extension\UI
 * @final
 */
final class ProgressBarUITwigExtensionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the getFunctions() method.
	 *
	 * @return void
	 */
	public function testGetFunctions() {

		$obj = new ProgressBarUITwigExtension();

		$res = $obj->getFunctions();

		$this->assertCount(6, $res);

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
		$this->assertEquals("basicProgressBar", $res[0]->getName());
		$this->assertEquals([$obj, "basicProgressBarFunction"], $res[0]->getCallable());
		$this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
		$this->assertEquals("progressBarDanger", $res[1]->getName());
		$this->assertEquals([$obj, "progressBarDangerFunction"], $res[1]->getCallable());
		$this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
		$this->assertEquals("progressBarInfo", $res[2]->getName());
		$this->assertEquals([$obj, "progressBarInfoFunction"], $res[2]->getCallable());
		$this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
		$this->assertEquals("progressBarSuccess", $res[3]->getName());
		$this->assertEquals([$obj, "progressBarSuccessFunction"], $res[3]->getCallable());
		$this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
		$this->assertEquals("progressBarWarning", $res[4]->getName());
		$this->assertEquals([$obj, "progressBarWarningFunction"], $res[4]->getCallable());
		$this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));

		$this->assertInstanceOf(Twig_SimpleFunction::class, $res[5]);
		$this->assertEquals("materialDesignProgressBar", $res[5]->getName());
		$this->assertEquals([$obj, "materialDesignProgressBarFunction"], $res[5]->getCallable());
		$this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()));
	}

	/**
	 * Tests the basicProgressBarFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testBasicProgressBarFunction() {

		$obj = new ProgressBarUITwigExtension();

		$arg0	 = [];
		$res0	 = '<div class="progress"><div class="progress-bar" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">&nbsp;</div></div>';
		$this->assertEquals($res0, $obj->basicProgressBarFunction($arg0));
	}

	/**
	 * Tests the materialDesignProgressBarFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testMaterialDesignProgressBarFunction() {

		$obj = new ProgressBarUITwigExtension();

		$arg0	 = [];
		$res0	 = '<div class="progress"><div class="progress-bar bg-red" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">&nbsp;</div></div>';
		$this->assertEquals($res0, $obj->materialDesignProgressBarFunction($arg0));

		$arg1	 = ["content" => "content"];
		$res1	 = '<div class="progress"><div class="progress-bar bg-red" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">content<span class="sr-only">50 %</span></div></div>';
		$this->assertEquals($res1, $obj->materialDesignProgressBarFunction($arg1));

		$arg2	 = ["value" => 75];
		$res2	 = '<div class="progress"><div class="progress-bar bg-red" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100%">&nbsp;</div></div>';
		$this->assertEquals($res2, $obj->materialDesignProgressBarFunction($arg2));

		$arg3	 = ["min" => 1];
		$res3	 = '<div class="progress"><div class="progress-bar bg-red" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="1" aria-valuemax="100%">&nbsp;</div></div>';
		$this->assertEquals($res3, $obj->materialDesignProgressBarFunction($arg3));

		$arg4	 = ["max" => 200];
		$res4	 = '<div class="progress"><div class="progress-bar bg-red" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="200%">&nbsp;</div></div>';
		$this->assertEquals($res4, $obj->materialDesignProgressBarFunction($arg4));

		$arg5	 = ["striped" => true];
		$res5	 = '<div class="progress"><div class="progress-bar bg-red progress-bar-striped" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">&nbsp;</div></div>';
		$this->assertEquals($res5, $obj->materialDesignProgressBarFunction($arg5));

		$arg6	 = ["animated" => true];
		$res6	 = '<div class="progress"><div class="progress-bar bg-red active" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">&nbsp;</div></div>';
		$this->assertEquals($res6, $obj->materialDesignProgressBarFunction($arg6));

		$arg7	 = ["color" => "black"];
		$res7	 = '<div class="progress"><div class="progress-bar bg-black" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">&nbsp;</div></div>';
		$this->assertEquals($res7, $obj->materialDesignProgressBarFunction($arg7));

		$arg9	 = ["content" => "content", "value" => 75, "min" => 1, "max" => 150, "striped" => true, "animated" => true, "color" => "black"];
		$res9	 = '<div class="progress"><div class="progress-bar bg-black progress-bar-striped active" style="width: 75%;" role="progressbar" aria-valuenow="75" aria-valuemin="1" aria-valuemax="150%">content<span class="sr-only">75 %</span></div></div>';
		$this->assertEquals($res9, $obj->materialDesignProgressBarFunction($arg9));
	}

	/**
	 * Tests the progressBarDangerFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testProgressBarDangerFunction() {

		$obj = new ProgressBarUITwigExtension();

		$arg0	 = [];
		$res0	 = '<div class="progress"><div class="progress-bar progress-bar-danger" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">&nbsp;</div></div>';
		$this->assertEquals($res0, $obj->progressBarDangerFunction($arg0));
	}

	/**
	 * Tests the progressBarInfoFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testProgressBarInfoFunction() {

		$obj = new ProgressBarUITwigExtension();

		$arg0	 = [];
		$res0	 = '<div class="progress"><div class="progress-bar progress-bar-info" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">&nbsp;</div></div>';
		$this->assertEquals($res0, $obj->progressBarInfoFunction($arg0));
	}

	/**
	 * Tests the progressBarSuccessFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testProgressBarSuccessFunction() {

		$obj = new ProgressBarUITwigExtension();

		$arg0	 = [];
		$res0	 = '<div class="progress"><div class="progress-bar progress-bar-success" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">&nbsp;</div></div>';
		$this->assertEquals($res0, $obj->progressBarSuccessFunction($arg0));
	}

	/**
	 * Tests the progressBarWarningFunction() method.
	 *
	 * @return void
	 * @depends testGetFunctions
	 */
	public function testProgressBarWarningFunction() {

		$obj = new ProgressBarUITwigExtension();

		$arg0	 = [];
		$res0	 = '<div class="progress"><div class="progress-bar progress-bar-warning" style="width: 50%;" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100%">&nbsp;</div></div>';
		$this->assertEquals($res0, $obj->progressBarWarningFunction($arg0));
	}

}
