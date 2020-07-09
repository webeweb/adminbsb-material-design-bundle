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

use Symfony\Component\Translation\TranslatorInterface;
use Twig\Environment;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\RendererTwigExtension;
use WBW\Bundle\CoreBundle\Navigation\AbstractNavigationNode;
use WBW\Bundle\CoreBundle\Navigation\HeaderNode;
use WBW\Bundle\CoreBundle\Navigation\NavigationNode;
use WBW\Bundle\CoreBundle\Navigation\NavigationTree;
use WBW\Bundle\CoreBundle\Service\TranslatorTrait;

/**
 * Abstract multi level menu Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Menu
 * @abstract
 */
abstract class AbstractMenuTwigExtension extends AbstractTwigExtension {

    use TranslatorTrait;

    /**
     * Constructor.
     *
     * @param Environment $twigEnvironment The Twig environment.
     * @param TranslatorInterface $translator The translator.
     */
    public function __construct(Environment $twigEnvironment, TranslatorInterface $translator) {
        parent::__construct($twigEnvironment);
        $this->setTranslator($translator);
    }

    /**
     * Displays an AdminBSB  menu.
     *
     * @param NavigationTree $tree The navigation tree.
     * @return string Returns the Admin BSB menu.
     */
    protected function adminBSBMenu(NavigationTree $tree) {

        $templates = [];

        foreach ($tree->getNodes() as $current) {
            $templates[] = $this->renderNode($current);
        }

        return implode("\n", $templates);
    }

    /**
     * Render an anchor.
     *
     * @param NavigationNode $node The navigation node.
     * @param int $level The level.
     * @return string Returns the rendered anchor.
     */
    private function renderAnchor(NavigationNode $node, $level = 0) {

        $attributes = [
            "href"   => $node->getUri(),
            "target" => $node->getTarget(),
        ];

        if (0 < $node->size() && true === $node->isDisplayable()) {
            $attributes["class"] = "menu-toggle";
        }

        $icon = $this->renderIcon($node);
        $span = $this->renderSpan($node);

        return static::coreHTMLElement("a", "\n${icon}{$span}", $attributes) . "\n";
    }

    /**
     * Render a dropdown.
     *
     * @param NavigationNode $node The navigation node.
     * @param array $items The items.
     * @return string Returns the rendered dropdown.
     */
    private function renderDropdown(NavigationNode $node, array $items) {

        $innerHTML = implode("\n", $items);

        $dropdown = static::coreHTMLElement("ul", "\n{$innerHTML}", ["class" => "ml-menu"]);

        return "{$dropdown}\n";
    }

    /**
     * Render an header node.
     *
     * @param HeaderNode $node The header node.
     * @param int $level The level.
     * @return string Returns the rendered header node.
     */
    private function renderHeader(HeaderNode $node, $level = 0) {
        return self::coreHTMLElement("li", $node->getLabel(), ["class" => "header"]);
    }

    /**
     * Render an icon.
     *
     * @param NavigationNode $node The navigation node.
     * @return string Returns the rendered icon.
     */
    private function renderIcon(NavigationNode $node) {
        if (null === $node->getIcon()) {
            return "";
        }
        return RendererTwigExtension::renderIcon($this->getTwigEnvironment(), $node->getIcon()) . "\n";
    }

    /**
     * Render a navigation node.
     *
     * @param NavigationNode $node The navigation node.
     * @param int $level The level.
     * @return string Returns the rendered navigation node.
     */
    private function renderNavigation(NavigationNode $node, $level = 0) {

        $anchor = $this->renderAnchor($node, $level);

        $attributes = true === $node->getActive() ? ["class" => "active"] : [];

        if (0 === $node->size()) {
            return static::coreHTMLElement("li", "\n{$anchor}", $attributes);
        }

        $items = [];
        foreach ($node->getNodes() as $current) {
            $items[] = $this->renderNode($current, $level + 1);
        }

        $dropdown = $this->renderDropdown($node, $items);

        return static::coreHTMLElement("li", "\n{$anchor}{$dropdown}", $attributes);
    }

    /**
     * Render a node.
     *
     * @param AbstractNavigationNode $node The node.
     * @param int $level The level.
     * @return string Returns the rendered node.
     */
    private function renderNode(AbstractNavigationNode $node, $level = 0) {

        if (false === $node->isDisplayable()) {
            return "";
        }

        if (true === ($node instanceof HeaderNode)) {
            return $this->renderHeader($node, $level);
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
    private function renderSpan(NavigationNode $node) {

        $innerHTML = null !== $node->getId() ? $this->translate($node->getLabel()) : "";

        return static::coreHTMLElement("span", $innerHTML) . "\n";
    }

    /**
     * Translate.
     *
     * @param string $id The translation id.
     * @return string Returns the translation in case of success, id otherwise.
     */
    private function translate($id) {

        $core = $this->getTranslator()->trans($id, [], "WBWCoreBundle");
        if ($id !== $core) {
            return $core;
        }

        $bootstrap = $this->getTranslator()->trans($id, [], "WBWBootstrapBundle");
        if ($id !== $bootstrap) {
            return $bootstrap;
        }

        $adminBSB = $this->getTranslator()->trans($id, [], "WBWAdminBSBBundle");
        if ($id !== $adminBSB) {
            return $adminBSB;
        }

        return $this->getTranslator()->trans($id);
    }
}
