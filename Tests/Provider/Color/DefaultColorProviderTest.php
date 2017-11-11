<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Provider\Color;

use PHPUnit_Framework_TestCase;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Color\DefaultColorProvider;

/**
 * Default color provider test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Provider\Color
 * @final
 */
final class DefaultColorProviderTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj = new DefaultColorProvider();

		$this->assertEquals(["amber" => ["500" => "#FFC107"]], $obj->getColorAmber(), "The method getColorAmber() does not return the expected value");
		$this->assertEquals(["black" => ["500" => "#000000"]], $obj->getColorBlack(), "The method getColorBlack() does not return the expected value");
		$this->assertEquals(["blue" => ["500" => "#2196F3"]], $obj->getColorBlue(), "The method getColorBlue() does not return the expected value");
		$this->assertEquals(["blue-grey" => ["500" => "#607D8B"]], $obj->getColorBlueGrey(), "The method getColorBlueGrey() does not return the expected value");
		$this->assertEquals(["brown" => ["500" => "#795548"]], $obj->getColorBrown(), "The method getColorBrown() does not return the expected value");
		$this->assertEquals(["cyan" => ["500" => "#00BCD4"]], $obj->getColorCyan(), "The method getColorCyan() does not return the expected value");
		$this->assertEquals(["deep-orange" => ["500" => "#FF5722"]], $obj->getColorDeepOrange(), "The method getColorDeepOrange() does not return the expected value");
		$this->assertEquals(["deep-purple" => ["500" => "#673AB7"]], $obj->getColorDeepPurple(), "The method getColorDeepPurple() does not return the expected value");
		$this->assertEquals(["green" => ["500" => "#4CAF50"]], $obj->getColorGreen(), "The method getColorGreen() does not return the expected value");
		$this->assertEquals(["grey" => ["500" => "#9E9E9E"]], $obj->getColorGrey(), "The method getColorGrey() does not return the expected value");
		$this->assertEquals(["indigo" => ["500" => "#3F51B5"]], $obj->getColorIndigo(), "The method getColorIndigo() does not return the expected value");
		$this->assertEquals(["light-blue" => ["500" => "#03A9F4"]], $obj->getColorLightBlue(), "The method getColorLightBlue() does not return the expected value");
		$this->assertEquals(["light-green" => ["500" => "#8BC34A"]], $obj->getColorLightGreen(), "The method getColorLightGreen() does not return the expected value");
		$this->assertEquals(["lime" => ["500" => "#CDDC39"]], $obj->getColorLime(), "The method getColorLime() does not return the expected value");
		$this->assertEquals(["orange" => ["500" => "#FF9800"]], $obj->getColorOrange(), "The method getColorOrange() does not return the expected value");
		$this->assertEquals(["pink" => ["500" => "#E91E63"]], $obj->getColorPink(), "The method getColorPink() does not return the expected value");
		$this->assertEquals(["purple" => ["500" => "#9C27B0"]], $obj->getColorPurple(), "The method getColorPurple() does not return the expected value");
		$this->assertEquals(["red" => ["500" => "#F44336"]], $obj->getColorRed(), "The method getColorRed() does not return the expected value");
		$this->assertEquals(["teal" => ["500" => "#009688"]], $obj->getColorTeal(), "The method getColorTeal() does not return the expected value");
		$this->assertEquals(["yellow" => ["500" => "#FFEB3B"]], $obj->getColorYellow(), "The method getColorYellow() does not return the expected value");
		$this->assertEquals(["white" => ["500" => "#FFFFFF"]], $obj->getColorWhite(), "The method getColorWhite() does not return the expected value");

		$this->assertCount(21, $obj->getColors(), "The method getColors() does not return the expected value");
	}

}
