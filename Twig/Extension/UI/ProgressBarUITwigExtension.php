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

use Twig_SimpleFunction;

/**
 * Progress bar UI Twig extension.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI
 * @final
 */
final class ProgressBarUITwigExtension extends AbstractUITwigExtension {

	/**
	 * Service name.
	 */
	const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.twig.extension.ui.progressbar";

	/**
	 * Displays a basic progress bar.
	 *
	 * @param array $args The arguments.
	 * @return string Returns the basic progress bar.
	 */
	public function basicProgressBarFunction(array $args = []) {
		return $this->progressBar($this->getArg($args, "content"), $this->getArg($args, "value", 50), $this->getArg($args, "min", 0), $this->getArg($args, "max", 100), $this->getArg($args, "striped", false), $this->getArg($args, "animated", false));
	}

	/**
	 * Get the Twig functions.
	 *
	 * @return array Returns the Twig functions.
	 */
	public function getFunctions() {
		return [
			new Twig_SimpleFunction("basicProgressBar", [$this, "basicProgressBarFunction"], ["is_safe" => ["html"]]),
			new Twig_SimpleFunction("progressBarDanger", [$this, "progressBarDangerFunction"], ["is_safe" => ["html"]]),
			new Twig_SimpleFunction("progressBarInfo", [$this, "progressBarInfoFunction"], ["is_safe" => ["html"]]),
			new Twig_SimpleFunction("progressBarSuccess", [$this, "progressBarSuccessFunction"], ["is_safe" => ["html"]]),
			new Twig_SimpleFunction("progressBarWarning", [$this, "progressBarWarningFunction"], ["is_safe" => ["html"]]),
			new Twig_SimpleFunction("materialDesignProgressBar", [$this, "materialDesignProgressBarFunction"], ["is_safe" => ["html"]]),
		];
	}

	/**
	 * Displays a material design progress bar.
	 *
	 * @param array $args The arguments.
	 * @return string Returns the material design progress bar.
	 */
	public function materialDesignProgressBarFunction(array $args = []) {
		return $this->progressBar($this->getArg($args, "content"), $this->getArg($args, "value", 50), $this->getArg($args, "min", 0), $this->getArg($args, "max", 100), $this->getArg($args, "striped", false), $this->getArg($args, "animated", false), $this->getColor($this->getArg($args, "color", "red"), "bg-"));
	}

	/**
	 * Displays a progress bar "Danger".
	 *
	 * @param array $args The arguments.
	 * @return string Returns the progress bar "Danger".
	 */
	public function progressBarDangerFunction(array $args = []) {
		return $this->progressBar($this->getArg($args, "content"), $this->getArg($args, "value", 50), $this->getArg($args, "min", 0), $this->getArg($args, "max", 100), $this->getArg($args, "striped", false), $this->getArg($args, "animated", false), "progress-bar-danger");
	}

	/**
	 * Displays a progress bar "Info".
	 *
	 * @param array $args The arguments.
	 * @return string Returns the progress bar "Info".
	 */
	public function progressBarInfoFunction(array $args = []) {
		return $this->progressBar($this->getArg($args, "content"), $this->getArg($args, "value", 50), $this->getArg($args, "min", 0), $this->getArg($args, "max", 100), $this->getArg($args, "striped", false), $this->getArg($args, "animated", false), "progress-bar-info");
	}

	/**
	 * Displays a progress bar "Success".
	 *
	 * @param array $args The arguments.
	 * @return string Returns the progress bar "Success".
	 */
	public function progressBarSuccessFunction(array $args = []) {
		return $this->progressBar($this->getArg($args, "content"), $this->getArg($args, "value", 50), $this->getArg($args, "min", 0), $this->getArg($args, "max", 100), $this->getArg($args, "striped", false), $this->getArg($args, "animated", false), "progress-bar-success");
	}

	/**
	 * Displays a progress bar "Warning".
	 *
	 * @param array $args The arguments.
	 * @return string Returns the progress bar "Warning".
	 */
	public function progressBarWarningFunction(array $args = []) {
		return $this->progressBar($this->getArg($args, "content"), $this->getArg($args, "value", 50), $this->getArg($args, "min", 0), $this->getArg($args, "max", 100), $this->getArg($args, "striped", false), $this->getArg($args, "animated", false), "progress-bar-warning");
	}

}
