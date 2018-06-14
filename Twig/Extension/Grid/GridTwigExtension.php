<?php

/**
 * This file is part of the bootstrap-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Grid;

use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Grid\GridTwigExtension as BaseTwigExtension;

/**
 * Grid Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Grid
 */
class GridTwigExtension extends BaseTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbbundle.twig.extension.grid.grid";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBGrid", [$this, "bootstrapGridFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBGridOffset", [$this, "bootstrapGridOffsetFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBGridPull", [$this, "bootstrapGridPullFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBGridPush", [$this, "bootstrapGridPushFunction"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBGridStacked", [$this, "bootstrapGridStackedFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
