<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Assets;

use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Assets\TestInfobox;

/**
 * Abstract infobox test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Assets
 */
class AbstractInfoboxTest extends AbstractTestCase {

    /**
     * Test setClass()
     *
     * @return void
     */
    public function testSetClass(): void {

        $obj = new TestInfobox();

        $obj->setClass("class");
        $this->assertEquals("class", $obj->getClass());
    }

    /**
     * Test setColor()
     *
     * @return void
     */
    public function testSetColor(): void {

        $obj = new TestInfobox();

        $obj->setColor("color");
        $this->assertEquals("color", $obj->getColor());
    }

    /**
     * Test setContentNumber()
     *
     * @return void
     */
    public function testSetContentNumber(): void {

        $obj = new TestInfobox();

        $obj->setContentNumber("contentNumber");
        $this->assertEquals("contentNumber", $obj->getContentNumber());
    }

    /**
     * Test setContentText()
     *
     * @return void
     */
    public function testSetContentText(): void {

        $obj = new TestInfobox();

        $obj->setContentText("contentText");
        $this->assertEquals("contentText", $obj->getContentText());
    }

    /**
     * Test setCountTo()
     *
     * @return void
     */
    public function testSetCountTo(): void {

        $obj = new TestInfobox();

        $obj->setCountTo([]);
        $this->assertEquals([], $obj->getCountTo());
    }

    /**
     * Test setHoverExpandEffect()
     *
     * @return void
     */
    public function testSetHoverExpandEffect(): void {

        $obj = new TestInfobox();

        $obj->setHoverExpandEffect(true);
        $this->assertTrue($obj->getHoverExpandEffect());
    }

    /**
     * Test setHoverZoomEffect()
     *
     * @return void
     */
    public function testSetHoverZoomEffect(): void {

        $obj = new TestInfobox();

        $obj->setHoverZoomEffect(true);
        $this->assertTrue($obj->getHoverZoomEffect());
    }

    /**
     * Test setIconColor()
     *
     * @return void
     */
    public function testSetIconColor(): void {

        $obj = new TestInfobox();

        $obj->setIconColor("iconColor");
        $this->assertEquals("iconColor", $obj->getIconColor());
    }

    /**
     * Test setIconName()
     *
     * @return void
     */
    public function testSetIconName(): void {

        $obj = new TestInfobox();

        $obj->setIconName("iconName");
        $this->assertEquals("iconName", $obj->getIconName());
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $obj = new TestInfobox();

        $this->assertNull($obj->getClass());
        $this->assertNull($obj->getColor());
        $this->assertNull($obj->getCountTo());
        $this->assertNull($obj->getIconColor());
        $this->assertNull($obj->getIconName());
        $this->assertNull($obj->getContentNumber());
        $this->assertNull($obj->getContentText());
        $this->assertNull($obj->getHoverExpandEffect());
        $this->assertNull($obj->getHoverZoomEffect());
    }
}
