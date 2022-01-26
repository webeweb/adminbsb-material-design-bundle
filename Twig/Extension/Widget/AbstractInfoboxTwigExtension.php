<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget;

use WBW\Bundle\AdminBSBBundle\Asset\Color\ColorHelper;
use WBW\Bundle\AdminBSBBundle\Asset\Widget\Infobox5;
use WBW\Bundle\AdminBSBBundle\Asset\Widget\InfoboxInterface;
use WBW\Bundle\AdminBSBBundle\Asset\Widget\InfoboxRenderer;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\RendererTwigExtension;

/**
 * Abstract infobox Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget
 * @abstract
 */
abstract class AbstractInfoboxTwigExtension extends AbstractTwigExtension {

    /**
     * Displays an infobox.
     *
     * @param InfoboxInterface $infobox The infobox.
     * @return string Returns the infobox.
     */
    protected function adminBSBInfobox(InfoboxInterface $infobox): string {

        $icon   = RendererTwigExtension::renderIcon($this->getTwigEnvironment(), $infobox->getIconName());
        $text   = static::coreHTMLElement("div", $infobox->getContentText(), ["class" => "text"]);
        $number = static::coreHTMLElement("div", $infobox->getContentNumber(), array_merge([
            "class" => [
                "number",
                0 < count($infobox->getCountTo()) ? "count-to" : null,
            ],
        ], $infobox->getCountTo()));

        $color = InfoboxRenderer::renderIconColor($infobox);

        // Infobox 5 specifications
        if (true === ($infobox instanceof Infobox5)) {

            $color = ColorHelper::materialDesignColor($color, "col-");
            $icon  = str_replace('class="', "class=\"$color ", $icon);

            $color = null;
        }

        $divIcon = static::coreHTMLElement("div", $icon, [
            "class" => [
                "icon",
                $color,
            ],
        ]);

        $divContent = static::coreHTMLElement("div", "$text$number", ["class" => "content"]);

        return static::coreHTMLElement("div", "\n    $divIcon\n    $divContent\n", [
            "class" => [
                $infobox->getClass(),
                InfoboxRenderer::renderColor($infobox),
                InfoboxRenderer::renderHoverZoomEffect($infobox),
                InfoboxRenderer::renderHoverExpandEffect($infobox),
            ],
        ]);
    }
}
