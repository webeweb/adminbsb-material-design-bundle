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
use WBW\Bundle\CoreBundle\Navigation\NavigationNode;
use WBW\Bundle\CoreBundle\Navigation\NavigationTree;
use WBW\Bundle\CoreBundle\Service\TranslatorTrait;
use WBW\Library\Core\Argument\StringHelper;

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
     * Displays an AdminBSB menu.
     *
     * @param NavigationTree $tree The tree.
     * @return string Returns the AdminBSB menu.
     */
    protected function adminBSBMenu(NavigationTree $tree) {

        $template = [];

        $template[] = $this->adminBSBMenuHeader($tree);
        foreach ($tree->getNodes() as $current) {

            if (false === $this->isValidNode($current)) {
                continue;
            }

            /** @var NavigationNode $current */
            $template[] = $this->adminBSBMenuItem($current);
        }

        return implode("\n", $template);
    }

    /**
     * Displays an AdminBSB menu header.
     *
     * @param NavigationTree $tree The tree.
     * @return string Returns the AdminBSB menu header.
     */
    private function adminBSBMenuHeader(NavigationTree $tree) {

        $attributes = [];

        $attributes["class"] = "header";

        $innerHTML = null !== $tree->getId() ? $this->translate($tree->getId()) : "";

        return static::coreHTMLElement("li", $innerHTML, $attributes);
    }

    /**
     * Displays an AdminBSB menu item.
     *
     * @param NavigationNode $node The node.
     * @return string Returns the AdminBSB menu item.
     */
    private function adminBSBMenuItem(NavigationNode $node) {

        // Initialize the multi level menu.
        $multiLevelMenu = false;
        foreach ($node->getNodes() as $current) {
            if (false === $this->isValidNode($current)) {
                continue;
            }
            $multiLevelMenu = true;
            break;
        }

        $template = [];

        $template[] = "<li" . (true === $node->getActive() ? ' class="active"' : "") . ">";
        $template[] = $this->adminBSBMenuItemLink($node, (true === $multiLevelMenu ? "menu-toggle" : null));

        if (true === $multiLevelMenu) {
            $template[] = '<ul class="ml-menu">';

            foreach ($node->getNodes() as $current) {

                if (false === $this->isValidNode($current)) {
                    continue;
                }

                /** @var NavigationNode $current */
                $template[] = $this->adminBSBMenuItem($current);
            }
            $template[] = "</ul>";
        }

        $template [] = "</li>";

        return implode("\n", $template);
    }

    /**
     * Displays an AdminBSB menu item label.
     *
     * @param NavigationNode $node The node.
     * @return string Returns the AdminBSB menu label.
     */
    private function adminBSBMenuItemLabel(NavigationNode $node) {

        $innerHTML = null !== $node->getId() ? $this->translate($node->getId()) : "";

        if (null === $node->getIcon()) {
            return $innerHTML;
        }

        $template = "%glyphicon%<span>%innerHTML%</span>";

        $glyphicon = RendererTwigExtension::renderIcon($this->getTwigEnvironment(), $node->getIcon());

        return StringHelper::replace($template, ["%glyphicon%", "%innerHTML%"], [$glyphicon, $innerHTML]);
    }

    /**
     * Displays an AdminBSB menu item link.
     *
     * @param NavigationNode $node The node.
     * @param string $class The class.
     * @return string Returns the AdminBSB menu item link.
     */
    private function adminBSBMenuItemLink(NavigationNode $node, $class) {

        $attributes = [];

        $attributes["class"]  = $class;
        $attributes["href"]   = $node->getUri();
        $attributes["target"] = $node->getTarget();

        $innerHTML = $this->adminBSBMenuItemLabel($node);

        return static::coreHTMLElement("a", $innerHTML, $attributes);
    }

    /**
     * Determines if a node is valid.
     *
     * @param mixed $node The node.
     * @return bool Returns true in case of success, false otherwise.
     */
    private function isValidNode($node) {
        return true === ($node instanceof NavigationNode) && true === $node->isDisplayable();
    }

    /**
     * Translate.
     *
     * @param string $id The translation id.
     * @return string Returns the translation in case of success, id otherwise.
     */
    private function translate($id) {

        $outputC = $this->getTranslator()->trans($id, [], "WBWCoreBundle");
        if ($id !== $outputC) {
            return $outputC;
        }

        $outputB = $this->getTranslator()->trans($id, [], "WBWBootstrapBundle");
        if ($id !== $outputB) {
            return $outputB;
        }

        $outputA = $this->getTranslator()->trans($id, [], "WBWAdminBSBBundle");
        if ($id !== $outputA) {
            return $outputA;
        }

        return $this->getTranslator()->trans($id);
    }
}
