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
	 * Twiog environment.
	 *
	 * @var Twig_Environment
	 */
	private $twigEnvironment;

	/**
	 * Twig loader.
	 *
	 * @var Twig_Loader
	 */
	private $twigLoader;

	/**
	 * Set up.
	 *
	 * @return void.
	 */
	public function setUp() {
		$this->twigLoader		 = $this->getMockBuilder(Twig_LoaderInterface::class)->getMock();
		$this->twigEnvironment	 = $this->getMockBuilder(Twig_Environment::class)->setConstructorArgs([$this->twigLoader, []])->getMock();
	}

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj = new ProvidersManager($this->twigEnvironment);

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
	 * Tests the setApplicationProvider() method.
	 *
	 * @return void
	 * @depends testConstructor
	 */
	public function testSetApplicationProvider() {

		// Set the mocks.
		$provider = $this->getMockBuilder(ApplicationProviderInterface::class)->getMock();

		$obj = new ProvidersManager($this->twigEnvironment);

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

		$obj = new ProvidersManager($this->twigEnvironment);

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

		$obj = new ProvidersManager($this->twigEnvironment);

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

		$obj = new ProvidersManager($this->twigEnvironment);

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

		$obj = new ProvidersManager($this->twigEnvironment);

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

		$obj = new ProvidersManager($this->twigEnvironment);

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

		$obj = new ProvidersManager($this->twigEnvironment);

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

		$obj = new ProvidersManager($this->twigEnvironment);

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

		$obj = new ProvidersManager($this->twigEnvironment);

		$obj->setUserInfoProvider($provider);
		$this->assertEquals($provider, $obj->getUserInfoProvider());
	}

}
