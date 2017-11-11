<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Navigation\Node\Action;

use WBW\Library\Core\Navigation\Node\NavigationNode;

/**
 * Navigation node "Edit" action.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Navigation\Node\Action
 * @final
 */
final class NavigationNodeEditAction extends NavigationNode {

	/**
	 * Constructor.
	 *
	 * @param string $route The route.
	 */
	public function __construct($route = null) {
		parent::__construct("navigation.node.action.edit", "edit", $route);
	}

}