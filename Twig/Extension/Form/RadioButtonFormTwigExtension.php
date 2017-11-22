<?php

/**
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
 * Radio button form Twig extension.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Form
 * @final
 */
final class RadioButtonFormTwigExtension extends AbstractFormTwigExtension {

	/**
	 * Service name.
	 */
	const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.twig.extension.form.radiobutton";

	/**
	 * Displays a basic radio button.
	 *
	 * @param array $args The arguments.
	 * @return string Returns the basic radio button.
	 */
	public function basicRadioButtonFunction(array $args = []) {
		return $this->radioButton($this->getArg($args, "content"), $this->getArg($args, "name"), $this->getArg($args, "id"), $this->getArg($args, "checked", false), $this->getArg($args, "disabled", false), $this->getArg($args, "withGap", false), $this->getArg($args, "class"));
	}

	/**
	 * Get the Twig functions.
	 *
	 * @return array Returns the Twig functions.
	 */
	public function getFunctions() {
		return [
			new Twig_SimpleFunction("basicRadioButton", [$this, "basicRadioButtonFunction"], ["is_safe" => ["html"]]),
			new Twig_SimpleFunction("materialDesignRadioButton", [$this, "materialDesignRadioButtonFunction"], ["is_safe" => ["html"]]),
		];
	}

	/**
	 * Displays a material design radio button.
	 *
	 * @param array $args The arguments.
	 * @return string Returns the material design radio button.
	 */
	public function materialDesignRadioButtonFunction(array $args = []) {
		return $this->radioButton($this->getArg($args, "content"), $this->getArg($args, "name"), $this->getArg($args, "id"), $this->getArg($args, "checked", false), $this->getArg($args, "disabled", false), $this->getArg($args, "withGap", false), $this->getArg($args, "class", "") . $this->getColor($this->getArg($args, "color", "red"), " radio-col-"));
	}

}
