<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Menu;

use Twig\Environment;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AssetsTwigExtension;
use WBW\Library\Symfony\Assets\AbstractNavigationNode;
use WBW\Library\Symfony\Assets\Navigation\HeaderNode;
use WBW\Library\Symfony\Assets\Navigation\NavigationNode;
use WBW\Library\Symfony\Assets\Navigation\NavigationTree;

/**
 * Abstract multi level menu Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Menu
 * @abstract
 */
abstract class AbstractMenuTwigExtension extends AbstractTwigExtension {

    /**
     * Constructor.
     *
     * @param Environment $twigEnvironment The Twig environment.
     */
    public function __construct(Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Displays an AdminBSB  menu.
     *
     * @param NavigationTree $tree The navigation tree.
     * @return string Returns the Admin BSB menu.
     */
    protected function adminBSBMenu(NavigationTree $tree): string {

        $templates = [];

        foreach ($tree->getNodes() as $current) {
            $templates[] = $this->renderNode($current);
        }

        return implode("\n", $templates);
    }

    /**
     * Determines if a node is a menu toggle.
     *
     * @param NavigationNode $node
     * @return bool Returns true in case of success, false otherwise.
     */
    protected function isMenuToggle(NavigationNode $node): bool {

        foreach ($node->getNodes() as $current) {

            if (true === ($current instanceof NavigationNode) && true === $current->isDisplayable()) {
                return true;
            }
        }

        return false;
    }

    /**
     * Render an anchor.
     *
     * @param NavigationNode $node The navigation node.
     * @return string Returns the rendered anchor.
     */
    private function renderAnchor(NavigationNode $node): string {

        $attributes = [
            "href"   => $node->getUri(),
            "target" => $node->getTarget(),
        ];

        if ($this->isMenuToggle($node)) {
            $attributes["class"] = "menu-toggle";
        }

        $icon = $this->renderIcon($node);
        $span = $this->renderSpan($node);

        return static::coreHtmlElement("a", "\n$icon$span", $attributes) . "\n";
    }

    /**
     * Render a dropdown.
     *
     * @param NavigationNode $node The navigation node.
     * @param array $items The items.
     * @return string Returns the rendered dropdown.
     */
    private function renderDropdown(NavigationNode $node, array $items): string {

        if (0 === count($items)) {
            return "";
        }

        $innerHTML = implode("\n", $items);
        $dropdown  = static::coreHtmlElement("ul", "\n$innerHTML\n", ["class" => "ml-menu"]);

        return "$dropdown\n";
    }

    /**
     * Render an header node.
     *
     * @param HeaderNode $node The header node.
     * @return string Returns the rendered header node.
     */
    private function renderHeader(HeaderNode $node): string {
        return static::coreHtmlElement("li", $node->getLabel(), ["class" => "header"]);
    }

    /**
     * Render an icon.
     *
     * @param NavigationNode $node The navigation node.
     * @return string Returns the rendered icon.
     */
    private function renderIcon(NavigationNode $node): string {

        if (null === $node->getIcon()) {
            return "";
        }

        return AssetsTwigExtension::renderIcon($this->getTwigEnvironment(), $node->getIcon()) . "\n";
    }

    /**
     * Render a navigation node.
     *
     * @param NavigationNode $node The navigation node.
     * @param int $level The level.
     * @return string Returns the rendered navigation node.
     */
    private function renderNavigation(NavigationNode $node, int $level = 0): string {

        $anchor = $this->renderAnchor($node);

        $attributes = true === $node->getActive() ? ["class" => "active"] : [];

        if (0 === $node->size()) {
            return static::coreHtmlElement("li", "\n$anchor", $attributes);
        }

        $items = [];
        foreach ($node->getNodes() as $current) {

            $item = $this->renderNode($current, $level + 1);
            if ("" === $item) {
                continue;
            }

            $items[] = $item;
        }

        $dropdown = $this->renderDropdown($node, $items);

        return static::coreHtmlElement("li", "\n$anchor$dropdown", $attributes);
    }

    /**
     * Render a node.
     *
     * @param AbstractNavigationNode $node The node.
     * @param int $level The level.
     * @return string Returns the rendered node.
     */
    private function renderNode(AbstractNavigationNode $node, int $level = 0): string {

        if (false === $node->isDisplayable()) {
            return "";
        }

        if (true === ($node instanceof HeaderNode)) {
            return $this->renderHeader($node);
        }

        if (true === ($node instanceof NavigationNode)) {
            return $this->renderNavigation($node, $level);
        }

        return "";
    }

    /**
     * Render a span.
     *
     * @param NavigationNode $node The navigation node.
     * @return string Returns the rendered span.
     */
    private function renderSpan(NavigationNode $node): string {

        $innerHTML = null !== $node->getId() ? $node->getLabel() : "";

        return static::coreHtmlElement("span", $innerHTML) . "\n";
    }
}
