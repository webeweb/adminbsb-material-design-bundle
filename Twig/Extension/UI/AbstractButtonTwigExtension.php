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

use WBW\Bundle\AdminBSBBundle\Button\ButtonRenderer;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\RendererTwigExtension;
use WBW\Bundle\BootstrapBundle\Button\ButtonInterface;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ButtonTwigExtension as BaseTwigExtension;

/**
 * Abstract button Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 * @abstract
 */
abstract class AbstractButtonTwigExtension extends BaseTwigExtension {

    /**
     * Displays an AdminBSB button.
     *
     * @param ButtonInterface $button The button.
     * @param string|null $icon The icon.
     * @param bool $circle Circle ?
     * @return string Returns the AdminBSB button.
     */
    protected function adminBSBButton(ButtonInterface $button, ?string $icon, bool $circle): string {

        // Fix some parameters.
        $circle = null !== $button->getContent() ? false : $circle;
        $style  = null !== $button->getContent() ? "margin: -4px 2px 0; vertical-align: sub;" : "";

        $attributes = [];

        $attributes["class"]          = ["btn", ButtonRenderer::renderType($button), "waves-effect"];
        $attributes["class"][]        = ButtonRenderer::renderBlock($button);
        $attributes["class"][]        = ButtonRenderer::renderCircle($button, $circle);
        $attributes["title"]          = ButtonRenderer::renderTitle($button);
        $attributes["type"]           = "button";
        $attributes["data-toggle"]    = ButtonRenderer::renderDataToggle($button);
        $attributes["data-placement"] = ButtonRenderer::renderDataPlacement($button);
        $attributes["disabled"]       = ButtonRenderer::renderDisabled($button);

        $glyphicon = null !== $icon ? RendererTwigExtension::renderIcon($this->getTwigEnvironment(), $icon, $style) : "";
        $innerHTML = ButtonRenderer::renderContent($button);

        return static::coreHTMLElement("button", $glyphicon . $innerHTML, $attributes);
    }
}
