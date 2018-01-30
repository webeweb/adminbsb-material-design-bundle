<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Provider\DropDown;

use PHPUnit_Framework_TestCase;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\DropDown\DefaultDropDownTasksProvider;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\DropDown\DropDownTasksProviderInterface;

/**
 * Default drop down hook provider test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Provider\DropDown
 * @final
 */
final class DefaultDropDownTasksProviderTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new DefaultDropDownTasksProvider();

        $this->assertEquals([], $obj->getTasks());
        $this->assertEquals(DropDownTasksProviderInterface::DEFAULT_TEMPLATE, $obj->getTemplate());
    }

}
