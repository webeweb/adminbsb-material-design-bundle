<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Provider\Navigation;

use WBW\Bundle\BootstrapBundle\Navigation\Tree\NavigationTree;
use WBW\Bundle\BootstrapBundle\Provider\Navigation\NavigationProviderInterface;

/**
 * Default navigation provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Provider\Navigation
 */
class DefaultNavigationProvider implements NavigationProviderInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplate() {
        return "@ABSBMD/html/body/section/aside/div.menu.html.twig";
    }

    /**
     * {@inheritdoc}
     */
    public function getTree() {
        return new NavigationTree();
    }

}
