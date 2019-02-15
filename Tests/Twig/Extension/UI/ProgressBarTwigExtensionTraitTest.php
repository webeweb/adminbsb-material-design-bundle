<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Twig\Extension\UI;

use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Twig\Extension\UI\TestProgressBarTwigExtensionTrait;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ProgressBarTwigExtension;

/**
 * Progress bar Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package Twig\Extension\UI
 */
class ProgressBarTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestProgressBarTwigExtensionTrait();

        $this->assertNull($obj->getProgressBarTwigExtension());
    }

    /**
     * Tests the setProgressBarTwigExtension() method.
     *
     * @return void
     */
    public function testSetProgressBarTwigExtension() {

        // Set a Progress bar Twig extension mock.
        $progressBarTwigExtension = new ProgressBarTwigExtension($this->twigEnvironment);

        $obj = new TestProgressBarTwigExtensionTrait();

        $obj->setProgressBarTwigExtension($progressBarTwigExtension);
        $this->assertSame($progressBarTwigExtension, $obj->getProgressBarTwigExtension());
    }
}