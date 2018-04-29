<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Provider\User;

use WBW\Bundle\BootstrapBundle\Provider\User\UserInfoProviderInterface;

/**
 * Default user info provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Provider\User
 */
class DefaultUserInfoProvider implements UserInfoProviderInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * {@inheritdoc}
     */
    public function provideRegisterLink() {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function provideResettingLink() {
        return false;
    }

    /**
     * {@inheritdoc}
     */
    public function getView() {
        return "@ABSBMD/html/body/section/aside/div.user-info.html.twig";
    }

}
