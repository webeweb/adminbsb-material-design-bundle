<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI;

use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Twig\Extension\UI\TestBadgeTwigExtensionTrait;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\BadgeTwigExtension;

/**
 * Badge Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI
 */
class BadgeTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the setBadgeTwigExtension() method.
     *
     * @return void
     */
    public function testSetBadgeTwigExtension() {

        // Set a Badge Twig extension mock.
        $badgeTwigExtension = new BadgeTwigExtension($this->twigEnvironment);

        $obj = new TestBadgeTwigExtensionTrait();

        $obj->setBadgeTwigExtension($badgeTwigExtension);
        $this->assertSame($badgeTwigExtension, $obj->getBadgeTwigExtension());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new TestBadgeTwigExtensionTrait();

        $this->assertNull($obj->getBadgeTwigExtension());
    }
}
