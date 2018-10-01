<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Provider\Color;

use WBW\Bundle\AdminBSBBundle\Provider\Color\DefaultColorProvider;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractFrameworkTestCase;

/**
 * Default color provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Provider\Color
 * @final
 */
final class DefaultColorProviderTest extends AbstractFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DefaultColorProvider();

        $this->assertEquals(["amber" => ["500" => "#FFC107"]], $obj->getColorAmber());
        $this->assertEquals(["black" => ["500" => "#000000"]], $obj->getColorBlack());
        $this->assertEquals(["blue" => ["500" => "#2196F3"]], $obj->getColorBlue());
        $this->assertEquals(["blue-grey" => ["500" => "#607D8B"]], $obj->getColorBlueGrey());
        $this->assertEquals(["brown" => ["500" => "#795548"]], $obj->getColorBrown());
        $this->assertEquals(["cyan" => ["500" => "#00BCD4"]], $obj->getColorCyan());
        $this->assertEquals(["deep-orange" => ["500" => "#FF5722"]], $obj->getColorDeepOrange());
        $this->assertEquals(["deep-purple" => ["500" => "#673AB7"]], $obj->getColorDeepPurple());
        $this->assertEquals(["green" => ["500" => "#4CAF50"]], $obj->getColorGreen());
        $this->assertEquals(["grey" => ["500" => "#9E9E9E"]], $obj->getColorGrey());
        $this->assertEquals(["indigo" => ["500" => "#3F51B5"]], $obj->getColorIndigo());
        $this->assertEquals(["light-blue" => ["500" => "#03A9F4"]], $obj->getColorLightBlue());
        $this->assertEquals(["light-green" => ["500" => "#8BC34A"]], $obj->getColorLightGreen());
        $this->assertEquals(["lime" => ["500" => "#CDDC39"]], $obj->getColorLime());
        $this->assertEquals(["orange" => ["500" => "#FF9800"]], $obj->getColorOrange());
        $this->assertEquals(["pink" => ["500" => "#E91E63"]], $obj->getColorPink());
        $this->assertEquals(["purple" => ["500" => "#9C27B0"]], $obj->getColorPurple());
        $this->assertEquals(["red" => ["500" => "#F44336"]], $obj->getColorRed());
        $this->assertEquals(["teal" => ["500" => "#009688"]], $obj->getColorTeal());
        $this->assertEquals(["yellow" => ["500" => "#FFEB3B"]], $obj->getColorYellow());
        $this->assertEquals(["white" => ["500" => "#FFFFFF"]], $obj->getColorWhite());

        $this->assertCount(21, $obj->getColors());
    }

}
