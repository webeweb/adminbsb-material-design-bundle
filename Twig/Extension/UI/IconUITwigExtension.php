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
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractAdminBSBTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\IconRendererTwigExtensionInterface;
use WBW\Library\Core\Utility\Argument\ArrayUtility;

/**
 * Icon UI Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
class IconUITwigExtension extends AbstractUITwigExtension implements IconRendererTwigExtensionInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbbundle.twig.extension.ui.icon";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Displays an AdminBSB basic icon.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB basic icon.
     */
    public function adminBSBBasicIconFunction(array $args = []) {
        return $this->adminBSBIcon(ArrayUtility::get($args, "name"), ArrayUtility::get($args, "style"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBBasicIcon", [$this, "adminBSBBasicIconFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBMaterialDesignIcon", [$this, "adminBSBMaterialDesignIconFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays an AdminBSB material design icon.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB material design icon.
     */
    public function adminBSBMaterialDesignIconFunction(array $args = []) {
        return $this->adminBSBIcon(ArrayUtility::get($args, "name"), ArrayUtility::get($args, "style"), AbstractAdminBSBTwigExtension::fixColor(ArrayUtility::get($args, "color"), "col-"));
    }

    /**
     * {@inheritdoc}
     */
    public function renderIcon($name, $style) {
        return $this->adminBSBBasicIconFunction(["name" => $name, "style" => $style]);
    }

}
