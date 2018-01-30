<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Provider\User;

use PHPUnit_Framework_TestCase;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\User\DefaultUserInfoProvider;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\User\UserInfoProviderInterface;

/**
 * Default user info provider test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
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

        $this->assertEquals(UserInfoProviderInterface::DEFAULT_TEMPLATE, $obj->getTemplate());
        $this->assertEquals(false, $obj->provideRegisterLink());
        $this->assertEquals(false, $obj->provideResettingLink());
    }

}
