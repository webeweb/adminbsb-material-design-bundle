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
use WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Twig\Extension\Form\TestCheckboxTwigExtensionTrait;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Form\CheckboxTwigExtension;

/**
 * Checkbox Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Form
 */
class CheckboxTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestCheckboxTwigExtensionTrait();

        $this->assertNull($obj->getCheckboxTwigExtension());
    }

    /**
     * Tests the setCheckboxTwigExtension() method.
     *
     * @return void
     */
    public function testSetCheckboxTwigExtension() {

        // Set a Checkbox Twig extension mock.
        $checkboxTwigExtension = new CheckboxTwigExtension($this->twigEnvironment);

        $obj = new TestCheckboxTwigExtensionTrait();

        $obj->setCheckboxTwigExtension($checkboxTwigExtension);
        $this->assertSame($checkboxTwigExtension, $obj->getCheckboxTwigExtension());
    }
}
