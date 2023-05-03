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

use WBW\Bundle\AdminBSBBundle\Renderer\Assets\ButtonRenderer;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AssetsTwigExtension;
use WBW\Bundle\BootstrapBundle\Assets\ButtonInterface;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ButtonTwigExtension as BaseTwigExtension;

/**
 * Abstract button Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 * @abstract
 */
abstract class AbstractButtonTwigExtension extends BaseTwigExtension {

    /**
     * Display an AdminBSB button.
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

        $attributes = [
            "class"          => [
                "btn",
                ButtonRenderer::renderType($button),
                "waves-effect",
                ButtonRenderer::renderBlock($button),
                ButtonRenderer::renderCircle($button, $circle),
            ],
            "title"          => ButtonRenderer::renderTitle($button),
            "type"           => "button",
            "data-toggle"    => ButtonRenderer::renderDataToggle($button),
            "data-placement" => ButtonRenderer::renderDataPlacement($button),
            "disabled"       => ButtonRenderer::renderDisabled($button),
        ];

        $glyphicon = null !== $icon ? AssetsTwigExtension::renderIcon($this->getTwigEnvironment(), $icon, $style) : "";
        $innerHTML = ButtonRenderer::renderContent($button);

        return static::coreHtmlElement("button", $glyphicon . $innerHTML, $attributes);
    }
}
