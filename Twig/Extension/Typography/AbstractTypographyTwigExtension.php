<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Typography;

use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\AbstractABSBMDTwigExtension;
use WBW\Library\Core\Utility\StringUtility;

/**
 * Abstract typography Twig extension.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Typography
 * @abstract
 */
abstract class AbstractTypographyTwigExtension extends AbstractABSBMDTwigExtension {

	/**
	 * Constructor.
	 */
	public final function __construct() {
		parent::__construct();
	}

	/**
	 * Displays an heading.
	 *
	 * @param integer $size The heading size.
	 * @param string $content The heading content.
	 * @param string $class The heading class.
	 * @return string Returns the heading.
	 */
	protected final function h($size, $content, $class) {

		// Initialize the template.
		$template = "<h%size%%attributes%>%content%</h%size%>";

		// Initialize the attributes.
		$_attr = [];

		$_attr[" class"] = [$class];

		// Initialize the parameters.
		$_content = (!is_null($content) ? $content : self::DEFAULT_CONTENT);

		// Return the HTML.
		return $this->replace($template, ["%size%", "%attributes%", "%content%"], [$size, StringUtility::parseArray($_attr), $_content]);
	}

}
