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
use WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Twig\Extension\Form\TestSwitchButtonTwigExtensionTrait;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Form\SwitchButtonTwigExtension;

/**
 * Switch button Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Form
 */
class SwitchButtonTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestSwitchButtonTwigExtensionTrait();

        $this->assertNull($obj->getSwitchButtonTwigExtension());
    }

    /**
     * Tests the setSwitchButtonTwigExtension() method.
     *
     * @return void
     */
    public function testSetSwitchButtonTwigExtension() {

        // Set a Switch button Twig extension mock.
        $switchButtonTwigExtension = new SwitchButtonTwigExtension($this->twigEnvironment);

        $obj = new TestSwitchButtonTwigExtensionTrait();

        $obj->setSwitchButtonTwigExtension($switchButtonTwigExtension);
        $this->assertSame($switchButtonTwigExtension, $obj->getSwitchButtonTwigExtension());
    }

}