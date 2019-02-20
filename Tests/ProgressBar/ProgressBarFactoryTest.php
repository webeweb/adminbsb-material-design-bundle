<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\ProgressBar;

use WBW\Bundle\AdminBSBBundle\ProgressBar\MaterialDesignProgressBar;
use WBW\Bundle\AdminBSBBundle\ProgressBar\ProgressBarFactory;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;

/**
 * Progress bar factory test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\ProgressBar
 */
class ProgressBarFactoryTest extends AbstractTestCase {

    /**
     * Arguments.
     *
     * @var array
     */
    private $args;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set the Arguments mock.
        $this->args = [
            "color"    => "pink",
            "content"  => "content",
            "value"    => 25,
            "min"      => 0,
            "max"      => 1000,
            "animated" => true,
            "striped"  => true,
        ];
    }

    /**
     * Tests the newMaterialDesignProgressBar() method.
     *
     * @return void
     */
    public function testNewMaterialDesignProgressBar() {

        $obj = ProgressBarFactory::newMaterialDesignProgressBar("color");

        $this->assertInstanceOf(MaterialDesignProgressBar::class, $obj);
    }

    /**
     * Tests the parseMaterialDesignProgressBar() method.
     *
     * @return void
     */
    public function testParseMaterialDesignProgressBar() {

        $obj = ProgressBarFactory::parseMaterialDesignProgressBar($this->args);

        $this->assertInstanceOf(MaterialDesignProgressBar::class, $obj);

        $this->assertEquals($this->args["animated"], $obj->getAnimated());
        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["max"], $obj->getMax());
        $this->assertEquals($this->args["min"], $obj->getMin());
        $this->assertEquals($this->args["striped"], $obj->getStriped());
        $this->assertEquals($this->args["value"], $obj->getValue());
        $this->assertEquals("pink", $obj->getType());
    }

}
