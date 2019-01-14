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
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ProgressBarTwigExtension as BaseTwigExtension;
use WBW\Library\Core\Argument\ArrayHelper;

/**
 * Progress bar Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 */
class ProgressBarTwigExtension extends BaseTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.adminbsb.twig.extension.ui.progress_bar";

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The Twig environment.
     */
    public function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Displays an AdminBSB progress bar "Material design".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB progress bar "Material design".
     */
    public function adminBSBProgressBarMaterialDesignFunction(array $args = []) {
        return $this->bootstrapProgressBar(ArrayHelper::get($args, "content"), ArrayHelper::get($args, "value", 50), ArrayHelper::get($args, "min", 0), ArrayHelper::get($args, "max", 100), ArrayHelper::get($args, "striped", false), ArrayHelper::get($args, "animated", false), AbstractTwigExtension::fixColor(ArrayHelper::get($args, "color", "red"), "bg-"));
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBProgressBarMaterialDesign", [$this, "adminBSBProgressBarMaterialDesignFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
