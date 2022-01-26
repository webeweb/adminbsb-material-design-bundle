<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Asset\Color;

use WBW\Bundle\AdminBSBBundle\Asset\Color\ColorHelper;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;

/**
 * Color helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Asset\Color
 */
class ColorHelperTest extends AbstractTestCase {

    public function testMaterialDesignColor(): void {

        $this->assertEquals("red", ColorHelper::materialDesignColor(null));
        $this->assertEquals("red", ColorHelper::materialDesignColor("exception"));

        $this->assertEquals("red", ColorHelper::materialDesignColor("red"));
        $this->assertEquals("pink", ColorHelper::materialDesignColor("pink"));
        $this->assertEquals("purple", ColorHelper::materialDesignColor("purple"));
        $this->assertEquals("deep-purple", ColorHelper::materialDesignColor("deep-purple"));
        $this->assertEquals("indigo", ColorHelper::materialDesignColor("indigo"));
        $this->assertEquals("blue", ColorHelper::materialDesignColor("blue"));
        $this->assertEquals("light-blue", ColorHelper::materialDesignColor("light-blue"));
        $this->assertEquals("cyan", ColorHelper::materialDesignColor("cyan"));
        $this->assertEquals("teal", ColorHelper::materialDesignColor("teal"));
        $this->assertEquals("green", ColorHelper::materialDesignColor("green"));
        $this->assertEquals("light-green", ColorHelper::materialDesignColor("light-green"));
        $this->assertEquals("lime", ColorHelper::materialDesignColor("lime"));
        $this->assertEquals("yellow", ColorHelper::materialDesignColor("yellow"));
        $this->assertEquals("amber", ColorHelper::materialDesignColor("amber"));
        $this->assertEquals("orange", ColorHelper::materialDesignColor("orange"));
        $this->assertEquals("deep-orange", ColorHelper::materialDesignColor("deep-orange"));
        $this->assertEquals("brown", ColorHelper::materialDesignColor("brown"));
        $this->assertEquals("grey", ColorHelper::materialDesignColor("grey"));
        $this->assertEquals("blue-grey", ColorHelper::materialDesignColor("blue-grey"));
        $this->assertEquals("black", ColorHelper::materialDesignColor("black"));
        $this->assertEquals("white", ColorHelper::materialDesignColor("white"));

        $this->assertEquals("bg-red", ColorHelper::materialDesignColor("red", "bg-"));
        $this->assertEquals("bg-pink", ColorHelper::materialDesignColor("pink", "bg-"));
        $this->assertEquals("bg-purple", ColorHelper::materialDesignColor("purple", "bg-"));
        $this->assertEquals("bg-deep-purple", ColorHelper::materialDesignColor("deep-purple", "bg-"));
        $this->assertEquals("bg-indigo", ColorHelper::materialDesignColor("indigo", "bg-"));
        $this->assertEquals("bg-blue", ColorHelper::materialDesignColor("blue", "bg-"));
        $this->assertEquals("bg-light-blue", ColorHelper::materialDesignColor("light-blue", "bg-"));
        $this->assertEquals("bg-cyan", ColorHelper::materialDesignColor("cyan", "bg-"));
        $this->assertEquals("bg-teal", ColorHelper::materialDesignColor("teal", "bg-"));
        $this->assertEquals("bg-green", ColorHelper::materialDesignColor("green", "bg-"));
        $this->assertEquals("bg-light-green", ColorHelper::materialDesignColor("light-green", "bg-"));
        $this->assertEquals("bg-lime", ColorHelper::materialDesignColor("lime", "bg-"));
        $this->assertEquals("bg-yellow", ColorHelper::materialDesignColor("yellow", "bg-"));
        $this->assertEquals("bg-amber", ColorHelper::materialDesignColor("amber", "bg-"));
        $this->assertEquals("bg-orange", ColorHelper::materialDesignColor("orange", "bg-"));
        $this->assertEquals("bg-deep-orange", ColorHelper::materialDesignColor("deep-orange", "bg-"));
        $this->assertEquals("bg-brown", ColorHelper::materialDesignColor("brown", "bg-"));
        $this->assertEquals("bg-grey", ColorHelper::materialDesignColor("grey", "bg-"));
        $this->assertEquals("bg-blue-grey", ColorHelper::materialDesignColor("blue-grey", "bg-"));
        $this->assertEquals("bg-black", ColorHelper::materialDesignColor("black", "bg-"));
        $this->assertEquals("bg-white", ColorHelper::materialDesignColor("white", "bg-"));

        $this->assertEquals("col-red", ColorHelper::materialDesignColor("red", "col-"));
        $this->assertEquals("col-pink", ColorHelper::materialDesignColor("pink", "col-"));
        $this->assertEquals("col-purple", ColorHelper::materialDesignColor("purple", "col-"));
        $this->assertEquals("col-deep-purple", ColorHelper::materialDesignColor("deep-purple", "col-"));
        $this->assertEquals("col-indigo", ColorHelper::materialDesignColor("indigo", "col-"));
        $this->assertEquals("col-blue", ColorHelper::materialDesignColor("blue", "col-"));
        $this->assertEquals("col-light-blue", ColorHelper::materialDesignColor("light-blue", "col-"));
        $this->assertEquals("col-cyan", ColorHelper::materialDesignColor("cyan", "col-"));
        $this->assertEquals("col-teal", ColorHelper::materialDesignColor("teal", "col-"));
        $this->assertEquals("col-green", ColorHelper::materialDesignColor("green", "col-"));
        $this->assertEquals("col-light-green", ColorHelper::materialDesignColor("light-green", "col-"));
        $this->assertEquals("col-lime", ColorHelper::materialDesignColor("lime", "col-"));
        $this->assertEquals("col-yellow", ColorHelper::materialDesignColor("yellow", "col-"));
        $this->assertEquals("col-amber", ColorHelper::materialDesignColor("amber", "col-"));
        $this->assertEquals("col-orange", ColorHelper::materialDesignColor("orange", "col-"));
        $this->assertEquals("col-deep-orange", ColorHelper::materialDesignColor("deep-orange", "col-"));
        $this->assertEquals("col-brown", ColorHelper::materialDesignColor("brown", "col-"));
        $this->assertEquals("col-grey", ColorHelper::materialDesignColor("grey", "col-"));
        $this->assertEquals("col-blue-grey", ColorHelper::materialDesignColor("blue-grey", "col-"));
        $this->assertEquals("col-black", ColorHelper::materialDesignColor("black", "col-"));
        $this->assertEquals("col-white", ColorHelper::materialDesignColor("white", "col-"));
    }
}
