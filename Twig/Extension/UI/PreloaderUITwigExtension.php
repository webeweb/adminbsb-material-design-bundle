<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI;

use Twig_SimpleFunction;

/**
 * Preloader UI Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI
 * @final
 */
final class PreloaderUITwigExtension extends AbstractUITwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.twig.extension.ui.preloader";

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("materialDesignPreloaderL", [$this, "materialDesignPreloaderLFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("materialDesignPreloaderS", [$this, "materialDesignPreloaderSFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("materialDesignPreloaderSM", [$this, "materialDesignPreloaderSMFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("materialDesignPreloaderXL", [$this, "materialDesignPreloaderXLFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("materialDesignPreloaderXS", [$this, "materialDesignPreloaderXSFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays a material design preloader L.
     *
     * @param array $args The arguments.
     * @return string Retruns the material design preloader L.
     */
    public function materialDesignPreloaderLFunction(array $args = []) {
        return $this->preloader($this->getColor($this->getArg($args, "color", "red"), "pl-"), "l");
    }

    /**
     * Displays a material design preloader S.
     *
     * @param array $args The arguments.
     * @return string Retruns the material design preloader S.
     */
    public function materialDesignPreloaderSFunction(array $args = []) {
        return $this->preloader($this->getColor($this->getArg($args, "color", "red"), "pl-"), "s");
    }

    /**
     * Displays a material design preloader SM.
     *
     * @param array $args The arguments.
     * @return string Retruns the material design preloader SM.
     */
    public function materialDesignPreloaderSMFunction(array $args = []) {
        return $this->preloader($this->getColor($this->getArg($args, "color", "red"), "pl-"), "sm");
    }

    /**
     * Displays a material design preloader XL.
     *
     * @param array $args The arguments.
     * @return string Retruns the material design preloader XL.
     */
    public function materialDesignPreloaderXLFunction(array $args = []) {
        return $this->preloader($this->getColor($this->getArg($args, "color", "red"), "pl-"), "xl");
    }

    /**
     * Displays a material design preloader XS.
     *
     * @param array $args The arguments.
     * @return string Retruns the material design preloader XS.
     */
    public function materialDesignPreloaderXSFunction(array $args = []) {
        return $this->preloader($this->getColor($this->getArg($args, "color", "red"), "pl-"), "xs");
    }

}
