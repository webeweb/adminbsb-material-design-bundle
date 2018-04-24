<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\DropDown;

use WBW\Bundle\BootstrapBundle\Provider\DropDown\DropDownNotificationsProviderInterface;

/**
 * Default drop down "Notifications" provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\DropDown
 */
class DefaultDropDownNotificationsProvider implements DropDownNotificationsProviderInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * {@inheritdoc}
     */
    public function getNotifications() {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplate() {
        return "@ABSBMD/html/body/nav/div/div/ul/li.dropdown_notifications.html.twig";
    }

}
