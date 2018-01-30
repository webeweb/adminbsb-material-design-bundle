<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Provider\Navigation;

use PHPUnit_Framework_TestCase;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Navigation\FOSUserNavigationProvider;
use WBW\Library\Core\Navigation\Node\BreadcrumbNode;

/**
 * FOS User navigation provider test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Provider\Navigation
 * @final
 */
final class FOSUserNavigationProviderTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the getBreadcrumb() method.
     *
     * @return void
     */
    public function testGetBreadcrumb() {

        $obj = new FOSUserNavigationProvider();

        $res = $obj->getBreadcrumb();
        $this->assertInstanceOf(BreadcrumbNode::class, $res);
        $this->assertCount(2, $res->getNodes());
        $this->assertEquals("label.user_profile_edit", $res->getNodeAt(0)->getId());
        $this->assertEquals("person", $res->getNodeAt(0)->getIcon());
        $this->assertEquals("fos_user_profile_edit", $res->getNodeAt(0)->getRoute());
        $this->assertEquals("label.user_change_password", $res->getNodeAt(1)->getId());
        $this->assertEquals("person", $res->getNodeAt(1)->getIcon());
        $this->assertEquals("fos_user_change_password", $res->getNodeAt(1)->getRoute());
    }

}
