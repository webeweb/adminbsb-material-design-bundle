<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Provider\DropDown;

use WBW\Bundle\AdminBSBBundle\Provider\DropDown\DefaultDropDownNotificationsProvider;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractAdminBSBFrameworkTestCase;

/**
 * Default drop down hook provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Provider\DropDown
 * @final
 */
final class DefaultDropDownNotificationsProviderTest extends AbstractAdminBSBFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DefaultDropDownNotificationsProvider();

        $this->assertEquals([], $obj->getNotifications());
        $this->assertEquals("@ABSBMD/html/body/nav/div/div/ul/li.dropdown_notifications.html.twig", $obj->getView());
    }

}
