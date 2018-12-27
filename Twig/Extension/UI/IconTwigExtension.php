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

use Twig_Environment;
use Twig_SimpleFunction;
use WBW\Bundle\CoreBundle\Renderer\IconRendererInterface;
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Icon Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
class IconTwigExtension extends AbstractIconTwigExtension implements IconRendererInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.adminbsb.twig.extension.ui.icon";

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The Twig environment.
     */
    public function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
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
        return $this->adminBSBIcon(ArrayHelper::get($args, "name"), ArrayHelper::get($args, "style"), self::fixColor(ArrayHelper::get($args, "color"), "col-"));
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
