<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Provider\User;

use PHPUnit_Framework_TestCase;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\User\DefaultUserInfoProvider;

/**
 * Default user info provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Provider\User
 * @final
 */
final class DefaultUserInfoProviderTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new DefaultUserInfoProvider();

        $this->assertEquals("@ABSBMD/html/body/section/aside/div.user-info.html.twig", $obj->getTemplate());
        $this->assertFalse($obj->provideRegisterLink());
        $this->assertFalse($obj->provideResettingLink());
    }

}
