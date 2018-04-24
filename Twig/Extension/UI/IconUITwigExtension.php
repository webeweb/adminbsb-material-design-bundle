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
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Icon UI Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\UI
 */
class IconUITwigExtension extends AbstractUITwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.twig.extension.ui.icon";

    /**
     * Displays a basic icon.
     *
     * @param array $args The arguments.
     * @return string Returns the material design icon.
     */
    public function basicIconFunction(array $args = []) {
        return $this->icon(ArrayUtility::get($args, "name"), ArrayUtility::get($args, "style"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("basicIcon", [$this, "basicIconFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("materialDesignIcon", [$this, "materialDesignIconFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays a material design icon.
     *
     * @param array $args The arguments.
     * @return string Returns the material design icon.
     */
    public function materialDesignIconFunction(array $args = []) {
        return $this->icon(ArrayUtility::get($args, "name"), ArrayUtility::get($args, "style"), $this->getColor(ArrayUtility::get($args, "color"), "col-"));
    }

}
