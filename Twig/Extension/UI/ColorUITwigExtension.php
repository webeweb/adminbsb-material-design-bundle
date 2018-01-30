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
 * Color UI Twig extension.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI
 * @final
 */
final class ColorUITwigExtension extends AbstractUITwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.twig.extension.ui.color";

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("materialDesignColor", [$this, "materialDesignColorFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays a material design color.
     *
     * @param array $args The arguments.
     * @return string Returns the material design color.
     */
    public function materialDesignColorFunction(array $args = []) {
        return $this->color($this->getArg($args, "name"), $this->getArg($args, "code", "500"), $this->getArg($args, "out", "class"));
    }

}
