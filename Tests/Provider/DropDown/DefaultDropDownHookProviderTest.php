<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Provider\DropDown;

use PHPUnit_Framework_TestCase;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\DropDown\DefaultDropDownHookProvider;

/**
 * Default drop down hook provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Provider\DropDown
 * @final
 */
final class DefaultDropDownHookProviderTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new DefaultDropDownHookProvider();

        $this->assertEquals([], $obj->getItems());
        $this->assertEquals("@ABSBMD/html/body/nav/div/div/ul/li.dropdown_hook.html.twig", $obj->getTemplate());
    }

}
