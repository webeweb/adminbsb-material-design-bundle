<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\DependencyInjection;

use Symfony\Component\Config\FileLocator;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\DependencyInjection\Extension\Extension;
use Symfony\Component\DependencyInjection\Loader\YamlFileLoader;

/**
 * AdminBSB Material Design extension.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\DependencyInjection
 * @final
 */
final class ABSBMDExtension extends Extension {

	/**
	 * {@inheritdoc}
	 */
	public function load(array $configs, ContainerBuilder $container) {

		// Create the file locator.
		$fileLocator = new FileLocator(__DIR__ . "/../Resources/config");

		// Load the services.
		$serviceLoader = new YamlFileLoader($container, $fileLocator);
		$serviceLoader->load("services.yml");
	}

}
