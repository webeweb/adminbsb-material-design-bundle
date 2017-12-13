<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\EventListener\Kernel;

use PHPUnit_Framework_TestCase;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpKernel\Event\GetResponseEvent;
use Symfony\Component\HttpKernel\HttpKernelInterface;
use Symfony\Component\Security\Core\Authentication\Token\Storage\TokenStorageInterface;
use Symfony\Component\Security\Core\Authentication\Token\TokenInterface;
use Symfony\Component\Security\Core\User\UserInterface;
use Twig_Environment;
use Twig_LoaderInterface;
use WBW\Bundle\AdminBSBMaterialDesignBundle\EventListener\Kernel\KernelEventListener;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\ProvidersManager;

/**
 * Kernel event listener test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\EventListener\Kernel
 * @final
 */
final class KernelEventListenerTest extends PHPUnit_Framework_TestCase {

	/**
	 * Mock "Token storage".
	 *
	 * @var TokenStorageInterface
	 */
	private $mockTokenStorage;

	/**
	 * Providers manager.
	 *
	 * @var ProviderManager
	 */
	private $providersManager;

	/**
	 * Twig globals.
	 *
	 * @var array
	 */
	private $twigGlobals = [];

	/**
	 * User.
	 *
	 * @var UserInterface
	 */
	private $user;

	/**
	 * {@inheritdoc}
	 */
	public function setUp() {

		// Set the mocks.
		$mockTwigLoader		 = $this->getMockBuilder(Twig_LoaderInterface::class)->getMock();
		$mockTwigEnvironment = $this->getMockBuilder(Twig_Environment::class)->setConstructorArgs([$mockTwigLoader, []])->getMock();
		$mockTwigEnvironment->expects($this->any())
			->method("addGlobal")
			->willReturnCallback(function($name, $value) {
				$this->twigGlobals[$name] = $value;
			});
		$mockTwigEnvironment->expects($this->any())
			->method("getGlobals")
			->willReturnCallback(function() {
				return $this->twigGlobals;
			});

		$this->providersManager = new ProvidersManager($mockTwigEnvironment);

		$mockToken = $this->getMockBuilder(TokenInterface::class)->getMock();
		$mockToken->expects($this->any())
			->method("getUser")
			->willReturnCallback(function() {
				return $this->user;
			});

		$this->mockTokenStorage = $this->getMockBuilder(TokenStorageInterface::class)->getMock();
		$this->mockTokenStorage->expects($this->any())
			->method("getToken")
			->willReturn($mockToken);
	}

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj = new KernelEventListener($this->mockTokenStorage, $this->providersManager);

		$this->assertEquals(null, $obj->getRequest());
		$this->assertEquals(null, $obj->getUser());
	}

	/**
	 * Tests the getUser() method.
	 *
	 * @return void.
	 * @depends testConstructor
	 */
	public function testGetUser() {

		$obj = new KernelEventListener($this->mockTokenStorage, $this->providersManager);

		$this->user = null;
		$this->assertNull(null, $obj->getUser());

		$this->user = $this->getMockBuilder(UserInterface::class)->getMock();
		$this->assertNotNull($obj->getUser());
	}

	/**
	 * Tests the onKernelRequest() method.
	 *
	 * @return void
	 * @depends testConstructor
	 */
	public function testOnKernelRequest() {

		// Set the mocks.
		$httpKernel = $this->getMockBuilder(HttpKernelInterface::class)->getMock();

		$obj = new KernelEventListener($this->mockTokenStorage, $this->providersManager);

		$obj->onKernelRequest(new GetResponseEvent($httpKernel, new Request(), "GET"));
		$this->assertInstanceOf(Request::class, $obj->getRequest());
	}

}
