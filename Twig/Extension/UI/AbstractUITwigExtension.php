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

/**
 * Abstract UI Twig extension.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI
 * @abstract
 */
abstract class AbstractUITwigExtension extends AbstractABSBMDTwigExtension {

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
		$template	 = '<div class="alert %class%">%content%</div>';
		$subtemplate = '<button class="close" type="button" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>';

		// Initialize the parameters.
		$_content	 = ($dismissible ? $subtemplate : "") . (!is_null($content) ? $content : self::DEFAULT_CONTENT);
		$_class		 = $class . ($dismissible ? " alert-dismissible" : "");

		// Return the HTML.
		return $this->_replace($template, ["%content%", "%class%"], [$_content, $_class]);
	}

}
