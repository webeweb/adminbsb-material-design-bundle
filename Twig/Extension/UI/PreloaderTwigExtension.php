<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\UI;

use Twig_SimpleFunction;
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Preloader Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
class PreloaderTwigExtension extends AbstractPreloaderTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.adminbsb.twig.extension.ui.preloader";

    /**
     * Displays an AdminBSB preloader "Material design" L.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB preloader "Material design" L.
     */
    public function adminBSBPreloaderMaterialDesignLFunction(array $args = []) {
        return $this->adminBSBPreloader(self::materialDesignColor(ArrayHelper::get($args, "color", "red"), "pl-"), "l");
    }

    /**
     * Displays an AdminBSB preloader "Material design" S.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB preloader "Material design" S.
     */
    public function adminBSBPreloaderMaterialDesignSFunction(array $args = []) {
        return $this->adminBSBPreloader(self::materialDesignColor(ArrayHelper::get($args, "color", "red"), "pl-"), "s");
    }

    /**
     * Displays an AdminBSB preloader "Material design" SM.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB preloader "Material design" SM.
     */
    public function adminBSBPreloaderMaterialDesignSMFunction(array $args = []) {
        return $this->adminBSBPreloader(self::materialDesignColor(ArrayHelper::get($args, "color", "red"), "pl-"), "sm");
    }

    /**
     * Displays an AdminBSB preloader "Material design" XL.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB preloader "Material design" XL.
     */
    public function adminBSBPreloaderMaterialDesignXLFunction(array $args = []) {
        return $this->adminBSBPreloader(self::materialDesignColor(ArrayHelper::get($args, "color", "red"), "pl-"), "xl");
    }

    /**
     * Displays an AdminBSB preloader "Material design" XS.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB preloader "Material design" XS.
     */
    public function adminBSBPreloaderMaterialDesignXSFunction(array $args = []) {
        return $this->adminBSBPreloader(self::materialDesignColor(ArrayHelper::get($args, "color", "red"), "pl-"), "xs");
    }

    /**
     * Get the Twig functions.
     *
     * @return Twig_SimpleFunction[] Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBPreloaderMaterialDesignL", [$this, "adminBSBPreloaderMaterialDesignLFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBPreloaderMaterialDesignS", [$this, "adminBSBPreloaderMaterialDesignSFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBPreloaderMaterialDesignSM", [$this, "adminBSBPreloaderMaterialDesignSMFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBPreloaderMaterialDesignXL", [$this, "adminBSBPreloaderMaterialDesignXLFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBPreloaderMaterialDesignXS", [$this, "adminBSBPreloaderMaterialDesignXSFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
