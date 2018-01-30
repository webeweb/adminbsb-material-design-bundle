<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Navigation;

use WBW\Library\Core\Navigation\Tree\NavigationTree;

/**
 * Navigation provider interface.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Navigation
 */
interface NavigationProviderInterface {

    /**
     * Default template.
     *
     * @var string
     */
    const DEFAULT_TEMPLATE = "@ABSBMD/html/body/section/aside/div.menu.html.twig";

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.provider.navigation";

    /**
     * Get the template.
     *
     * @return string Returns the template.
     */
    public function getTemplate();

    /**
     * Get the tree.
     *
     * @return NavigationTree Returns the tree.
     */
    public function getTree();
}
