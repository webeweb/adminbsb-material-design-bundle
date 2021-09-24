<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Asset\Widget;

use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Asset\Widget\TestInfobox;

/**
 * Abstract infobox test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Asset\Widget
 */
class AbstractInfoboxTest extends AbstractTestCase {

    /**
     * Tests the setClass() method.
     *
     * @return void
     */
    public function testSetClass(): void {

        $obj = new TestInfobox();

        $obj->setClass("class");
        $this->assertEquals("class", $obj->getClass());
    }

    /**
     * Tests the setColor() method.
     *
     * @return void
     */
    public function testSetColor(): void {

        $obj = new TestInfobox();

        $obj->setColor("color");
        $this->assertEquals("color", $obj->getColor());
    }

    /**
     * Tests the setContentNumber() method.
     *
     * @return void
     */
    public function testSetContentNumber(): void {

        $obj = new TestInfobox();

        $obj->setContentNumber("contentNumber");
        $this->assertEquals("contentNumber", $obj->getContentNumber());
    }

    /**
     * Tests the setContentText() method.
     *
     * @return void
     */
    public function testSetContentText(): void {

        $obj = new TestInfobox();

        $obj->setContentText("contentText");
        $this->assertEquals("contentText", $obj->getContentText());
    }

    /**
     * Tests the setIconColor() method.
     *
     * @return void
     */
    public function testSetIconColor(): void {

        $obj = new TestInfobox();

        $obj->setIconColor("iconColor");
        $this->assertEquals("iconColor", $obj->getIconColor());
    }

    /**
     * Tests the setIconName() method.
     *
     * @return void
     */
    public function testSetIconName(): void {

        $obj = new TestInfobox();

        $obj->setIconName("iconName");
        $this->assertEquals("iconName", $obj->getIconName());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestInfobox();

        $this->assertNull($obj->getClass());
        $this->assertNull($obj->getColor());
        $this->assertNull($obj->getIconColor());
        $this->assertNull($obj->getIconName());
        $this->assertNull($obj->getContentNumber());
        $this->assertNull($obj->getContentText());
    }
}
