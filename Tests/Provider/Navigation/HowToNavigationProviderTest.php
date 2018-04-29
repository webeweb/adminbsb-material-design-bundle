<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Provider\Navigation;

use PHPUnit_Framework_TestCase;
use Symfony\Component\Routing\RouterInterface;
use WBW\Bundle\AdminBSBBundle\Provider\Navigation\HowToNavigationProvider;
use WBW\Bundle\BootstrapBundle\Navigation\BreadcrumbNode;

/**
 * How-to navigation provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Provider\Navigation
 * @final
 */
final class HowToNavigationProviderTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getBreadcrumb() method.
     *
     * @return void
     */
    public function testGetBreadcrumb() {

        // Set the mocks.
        $router = $this->getMockBuilder(RouterInterface::class)->getMock();

        $obj = new HowToNavigationProvider($router);

        $res = $obj->getBreadcrumb();
        $this->assertInstanceOf(BreadcrumbNode::class, $res);
        $this->assertCount(18, $res->getNodes());
        $this->assertEquals("navigation.how-to", $res->getId());
        $this->assertEquals("book", $res->getIcon());
    }

}
