<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\DependencyInjection;

use PHPUnit_Framework_TestCase;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\ParameterBag\ParameterBag;
use Symfony\Component\HttpKernel\Kernel;
use Twig_Environment;
use Twig_LoaderInterface;
use WBW\Bundle\AdminBSBMaterialDesignBundle\DependencyInjection\ABSBMDExtension;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Setter\ProvidersSetter;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Form\CheckboxFormTwigExtension;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Form\RadioButtonFormTwigExtension;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Form\SwitchButtonFormTwigExtension;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Typography\HeadingTypographyTwigExtension;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI\AlertUITwigExtension;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI\BadgeUITwigExtension;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI\ButtonUITwigExtension;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI\ColorUITwigExtension;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI\IconUITwigExtension;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI\LabelUITwigExtension;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI\ModalUITwigExtension;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI\PreloaderUITwigExtension;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI\ProgressBarUITwigExtension;

/**
 * AdminBSB Material Design extension test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\DependencyInjection
 * @final
 */
final class ABSBMDExtensionTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the load() method.
	 *
	 * @return void
	 */
	public function testLoad() {

		// Set the mocks.
		$kernel			 = $this->getMockBuilder(Kernel::class)->setConstructorArgs(["dev", false])->getMock();
		$twigLoader		 = $this->getMockBuilder(Twig_LoaderInterface::class)->getMock();
		$twigEnvironment = $this->getMockBuilder(Twig_Environment::class)->setConstructorArgs([$twigLoader, []])->getMock();

		// We set a container builder with only the necessary.
		$container = new ContainerBuilder(new ParameterBag(["kernel.environment" => "dev"]));
		$container->set("kernel", $kernel);
		$container->set("twig", $twigEnvironment);

		$obj = new ABSBMDExtension();

		$obj->load([], $container);
		$this->assertInstanceOf(ProvidersSetter::class, $container->get(ProvidersSetter::SERVICE_NAME));
		$this->assertInstanceOf(CheckboxFormTwigExtension::class, $container->get(CheckboxFormTwigExtension::SERVICE_NAME));
		$this->assertInstanceOf(RadioButtonFormTwigExtension::class, $container->get(RadioButtonFormTwigExtension::SERVICE_NAME));
		$this->assertInstanceOf(SwitchButtonFormTwigExtension::class, $container->get(SwitchButtonFormTwigExtension::SERVICE_NAME));
		$this->assertInstanceOf(HeadingTypographyTwigExtension::class, $container->get(HeadingTypographyTwigExtension::SERVICE_NAME));
		$this->assertInstanceOf(AlertUITwigExtension::class, $container->get(AlertUITwigExtension::SERVICE_NAME));
		$this->assertInstanceOf(BadgeUITwigExtension::class, $container->get(BadgeUITwigExtension::SERVICE_NAME));
		$this->assertInstanceOf(ButtonUITwigExtension::class, $container->get(ButtonUITwigExtension::SERVICE_NAME));
		$this->assertInstanceOf(ColorUITwigExtension::class, $container->get(ColorUITwigExtension::SERVICE_NAME));
		$this->assertInstanceOf(IconUITwigExtension::class, $container->get(IconUITwigExtension::SERVICE_NAME));
		$this->assertInstanceOf(LabelUITwigExtension::class, $container->get(LabelUITwigExtension::SERVICE_NAME));
		$this->assertInstanceOf(ModalUITwigExtension::class, $container->get(ModalUITwigExtension::SERVICE_NAME));
		$this->assertInstanceOf(PreloaderUITwigExtension::class, $container->get(PreloaderUITwigExtension::SERVICE_NAME));
		$this->assertInstanceOf(ProgressBarUITwigExtension::class, $container->get(ProgressBarUITwigExtension::SERVICE_NAME));
	}

}
