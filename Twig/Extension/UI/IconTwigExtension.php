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
use WBW\Library\Core\Helper\Argument\ArrayHelper;

/**
 * Icon Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
class IconTwigExtension extends AbstractIconTwigExtension implements IconRendererTwigExtensionInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.adminbsbbundle.twig.extension.ui.icon";

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
    public function adminBSBIconBasicFunction(array $args = []) {
        return $this->adminBSBIcon(ArrayHelper::get($args, "name"), ArrayHelper::get($args, "style"));
    }

    /**
     * Displays an AdminBSB material design icon.
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB material design icon.
     */
    public function adminBSBIconMaterialDesignFunction(array $args = []) {
        return $this->adminBSBIcon(ArrayHelper::get($args, "name"), ArrayHelper::get($args, "style"), AbstractAdminBSBTwigExtension::fixColor(ArrayHelper::get($args, "color"), "col-"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBIconBasic", [$this, "adminBSBIconBasicFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBIconMaterialDesign", [$this, "adminBSBIconMaterialDesignFunction"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function renderIcon($name, $style) {
        return $this->adminBSBIconBasicFunction(["name" => $name, "style" => $style]);
    }

}
