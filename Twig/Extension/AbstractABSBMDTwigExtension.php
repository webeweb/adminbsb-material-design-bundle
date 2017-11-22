<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension;

use Twig_Extension;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Color\DefaultColorProvider;

/**
 * Abstract AdminBSB Material Design Twig extension.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension
 * @abstract
 */
abstract class AbstractABSBMDTwigExtension extends Twig_Extension {

	/**
	 * Default content.
	 */
	const DEFAULT_CONTENT = "&nbsp;";

	/**
	 * Constructor.
	 */
	protected function __construct() {
		// NOTHING TO DO.
	}

	/**
	 * Get an argument.
	 *
	 * @param array $arguments The arguments.
	 * @param string $name The argument name.
	 * @param mixed $default The default value.
	 * @return mixed Returns the value in case of success, $default otherwise.
	 */
	protected final function getArg(array $arguments, $name, $default = null) {
		return isset($arguments[$name]) ? $arguments[$name] : $default;
	}

	/**
	 * Get a color.
	 *
	 * @param string $name The color name.
	 * @param string $prefix The color prefix.
	 * @return string Returns the color in case of success, "" otherwise.
	 */
	protected final function getColor($name, $prefix = "") {
		if (!array_key_exists($name, DefaultColorProvider::getColors())) {
			$name = "red";
		}
		return $prefix . $name;
	}

	/**
	 * Replace.
	 *
	 * @param string $subject The subject.
	 * @param array $searches The searches.
	 * @param array $replaces The replaces.
	 * @return string Returns the replaced string.
	 */
	protected final function replace($subject, array $searches, array $replaces) {
		return str_replace($searches, $replaces, $subject);
	}

}
