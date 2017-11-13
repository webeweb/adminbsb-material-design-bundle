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

use Twig_SimpleFunction;

/**
 * Label UI Twig extension.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI
 * @final
 */
final class LabelUITwigExtension extends AbstractUITwigExtension {

	/**
	 * Service name.
	 */
	const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.twig.extension.ui.label";

	/**
	 * Get the Twig functions.
	 *
	 * @return array Returns the Twig functions.
	 */
	public function getFunctions() {
		return [
			new Twig_SimpleFunction("labelDanger", [$this, "labelDangerFunction"], ["is_safe" => ["html"]]),
			new Twig_SimpleFunction("labelDefault", [$this, "labelDefaultFunction"], ["is_safe" => ["html"]]),
			new Twig_SimpleFunction("labelInfo", [$this, "labelInfoFunction"], ["is_safe" => ["html"]]),
			new Twig_SimpleFunction("labelPrimary", [$this, "labelPrimaryFunction"], ["is_safe" => ["html"]]),
			new Twig_SimpleFunction("labelSuccess", [$this, "labelSuccessFunction"], ["is_safe" => ["html"]]),
			new Twig_SimpleFunction("labelWarning", [$this, "labelWarningFunction"], ["is_safe" => ["html"]]),
			new Twig_SimpleFunction("materialDesignLabel", [$this, "materialDesignLabelFunction"], ["is_safe" => ["html"]]),
		];
	}

	/**
	 * Displays a label Danger.
	 *
	 * @param array $args The arguments.
	 * @return string Returns a label Danger.
	 */
	public function labelDangerFunction(array $args = []) {
		return $this->label($this->_arg($args, "content"), "label-danger");
	}

	/**
	 * Displays a label Default.
	 *
	 * @param array $args The arguments.
	 * @return string Returns a label Default.
	 */
	public function labelDefaultFunction(array $args = []) {
		return $this->label($this->_arg($args, "content"), "label-default");
	}

	/**
	 * Displays a label Info.
	 *
	 * @param array $args The arguments.
	 * @return string Returns a label Info.
	 */
	public function labelInfoFunction(array $args = []) {
		return $this->label($this->_arg($args, "content"), "label-info");
	}

	/**
	 * Displays a label Primary.
	 *
	 * @param array $args The arguments.
	 * @return string Returns a label Primary.
	 */
	public function labelPrimaryFunction(array $args = []) {
		return $this->label($this->_arg($args, "content"), "label-primary");
	}

	/**
	 * Displays a label Success.
	 *
	 * @param array $args The arguments.
	 * @return string Returns a label Success.
	 */
	public function labelSuccessFunction(array $args = []) {
		return $this->label($this->_arg($args, "content"), "label-success");
	}

	/**
	 * Displays a label Warning.
	 *
	 * @param array $args The arguments.
	 * @return string Returns a label Warning.
	 */
	public function labelWarningFunction(array $args = []) {
		return $this->label($this->_arg($args, "content"), "label-warning");
	}

	/**
	 * Displays a material design label.
	 *
	 * @param array $args The arguments.
	 * @return string Returns a material design label.
	 */
	public function materialDesignLabelFunction(array $args = []) {
		return $this->label($this->_arg($args, "content"), $this->_color($this->_arg($args, "color", "red"), "bg-"));
	}

}
