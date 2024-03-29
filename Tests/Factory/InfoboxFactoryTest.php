<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Factory;

use WBW\Bundle\AdminBSBBundle\Assets\Widget\Infobox1;
use WBW\Bundle\AdminBSBBundle\Assets\Widget\Infobox2;
use WBW\Bundle\AdminBSBBundle\Assets\Widget\Infobox3;
use WBW\Bundle\AdminBSBBundle\Assets\Widget\Infobox4;
use WBW\Bundle\AdminBSBBundle\Assets\Widget\Infobox5;
use WBW\Bundle\AdminBSBBundle\Factory\InfoboxFactory;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;

/**
 * Infobox factory test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Factory
 */
class InfoboxFactoryTest extends AbstractTestCase {

    /**
     * Arguments.
     *
     * @var array
     */
    private $args;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set the Arguments mock.
        $this->args = [
            "color"             => "color",
            "contentNumber"     => "contentNumber",
            "contentText"       => "contentText",
            "iconColor"         => "iconColor",
            "iconName"          => "iconName",
            "countTo"           => [
                "data-from"           => 0,
                "data-to"             => 125,
                "data-speed"          => 1000,
                "data-fresh-interval" => 20,
            ],
            "hoverExpandEffect" => true,
            "hoverZoomEffect"   => true,
        ];
    }

    /**
     * Test newInfobox1()
     *
     * @retun void
     */
    public function testNewInfobox1(): void {

        $obj = InfoboxFactory::newInfobox1();

        $this->assertInstanceOf(Infobox1::class, $obj);
    }

    /**
     * Test newInfobox2()
     *
     * @retun void
     */
    public function testNewInfobox2(): void {

        $obj = InfoboxFactory::newInfobox2();

        $this->assertInstanceOf(Infobox2::class, $obj);
    }

    /**
     * Test newInfobox3()
     *
     * @retun void
     */
    public function testNewInfobox3(): void {

        $obj = InfoboxFactory::newInfobox3();

        $this->assertInstanceOf(Infobox3::class, $obj);
    }

    /**
     * Test newInfobox4()
     *
     * @retun void
     */
    public function testNewInfobox4(): void {

        $obj = InfoboxFactory::newInfobox4();

        $this->assertInstanceOf(Infobox4::class, $obj);
    }

    /**
     * Test newInfobox5()
     *
     * @retun void
     */
    public function testNewInfobox5(): void {

        $obj = InfoboxFactory::newInfobox5();

        $this->assertInstanceOf(Infobox5::class, $obj);
    }

    /**
     * Test parseInfobox1()
     *
     * @return void
     */
    public function testParseInfobox1(): void {

        $obj = InfoboxFactory::parseInfobox1($this->args);

        $this->assertInstanceOf(Infobox1::class, $obj);

        $this->assertEquals($this->args["color"], $obj->getColor());
        $this->assertEquals($this->args["contentNumber"], $obj->getContentNumber());
        $this->assertEquals($this->args["contentText"], $obj->getContentText());
        $this->assertEquals($this->args["iconColor"], $obj->getIconColor());
        $this->assertEquals($this->args["iconName"], $obj->getIconName());

        $this->assertEquals($this->args["countTo"], $obj->getCountTo());
        $this->assertEquals($this->args["hoverExpandEffect"], $obj->getHoverExpandEffect());
        $this->assertEquals($this->args["hoverZoomEffect"], $obj->getHoverZoomEffect());
    }

    /**
     * Test parseInfobox2()
     *
     * @return void
     */
    public function testParseInfobox2(): void {

        $obj = InfoboxFactory::parseInfobox2($this->args);

        $this->assertInstanceOf(Infobox2::class, $obj);

        $this->assertEquals($this->args["color"], $obj->getColor());
        $this->assertEquals($this->args["contentNumber"], $obj->getContentNumber());
        $this->assertEquals($this->args["contentText"], $obj->getContentText());
        $this->assertEquals($this->args["iconColor"], $obj->getIconColor());
        $this->assertEquals($this->args["iconName"], $obj->getIconName());

        $this->assertEquals($this->args["countTo"], $obj->getCountTo());
        $this->assertEquals($this->args["hoverExpandEffect"], $obj->getHoverExpandEffect());
        $this->assertEquals($this->args["hoverZoomEffect"], $obj->getHoverZoomEffect());
    }

    /**
     * Test parseInfobox3()
     *
     * @return void
     */
    public function testParseInfobox3(): void {

        $obj = InfoboxFactory::parseInfobox3($this->args);

        $this->assertInstanceOf(Infobox3::class, $obj);

        $this->assertEquals($this->args["color"], $obj->getColor());
        $this->assertEquals($this->args["contentNumber"], $obj->getContentNumber());
        $this->assertEquals($this->args["contentText"], $obj->getContentText());
        $this->assertEquals($this->args["iconColor"], $obj->getIconColor());
        $this->assertEquals($this->args["iconName"], $obj->getIconName());

        $this->assertEquals($this->args["countTo"], $obj->getCountTo());
        $this->assertEquals($this->args["hoverExpandEffect"], $obj->getHoverExpandEffect());
        $this->assertEquals($this->args["hoverZoomEffect"], $obj->getHoverZoomEffect());
    }

    /**
     * Test parseInfobox4()
     *
     * @return void
     */
    public function testParseInfobox4(): void {

        $obj = InfoboxFactory::parseInfobox4($this->args);

        $this->assertInstanceOf(Infobox4::class, $obj);

        $this->assertEquals($this->args["color"], $obj->getColor());
        $this->assertEquals($this->args["contentNumber"], $obj->getContentNumber());
        $this->assertEquals($this->args["contentText"], $obj->getContentText());
        $this->assertEquals($this->args["iconColor"], $obj->getIconColor());
        $this->assertEquals($this->args["iconName"], $obj->getIconName());

        $this->assertEquals($this->args["countTo"], $obj->getCountTo());
        $this->assertEquals($this->args["hoverExpandEffect"], $obj->getHoverExpandEffect());
        $this->assertEquals($this->args["hoverZoomEffect"], $obj->getHoverZoomEffect());
    }

    /**
     * Test parseInfobox5()
     *
     * @return void
     */
    public function testParseInfobox5(): void {

        $obj = InfoboxFactory::parseInfobox5($this->args);

        $this->assertInstanceOf(Infobox5::class, $obj);

        $this->assertEquals($this->args["color"], $obj->getColor());
        $this->assertEquals($this->args["contentNumber"], $obj->getContentNumber());
        $this->assertEquals($this->args["contentText"], $obj->getContentText());
        $this->assertEquals($this->args["iconColor"], $obj->getIconColor());
        $this->assertEquals($this->args["iconName"], $obj->getIconName());

        $this->assertEquals($this->args["countTo"], $obj->getCountTo());
        $this->assertEquals($this->args["hoverExpandEffect"], $obj->getHoverExpandEffect());
        $this->assertEquals($this->args["hoverZoomEffect"], $obj->getHoverZoomEffect());
    }
}
