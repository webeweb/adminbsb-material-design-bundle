<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\DropDown;

/**
 * Drop down "Notifications" provider interface.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\DropDown
 */
interface DropDownNotificationsProviderInterface {

    /**
     * Default template.
     *
     * @var string
     */
    const DEFAULT_TEMPLATE = "@ABSBMD/html/body/nav/div/div/ul/li.dropdown_notifications.html.twig";

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.provider.drop_down_notifications";

    /**
     * Get the notifications.
     *
     * @return array Returns the notifications.
     */
    public function getNotifications();

    /**
     * Get the template.
     *
     * @return string Returns the template.
     */
    public function getTemplate();
}
