<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Form;

use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\AbstractABSBMDTwigExtension;
use WBW\Library\Core\Utility\StringUtility;

/**
 * Abstract form Twig extension.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Form
 * @abstract
 */
abstract class AbstractFormTwigExtension extends AbstractABSBMDTwigExtension {

	/**
	 * Constructor.
	 */
	public final function __construct() {
		parent::__construct();
	}

	/**
	 * Displays a check box.
	 *
	 * @param string $content The checkbox content.
	 * @param string $name The checkbox name.
	 * @param string $id The checkbox id.
	 * @param boolean $checked Checked ?
	 * @param boolean $disabled Disabled ?
	 * @param boolean $filledIn Filled in ?
	 * @param string $class The checkbox class.
	 * @return string Returns the checkbox.
	 */
	protected final function checkbox($content, $name, $id, $checked, $disabled, $filledIn, $class) {

		// Initialize the template.
		$template = '<input %attributes%><label for="%id%">%content%</label>';

		// Initialize the attributes.
		$_attr = [];

		$_attr["class"]		 = [$filledIn === true ? "filled-in" : null, $class];
		$_attr["name"]		 = $name;
		$_attr["type"]		 = "checkbox";
		$_attr["id"]		 = $id;
		$_attr["checked"]	 = $checked === true ? "checked" : null;
		$_attr["disabled"]	 = $disabled === true ? "disabled" : null;

		// Check the parameters.
		$_content = !is_null($content) ? $content : self::DEFAULT_CONTENT;

		// Return the HTML.
		return $this->replace($template, ["%attributes%", "%id%", "%content%"], [StringUtility::parseArray($_attr), $_attr["id"], $_content]);
	}

}
