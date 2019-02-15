<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Button;

use WBW\Bundle\AdminBSBBundle\Button\ButtonFactory;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\BootstrapBundle\Button\ButtonInterface;

/**
 * Button factory test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Button
 */
class ButtonFactoryTest extends AbstractTestCase {

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
            "content"  => "content",
            "title"    => "title",
            "size"     => "lg",
            "block"    => true,
            "active"   => true,
            "disabled" => true,
            "color"    => "color",
        ];
    }

    /**
     * Tests the newMaterialDesignButton() method.
     *
     * @return void
     */
    public function testNewMaterialDesignButton() {

        $obj = ButtonFactory::newMaterialDesignButton("color");

        $this->assertInstanceOf(ButtonInterface::class, $obj);
        $this->assertEquals("color", $obj->getType());
    }

    /**
     * Tests the parseMaterialDesignButton() method.
     *
     * @return void
     */
    public function testParseMaterialDesignButton() {

        $obj = ButtonFactory::parseMaterialDesignButton($this->args);

        $this->assertInstanceOf(ButtonInterface::class, $obj);

        $this->assertEquals($this->args["active"], $obj->getActive());
        $this->assertEquals($this->args["block"], $obj->getBlock());
        $this->assertEquals($this->args["content"], $obj->getContent());
        $this->assertEquals($this->args["disabled"], $obj->getDisabled());
        $this->assertEquals($this->args["size"], $obj->getSize());
        $this->assertEquals($this->args["title"], $obj->getTitle());
        $this->assertEquals("color", $obj->getType());
    }
}
