<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Provider\Navigation;

use PHPUnit_Framework_TestCase;
use Symfony\Component\Config\Loader\LoaderInterface;
use Symfony\Component\Routing\RouterInterface;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Navigation\HowToNavigationProvider;
use WBW\Library\Core\Navigation\Node\BreadcrumbNode;

/**
 * How-to navigation provider test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Provider\Navigation
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
