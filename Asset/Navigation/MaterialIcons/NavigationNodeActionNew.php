<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Asset\Navigation\MaterialIcons;

use WBW\Library\Symfony\Assets\Navigation\NavigationNode;

/**
 * Navigation node action "New".
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Asset\Navigation\MaterialIcons
 */
class NavigationNodeActionNew extends NavigationNode {

    /**
     * Constructor.
     *
     * @param string|null $uri The URI.
     * @param string $matcher The matcher.
     */
    public function __construct(string $uri = null, string $matcher = self::MATCHER_URL) {
        parent::__construct("navigation.node.action.new", "mi:add", $uri, $matcher);
    }
}
