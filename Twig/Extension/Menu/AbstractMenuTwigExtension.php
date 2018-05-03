<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Menu;

use Symfony\Component\Translation\TranslatorInterface;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractAdminBSBTwigExtension;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\IconUITwigExtension;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationNode;
use WBW\Bundle\BootstrapBundle\Navigation\NavigationTree;
use WBW\Library\Core\Utility\Argument\StringUtility;

/**
 * Abstract multi level menu Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Menu
 * @abstract
 */
abstract class AbstractMenuTwigExtension extends AbstractAdminBSBTwigExtension {

    /**
     * Translator;
     *
     * @var TranslatorInterface
     */
    protected $translator;

    /**
     * Constructor.
     *
     * @param TranslatorInterface $translator The translator.
     */
    protected function __construct(TranslatorInterface $translator) {
        parent::__construct();
        $this->translator = $translator;
    }

    /**
     * Displays an AdminBSB menu.
     *
     * @param NavigationTree $tree The tree.
     * @return string Returns the AdminBSB menu.
     */
    protected function adminBSBMenu(NavigationTree $tree) {

        // Initialize the template.
        $template = [];

        $template[] = $this->adminBSBMenuHeader($tree);
        foreach ($tree->getNodes() as $current) {
            if (false === $this->isValidNode($current)) {
                continue;
            }
            $template[] = $this->adminBSBMenuItem($current);
        }

        // Return the HTML.
        return implode("\n", $template);
    }

    /**
     * Displays an AdminBSB menu header.
     *
     * @param NavigationTree $tree The tree.
     * @return string Returns the AdminBSB menu header.
     */
    private function adminBSBMenuHeader(NavigationTree $tree) {

        // Initialize the template.
        $template = "<li %attributes%>%innerHTML%</li>";

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"] = "menu-header";

        // Initialize the parameters.
        $innerHTML = null !== $tree->getId() ? $this->translator->trans($tree->getId()) : "";

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%", "%innerHTML%"], [StringUtility::parseArray($attributes), $innerHTML]);
    }

    /**
     * Displays an AdminBSB menu item.
     *
     * @param string $content The menu item content.
     * @param string $url The menu item URL.
     * @param string $icon The menu item icon.
     * @param boolean $active Menu item active ?
     * @param array $nodes The menu item nodes.
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

        // Initialize the template.
        $template = [];

        $template[] = "<li" . (true === $node->getActive() ? ' class="active"' : "") . ">";
        $template[] = $this->adminBSBMenuItemLink($node, (true === $multiLevelMenu ? "menu-toggle" : null));

        if (true === $multiLevelMenu) {
            $template[] = '<ul class="ml-menu">';

            foreach ($node->getNodes() as $current) {
                if (false === $this->isValidNode($current)) {
                    continue;
                }
                $template[] = $this->adminBSBMenuItem($current);
            }
            $template[] = "</ul>";
        }

        $template [] = "</li>";

        // Return the HTML.
        return implode("\n", $template);
    }

    /**
     * Displays an AdminBSB menu item label.
     *
     * @param NavigationNode $node The node.
     * @return string Returns the AdminBSB menu label.
     */
    private function adminBSBMenuItemLabel(NavigationNode $node) {

        // Initialize the parameters.
        $innerHTML = null !== $node->getId() ? $this->translator->trans($node->getId()) : "";

        // Check the icon.
        if (null === $node->getIcon()) {
            return $innerHTML;
        }

        // Initialize the template.
        $template = "%icon%<span>%innerHTML%</span>";

        // Initialize the parameters.
        $glyphicon = (new IconUITwigExtension())->adminBSBBasicIconFunction(["name" => $node->getIcon()]);

        // Return the HTML.
        return StringUtility::replace($template, ["%icon%", "%innerHTML%"], [$glyphicon, $innerHTML]);
    }

    /**
     * Displays an AdminBSB menu item link.
     *
     * @param NavigationNode $node The node.
     * @param string $class The node class.
     * @return string Returns the AdminBSB menu item link.
     */
    private function adminBSBMenuItemLink(NavigationNode $node, $class) {

        // Initialize the template.
        $template = "<a %attributes%>%innerHTML%</a>";

        // Initialize the attributes.
        $attributes = [];

        $attributes["class"] = $class;
        $attributes["href"]  = $node->getUrl();

        // Initialize the parameters.
        $innerHTML = $this->adminBSBMenuItemLabel($node);

        // Return the HTML.
        return StringUtility::replace($template, ["%attributes%", "%innerHTML%"], [StringUtility::parseArray($attributes), $innerHTML]);
    }

    /**
     * Determines if a node is valid.
     *
     * @param mixed $node The node.
     * @return boolean Returns true in case of success, false otherwise.
     */
    private function isValidNode($node) {
        return true === ($node instanceof NavigationNode) && true === $node->isDisplayable();
    }

}
