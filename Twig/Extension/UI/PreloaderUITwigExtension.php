<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\UI;

use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractABSBMDTwigExtension;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Preloader UI Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
class PreloaderUITwigExtension extends AbstractUITwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbbundle.twig.extension.ui.preloader";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays an AdminBSB material design preloader L.
     *
     * @param array $args The arguments.
     * @return string Retruns the AdminBSB material design preloader L.
     */
    public function adminBSBMaterialDesignPreloaderLFunction(array $args = []) {
        return $this->adminBSBPreloader(AbstractABSBMDTwigExtension::fixColor(ArrayUtility::get($args, "color", "red"), "pl-"), "l");
    }

    /**
     * Displays an AdminBSB material design preloader S.
     *
     * @param array $args The arguments.
     * @return string Retruns the AdminBSB material design preloader S.
     */
    public function adminBSBMaterialDesignPreloaderSFunction(array $args = []) {
        return $this->adminBSBPreloader(AbstractABSBMDTwigExtension::fixColor(ArrayUtility::get($args, "color", "red"), "pl-"), "s");
    }

    /**
     * Displays an AdminBSB material design preloader SM.
     *
     * @param array $args The arguments.
     * @return string Retruns the AdminBSB material design preloader SM.
     */
    public function adminBSBMaterialDesignPreloaderSMFunction(array $args = []) {
        return $this->adminBSBPreloader(AbstractABSBMDTwigExtension::fixColor(ArrayUtility::get($args, "color", "red"), "pl-"), "sm");
    }

    /**
     * Displays an AdminBSB material design preloader XL.
     *
     * @param array $args The arguments.
     * @return string Retruns the AdminBSB material design preloader XL.
     */
    public function adminBSBMaterialDesignPreloaderXLFunction(array $args = []) {
        return $this->adminBSBPreloader(AbstractABSBMDTwigExtension::fixColor(ArrayUtility::get($args, "color", "red"), "pl-"), "xl");
    }

    /**
     * Displays an AdminBSB material design preloader XS.
     *
     * @param array $args The arguments.
     * @return string Retruns the AdminBSB material design preloader XS.
     */
    public function adminBSBMaterialDesignPreloaderXSFunction(array $args = []) {
        return $this->adminBSBPreloader(AbstractABSBMDTwigExtension::fixColor(ArrayUtility::get($args, "color", "red"), "pl-"), "xs");
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBMaterialDesignPreloaderL", [$this, "adminBSBMaterialDesignPreloaderLFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBMaterialDesignPreloaderS", [$this, "adminBSBMaterialDesignPreloaderSFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBMaterialDesignPreloaderSM", [$this, "adminBSBMaterialDesignPreloaderSMFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBMaterialDesignPreloaderXL", [$this, "adminBSBMaterialDesignPreloaderXLFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBMaterialDesignPreloaderXS", [$this, "adminBSBMaterialDesignPreloaderXSFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
