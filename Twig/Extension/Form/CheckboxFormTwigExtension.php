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

use Twig_SimpleFunction;

/**
 * Checkbox form Twig extension.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Form
 * @final
 */
final class CheckboxFormTwigExtension extends AbstractFormTwigExtension {

	/**
	 * Checkbox form Twig extension service name.
	 */
	const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.twig.extension.form.checkbox";

	/**
	 * Displays a basic checkbox.
	 *
	 * @param array $args The arguments.
	 * @return string Returns the basic checkbox.
	 */
	public function basicCheckboxFunction(array $args = []) {
		return $this->checkbox($this->getArg($args, "content"), $this->getArg($args, "name"), $this->getArg($args, "id"), $this->getArg($args, "checked", false), $this->getArg($args, "disabled", false), $this->getArg($args, "filled-in", false), $this->getArg($args, "class"));
	}

	/**
	 * Get the Twig functions.
	 *
	 * @return array Returns the Twig functions.
	 */
	public function getFunctions() {
		return [
			new Twig_SimpleFunction("basicCheckbox", [$this, "basicCheckboxFunction"], ["is_safe" => ["html"]]),
			new Twig_SimpleFunction("materialDesignCheckbox", [$this, "materialDesignCheckboxFunction"], ["is_safe" => ["html"]]),
		];
	}

	/**
	 * Displays a material design checkbox.
	 *
	 * @param array $args The arguments.
	 * @return string Returns the material design checkbox.
	 */
	public function materialDesignCheckboxFunction(array $args = []) {
		return $this->checkbox($this->getArg($args, "content"), $this->getArg($args, "name"), $this->getArg($args, "id"), $this->getArg($args, "checked", false), $this->getArg($args, "disabled", false), $this->getArg($args, "filled-in", false), $this->getArg($args, "class", "") . $this->getColor($this->getArg($args, "color", "red"), " chk-col-"));
	}

}
