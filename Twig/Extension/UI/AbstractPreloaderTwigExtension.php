<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\UI;

use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractTwigExtension;

/**
 * Abstract preloader Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 * @abstract
 */
abstract class AbstractPreloaderTwigExtension extends AbstractTwigExtension {

    /**
     * Display an AdminBSB preloader.
     *
     * @param string $class The class.
     * @param string $size The size.
     * @return string Returns the AdminBSB preloader.
     */
    protected function adminBSBPreloader(string $class, string $size): string {

        $sizes = ["xs", "sm", "l", "xl"];

        $attributes = [
            "class" => [
                "preloader",
                true === in_array($size, $sizes) ? "pl-size-" . $size : null,
            ],
        ];

        $content   = '<div class="circle-clipper left"><div class="circle"></div></div><div class="circle-clipper right"><div class="circle"></div></div>';
        $innerHTML = static::coreHtmlElement("div", $content, [
            "class" => [
                "spinner-layer",
                $class,
            ],
        ]);

        return static::coreHtmlElement("div", $innerHTML, $attributes);
    }
}
