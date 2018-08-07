<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Provider\User;

use WBW\Bundle\AdminBSBBundle\Provider\User\DefaultUserInfoProvider;
use WBW\Bundle\AdminBSBBundle\Tests\Cases\AbstractAdminBSBFrameworkTestCase;

/**
 * Default user info provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Provider\User
 * @final
 */
final class DefaultUserInfoProviderTest extends AbstractAdminBSBFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DefaultUserInfoProvider();

        $this->assertEquals("@ABSBMD/html/body/section/aside/div.user-info.html.twig", $obj->getView());
        $this->assertFalse($obj->provideRegisterLink());
        $this->assertFalse($obj->provideResettingLink());
    }

}
