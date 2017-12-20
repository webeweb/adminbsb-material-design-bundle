<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Provider;

use PHPUnit_Framework_TestCase;
use Twig_Environment;
use Twig_LoaderInterface;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Application\ApplicationProviderInterface;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Application\DefaultApplicationProvider;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Breadcrumbs\BreadcrumbsProviderInterface;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Breadcrumbs\DefaultBreadcrumbsProvider;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\DropDown\DefaultDropDownHookProvider;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\DropDown\DefaultDropDownNotificationsProvider;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\DropDown\DefaultDropDownTasksProvider;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\DropDown\DropDownHookProviderInterface;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\DropDown\DropDownNotificationsProviderInterface;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\DropDown\DropDownTasksProviderInterface;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Footer\DefaultFooterProvider;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Footer\FooterProviderInterface;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Navigation\DefaultNavigationProvider;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Navigation\NavigationProviderInterface;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\ProvidersManager;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Search\DefaultSearchProvider;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Search\SearchProviderInterface;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\User\DefaultUserInfoProvider;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\User\UserInfoProviderInterface;

/**
 * Providers manager test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Provider
 * @final
 */
final class ProvidersManagerTest extends PHPUnit_Framework_TestCase {

	/**
	 * Mock "Twig environment".
	 *
	 * @var Twig_Environment
	 */
	private $mockTwigEnvironment;

	/**
	 * Twig globals.
	 *
	 * @var array
	 */
	private $twigGlobals = [];

	/**
	 * {@inheritdoc}
	 */
	protected function setUp() {

		// Set the mocks.
		$mockTwigLoader				 = $this->getMockBuilder(Twig_LoaderInterface::class)->getMock();
		$this->mockTwigEnvironment	 = $this->getMockBuilder(Twig_Environment::class)->setConstructorArgs([$mockTwigLoader, []])->getMock();
		$this->mockTwigEnvironment->expects($this->any())
			->method("addGlobal")
			->willReturnCallback(function($name, $value) {
				$this->twigGlobals[$name] = $value;
			});
		$this->mockTwigEnvironment->expects($this->any())
			->method("getGlobals")
			->willReturnCallback(function() {
				return $this->twigGlobals;
			});
	}

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj = new ProvidersManager($this->mockTwigEnvironment);

		$this->assertInstanceOf(DefaultApplicationProvider::class, $obj->getApplicationProvider());
		$this->assertInstanceOf(DefaultBreadcrumbsProvider::class, $obj->getBreadcrumbsProvider());
		$this->assertInstanceOf(DefaultDropDownHookProvider::class, $obj->getDropDownHookProvider());
		$this->assertInstanceOf(DefaultDropDownNotificationsProvider::class, $obj->getDropDownNotificationsProvider());
		$this->assertInstanceOf(DefaultDropDownTasksProvider::class, $obj->getDropDownTasksProvider());
		$this->assertInstanceOf(DefaultFooterProvider::class, $obj->getFooterProvider());
		$this->assertInstanceOf(DefaultNavigationProvider::class, $obj->getNavigationProvider());
		$this->assertInstanceOf(DefaultSearchProvider::class, $obj->getSearchProvider());
		$this->assertInstanceOf(DefaultUserInfoProvider::class, $obj->getUserInfoProvider());
	}

	/**
	 * Tests the register() method.
	 *
	 * @return void
	 * @depends testConstructor
	 */
	public function testRegister() {

		$obj = new ProvidersManager($this->mockTwigEnvironment);
		$obj->register();

		$res = $this->mockTwigEnvironment->getGlobals();
		$this->assertCount(9, $res);
		$this->assertArrayHasKey("ApplicationProvider", $res);
		$this->assertInstanceOf(ApplicationProviderInterface::class, $res["ApplicationProvider"]);
		$this->assertArrayHasKey("BreadcrumbsProvider", $res);
		$this->assertInstanceOf(BreadcrumbsProviderInterface::class, $res["BreadcrumbsProvider"]);
		$this->assertArrayHasKey("DropDownHookProvider", $res);
		$this->assertInstanceOf(DropDownHookProviderInterface::class, $res["DropDownHookProvider"]);
		$this->assertArrayHasKey("DropDownNotificationsProvider", $res);
		$this->assertInstanceOf(DropDownNotificationsProviderInterface::class, $res["DropDownNotificationsProvider"]);
		$this->assertArrayHasKey("DropDownTasksProvider", $res);
		$this->assertInstanceOf(DropDownTasksProviderInterface::class, $res["DropDownTasksProvider"]);
		$this->assertArrayHasKey("FooterProvider", $res);
		$this->assertInstanceOf(FooterProviderInterface::class, $res["FooterProvider"]);
		$this->assertArrayHasKey("NavigationProvider", $res);
		$this->assertInstanceOf(NavigationProviderInterface::class, $res["NavigationProvider"]);
		$this->assertArrayHasKey("SearchProvider", $res);
		$this->assertInstanceOf(SearchProviderInterface::class, $res["SearchProvider"]);
		$this->assertArrayHasKey("UserInfoProvider", $res);
		$this->assertInstanceOf(UserInfoProviderInterface::class, $res["UserInfoProvider"]);
	}

	/**
	 * Tests the setApplicationProvider() method.
	 *
	 * @return void
	 * @depends testConstructor
	 */
	public function testSetApplicationProvider() {

		// Set the mocks.
		$provider = $this->getMockBuilder(ApplicationProviderInterface::class)->getMock();

		$obj = new ProvidersManager($this->mockTwigEnvironment);

		$obj->setApplicationProvider($provider);
		$this->assertEquals($provider, $obj->getApplicationProvider());
	}

	/**
	 * Tests the setBreadcrumbsProvider() method.
	 *
	 * @return void
	 * @depends testConstructor
	 */
	public function testSetBreadcrumbsProvider() {

		// Set the mocks.
		$provider = $this->getMockBuilder(BreadcrumbsProviderInterface::class)->getMock();

		$obj = new ProvidersManager($this->mockTwigEnvironment);

		$obj->setBreadcrumbsProvider($provider);
		$this->assertEquals($provider, $obj->getBreadcrumbsProvider());
	}

	/**
	 * Tests the setDropDownHookProvider() method.
	 *
	 * @return void
	 * @depends testConstructor
	 */
	public function testSetDropDownHookProvider() {

		// Set the mocks.
		$provider = $this->getMockBuilder(DropDownHookProviderInterface::class)->getMock();

		$obj = new ProvidersManager($this->mockTwigEnvironment);

		$obj->setDropDownHookProvider($provider);
		$this->assertEquals($provider, $obj->getDropDownHookProvider());
	}

	/**
	 * Tests the setDropDownNotificationsProvider() method.
	 *
	 * @return void
	 * @depends testConstructor
	 */
	public function testSetDropDownNotificationsProvider() {

		// Set the mocks.
		$provider = $this->getMockBuilder(DropDownNotificationsProviderInterface::class)->getMock();

		$obj = new ProvidersManager($this->mockTwigEnvironment);

		$obj->setDropDownNotificationsProvider($provider);
		$this->assertEquals($provider, $obj->getDropDownNotificationsProvider());
	}

	/**
	 * Tests the setDropDownTasksProvider() method.
	 *
	 * @return void
	 * @depends testConstructor
	 */
	public function testSetDropDownTasksProvider() {

		// Set the mocks.
		$provider = $this->getMockBuilder(DropDownTasksProviderInterface::class)->getMock();

		$obj = new ProvidersManager($this->mockTwigEnvironment);

		$obj->setDropDownTasksProvider($provider);
		$this->assertEquals($provider, $obj->getDropDownTasksProvider());
	}

	/**
	 * Tests the setFooterProvider() method.
	 *
	 * @return void
	 * @depends testConstructor
	 */
	public function testSetFooterProvider() {

		// Set the mocks.
		$provider = $this->getMockBuilder(FooterProviderInterface::class)->getMock();

		$obj = new ProvidersManager($this->mockTwigEnvironment);

		$obj->setFooterProvider($provider);
		$this->assertEquals($provider, $obj->getFooterProvider());
	}

	/**
	 * Tests the setNavigationProvider() method.
	 *
	 * @return void
	 * @depends testConstructor
	 */
	public function testSetNavigationProvider() {

		// Set the mocks.
		$provider = $this->getMockBuilder(NavigationProviderInterface::class)->getMock();

		$obj = new ProvidersManager($this->mockTwigEnvironment);

		$obj->setNavigationProvider($provider);
		$this->assertEquals($provider, $obj->getNavigationProvider());
	}

	/**
	 * Tests the setSearchProvider() method.
	 *
	 * @return void
	 * @depends testConstructor
	 */
	public function testSetSearchProvider() {

		// Set the mocks.
		$provider = $this->getMockBuilder(SearchProviderInterface::class)->getMock();

		$obj = new ProvidersManager($this->mockTwigEnvironment);

		$obj->setSearchProvider($provider);
		$this->assertEquals($provider, $obj->getSearchProvider());
	}

	/**
	 * Tests the setUserInfoProvider() method.
	 *
	 * @return void
	 * @depends testConstructor
	 */
	public function testSetUserInfoProvider() {

		// Set the mocks.
		$provider = $this->getMockBuilder(UserInfoProviderInterface::class)->getMock();

		$obj = new ProvidersManager($this->mockTwigEnvironment);

		$obj->setUserInfoProvider($provider);
		$this->assertEquals($provider, $obj->getUserInfoProvider());
	}

}
