<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI;

use WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\AbstractABSBMDTwigExtension;
use WBW\Library\Core\Navigation\NavigationInterface;
use WBW\Library\Core\Utility\StringUtility;

/**
 * Abstract UI Twig extension.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI
 * @abstract
 */
abstract class AbstractUITwigExtension extends AbstractABSBMDTwigExtension implements NavigationInterface {

	/**
	 * Default content.
	 */
	const DEFAULT_CONTENT = "&nbsp;";

	/**
	 * Constructor.
	 */
	public final function __construct() {
		parent::__construct();
	}

	/**
	 * Displays an alert.
	 *
	 * @param string $content The alert content.
	 * @param boolean $dismissible Dismissible alert ?
	 * @param string $class The alert class.
	 * @return string Returns the alert.
	 */
	protected final function alert($content, $dismissible, $class) {

		// Initialize the templates.
		$template	 = "<div %attributes%>%content%</div>";
		$subtemplate = '<button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

		// Initialize the attributes.
		$_attr = [];

		$_attr["class"]		 = ["alert", $class];
		$_attr["class"][]	 = $dismissible === true ? "alert-dismissible" : null;

		// Initialize the parameters.
		$_content = ($dismissible === true ? $subtemplate : "") . (!is_null($content) ? $content : self::DEFAULT_CONTENT);

		// Return the HTML.
		return $this->_replace($template, ["%attributes%", "%content%"], [StringUtility::parseArray($_attr), $_content]);
	}

	/**
	 * Displays a badge.
	 *
	 * @param string $content The badge content.
	 * @param string $label The badge label.
	 * @param boolean $large Large badge ?
	 * @param string $class The badge class.
	 * @param boolean $list List badge ?
	 * @param string $link The badge link.
	 * @return string Returns a badge.
	 */
	protected final function badge($content, $label, $large, $class, $list = false, $link = false) {

		// Initialize the template.
		$template = '<button %attributes%>%content%<span class="badge">%label%</span></button>';
		if ($list) {
			$template = '<a class="list-group-item" href="%link%"><span %attributes%>%content%</span>%label%</a>';
		}

		// Initialize the attributes.
		$_attr = [];

		if ($list === true) {
			$_attr["class"] = ["badge", $class];
		} else {
			$_attr["class"]		 = ["btn", $class, "btn-block", "waves-effect"];
			$_attr["class"][]	 = $large === true ? "btn-lg" : null;
			$_attr["type"]		 = "button";
		}

		// Initialize the parameters.
		$_content	 = (!is_null($content) ? $content : self::DEFAULT_CONTENT);
		$_label		 = (!is_null($label) ? $label : self::DEFAULT_CONTENT);
		$_link		 = (!is_null($link) ? $link : self::DEFAULT_HREF);

		// Return the HTML.
		return $this->_replace($template, ["%attributes%", "%content%", "%label%", "%link%"], [StringUtility::parseArray($_attr), $_content, $_label, $_link]);
	}

}
