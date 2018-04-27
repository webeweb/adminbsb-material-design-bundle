<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography;

use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Typography\HeadingTypographyTwigExtension as BaseTypographyTwigExtension;

/**
 * Heading typography Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography
 */
class HeadingTypographyTwigExtension extends BaseTypographyTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbbundle.twig.extension.typography.heading";

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBHeading1", [$this, "bootstrapHeading1Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBHeading2", [$this, "bootstrapHeading2Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBHeading3", [$this, "bootstrapHeading3Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBHeading4", [$this, "bootstrapHeading4Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBHeading5", [$this, "bootstrapHeading5Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("adminBSBHeading6", [$this, "bootstrapHeading6Function"], ["is_safe" => ["html"]]),
        ];
    }

}
