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

use Symfony\Component\HttpFoundation\Request;
use Twig\TwigFunction;
use WBW\Bundle\CoreBundle\Helper\Assets\NavigationNodeHelper;
use WBW\Library\Symfony\Assets\Navigation\NavigationTree;

/**
 * Multi level menu Twig extension.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Menu
 */
class MultiLevelMenuTwigExtension extends AbstractMenuTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.adminbsb.twig.extension.menu.multi_level_menu";

    /**
     * Displays an AdminBSB multi level menu.
     *
     * @param NavigationTree $tree The tree.
     * @param Request $request The request.
     * @return string Returns the AdminBSB multi level menu.
     */
    public function adminBSBMultiLevelMenuFunction(NavigationTree $tree, Request $request): string {
        NavigationNodeHelper::activeTree($tree, $request);
        return $this->adminBSBMenu($tree);
    }

    /**
     * Get the Twig functions.
     *
     * @return TwigFunction[] Returns the Twig functions.
     */
    public function getFunctions(): array {

        return [
            new TwigFunction("adminBSBMultiLevelMenu", [$this, "adminBSBMultiLevelMenuFunction"], ["is_safe" => ["html"]]),
        ];
    }
}
