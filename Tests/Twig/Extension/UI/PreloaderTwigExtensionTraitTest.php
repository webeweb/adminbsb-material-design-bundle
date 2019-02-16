<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI;

use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Twig\Extension\UI\TestPreloaderTwigExtensionTrait;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\PreloaderTwigExtension;

/**
 * Preloader Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI
 */
class PreloaderTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new TestPreloaderTwigExtensionTrait();

        $this->assertNull($obj->getPreloaderTwigExtension());
    }

    /**
     * Tests the setPreloaderTwigExtension() method.
     *
     * @return void
     */
    public function testSetPreloaderTwigExtension() {

        // Set a Preloader Twig extension mock.
        $preloaderTwigExtension = new PreloaderTwigExtension($this->twigEnvironment);

        $obj = new TestPreloaderTwigExtensionTrait();

        $obj->setPreloaderTwigExtension($preloaderTwigExtension);
        $this->assertSame($preloaderTwigExtension, $obj->getPreloaderTwigExtension());
    }
}
