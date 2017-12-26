<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI;

use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Color\DefaultColorProvider;
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
	 * Constructor.
	 */
	final public function __construct() {
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
	final protected function alert($content, $dismissible, $class) {

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
		return $this->replace($template, ["%attributes%", "%content%"], [StringUtility::parseArray($_attr), $_content]);
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
	 * @return string Returns the badge.
	 */
	final protected function badge($content, $label, $large, $class, $list = false, $link = false) {

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
		$_content	 = !is_null($content) ? $content : self::DEFAULT_CONTENT;
		$_label		 = !is_null($label) ? $label : self::DEFAULT_CONTENT;
		$_link		 = !is_null($link) ? $link : self::DEFAULT_HREF;

		// Return the HTML.
		return $this->replace($template, ["%attributes%", "%content%", "%label%", "%link%"], [StringUtility::parseArray($_attr), $_content, $_label, $_link]);
	}

	/**
	 * Displays a button.
	 *
	 * @param string $content The button content.
	 * @param string $title The button title.
	 * @param string $size The button size.
	 * @param boolean $block Block button ?
	 * @param booelan $disable Disable button ?
	 * @param string $class The button class.
	 * @param string $icon The button icon.
	 * @param boolean $circle Circle button ?
	 * @return string Returns the button.
	 */
	final protected function button($content, $title, $size, $block, $disable, $class, $icon, $circle) {

		// Disable the parameters.
		$circle	 = (!is_null($content) ? false : $circle);
		$style	 = (!is_null($content) ? "margin: -4px 2px 0; vertical-align: sub;" : "");

		// Initialize the template.
		$template = "<button %attributes%>%icon%%content%</button>";

		// Initialize the attributes.
		$_attr = [];

		$_attr["class"]			 = ["btn", $class, "waves-effect"];
		$_attr["class"][]		 = $block === true ? "btn-block" : null;
		$_attr["class"][]		 = $circle === true ? "btn-circle" . ($size === "lg" ? "-lg" : "") . " waves-circle waves-float" : null;
		$_attr["class"][]		 = $circle !== true && in_array($size, ["lg", "sm", "xs"]) ? "btn-" . $size : null;
		$_attr["title"]			 = $title;
		$_attr["type"]			 = "button";
		$_attr["data-toggle"]	 = !is_null($title) ? "tooltip" : null;
		$_attr["disabled"]		 = $disable === true ? "disabled" : null;

		// Handle the parameters.
		$_content	 = !is_null($content) ? $content : self::DEFAULT_CONTENT;
		$_icon		 = !is_null($icon) ? $this->icon($icon, $style) : "";

		// Return the HTML.
		return $this->replace($template, ["%attributes%", "%icon%", "%content%"], [StringUtility::parseArray($_attr), $_icon, $_content]);
	}

	/**
	 * Displays a color.
	 *
	 * @param string $name The color name.
	 * @param string $code The color code.
	 * @param string $output The output.
	 * @return string Returns the color.
	 */
	final protected function color($name, $code, $output) {

		// Initialize the parameters.
		$_name	 = $this->getColor($name, "");
		$_code	 = !is_null($code) ? $code : "500";

		// Return the HTML.
		return $output === "hex" ? DefaultColorProvider::getColors()[$_name][$_code] : "col-" . $_name;
	}

	/**
	 * Displays an icon.
	 *
	 * @param string $name The icon name.
	 * @param string $style The icon style.
	 * @param string $class The icon class.
	 * @return string Returns the icon.
	 */
	final protected function icon($name, $style, $class = null) {

		// Initialize the template.
		$template = "<i %attributes%>%name%</i>";

		// Initialize the attributes.
		$_attr = [];

		$_attr["class"]	 = ["material-icons", $class];
		$_attr["style"]	 = $style;

		// Initialize the parameters.
		$_name = !is_null($name) ? $name : "home";

		// Return the HTML.
		return $this->replace($template, ["%attributes%", "%name%"], [StringUtility::parseArray($_attr), $_name]);
	}

	/**
	 * Displays a label.
	 *
	 * @param string $content The label content.
	 * @param string $class The label class.
	 * @return string Returns the label.
	 */
	final protected function label($content, $class) {

		// Initialize the template.
		$template = "<span %attributes%>%content%</span>";

		// Initialize the attributes.
		$_attr = [];

		$_attr["class"] = ["label", $class];

		// Initialize the parameters.
		$_content = !is_null($content) ? $content : self::DEFAULT_CONTENT;

		// Return the HTML.
		return $this->replace($template, ["%attributes%", "%content%"], [StringUtility::parseArray($_attr), $_content]);
	}

	/**
	 * Displays a preloader.
	 *
	 * @param string $class The preloader class.
	 * @param string $size The preloader size.
	 * @return string Returns the preloader.
	 */
	final protected function preloader($class, $size) {

		// Initialize the template.
		$template = '<div %attributes1%><div %attributes2%><div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div></div></div>';

		// Initialize the attributes.
		$_attr = [];

		$_attr["preloader"]["class"] = ["preloader", in_array($size, ["xs", "sm", "l", "xl"]) ? "pl-size-" . $size : null];
		$_attr["spinner"]["class"]	 = ["spinner-layer", $class];

		// Return the HTML.
		return $this->replace($template, ["%attributes1%", "%attributes2%"], [StringUtility::parseArray($_attr["preloader"]), StringUtility::parseArray($_attr["spinner"])]);
	}

	/**
	 * Displays a progress bar.
	 *
	 * @param string $label The progress bar label.
	 * @param integer $value The progress bar value.
	 * @param integer $min The progress bar min.
	 * @param integer $max The progress bar max.
	 * @param boolean $striped Progress bar striped ?
	 * @param boolean $animated Progress bar animated ?
	 * @param string $class The progress bar class.
	 * @return string Returns the progress bar.
	 */
	final protected function progressBar($label, $value, $min, $max, $striped, $animated, $class = null) {

		// Initialize the template.
		$template = '<div class="progress"><div %attributes%>%label%</div></div>';

		// Initialize the attributes.
		$_attr = [];

		$_attr["class"]			 = ["progress-bar", $class];
		$_attr["class"][]		 = $striped === true ? "progress-bar-striped" : null;
		$_attr["class"][]		 = $animated === true ? "active" : null;
		$_attr["style"]			 = "width: " . $value . "%;";
		$_attr["role"]			 = "progressbar";
		$_attr["aria-valuenow"]	 = $value;
		$_attr["aria-valuemin"]	 = $min;
		$_attr["aria-valuemax"]	 = $max . "%";

		// Initialize the parameters.
		$_label = !is_null($label) ? $label . '<span class="sr-only">' . $value . ' %</span>' : self::DEFAULT_CONTENT;

		// Return the HTML.
		return $this->replace($template, ["%attributes%", "%label%"], [StringUtility::parseArray($_attr), $_label]);
	}

}
