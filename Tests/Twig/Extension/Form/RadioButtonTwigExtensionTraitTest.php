<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Form;

use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Twig\Extension\Form\TestRadioButtonTwigExtensionTrait;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Form\RadioButtonTwigExtension;

/**
 * Radio button Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Form
 */
class RadioButtonTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the setRadioButtonTwigExtension() method.
     *
     * @return void
     */
    public function testSetRadioButtonTwigExtension() {

        // Set a Radio button Twig extension mock.
        $radioButtonTwigExtension = new RadioButtonTwigExtension($this->twigEnvironment);

        $obj = new TestRadioButtonTwigExtensionTrait();

        $obj->setRadioButtonTwigExtension($radioButtonTwigExtension);
        $this->assertSame($radioButtonTwigExtension, $obj->getRadioButtonTwigExtension());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new TestRadioButtonTwigExtensionTrait();

        $this->assertNull($obj->getRadioButtonTwigExtension());
    }
}
