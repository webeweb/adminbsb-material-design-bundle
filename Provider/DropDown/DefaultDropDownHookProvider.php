<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Provider\DropDown;

use WBW\Bundle\BootstrapBundle\Provider\DropDown\DropDownHookProviderInterface;

/**
 * Default drop down hook provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Provider\DropDown
 */
class DefaultDropDownHookProvider implements DropDownHookProviderInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * {@inheritdoc}
     */
    public function getItems() {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplate() {
        return "@ABSBMD/html/body/nav/div/div/ul/li.dropdown_hook.html.twig";
    }

}
