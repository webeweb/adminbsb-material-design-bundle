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

use Twig\TwigFilter;
use Twig\TwigFunction;
use WBW\Bundle\AdminBSBBundle\ProgressBar\ProgressBarFactory;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Component\ProgressBarTwigExtension as BaseTwigExtension;

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
    const SERVICE_NAME = "wbw.adminbsb.twig.extension.ui.progress_bar";

    /**
     * Displays an AdminBSB progress bar "Material design".
     *
     * @param array $args The arguments.
     * @return string Returns the AdminBSB progress bar "Material design".
     */
    public function adminBSBProgressBarMaterialDesignFunction(array $args = []): string {
        return $this->bootstrapProgressBar(ProgressBarFactory::parseMaterialDesignProgressBar($args));
    }

    /**
     * Get the Twig filters.
     *
     * @return TwigFilter[] Returns the Twig filters.
     */
    public function getFilters(): array {
        return [];
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {
        return [
            new TwigFunction("adminBSBProgressBarBasic", [$this, "bootstrapProgressBarBasicFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBProgressBarDanger", [$this, "bootstrapProgressBarDangerFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBProgressBarInfo", [$this, "bootstrapProgressBarInfoFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBProgressBarMaterialDesign", [$this, "adminBSBProgressBarMaterialDesignFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBProgressBarSuccess", [$this, "bootstrapProgressBarSuccessFunction"], ["is_safe" => ["html"]]),
            new TwigFunction("adminBSBProgressBarWarning", [$this, "bootstrapProgressBarWarningFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
