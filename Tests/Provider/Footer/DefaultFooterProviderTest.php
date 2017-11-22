<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Provider\Footer;

use PHPUnit_Framework_TestCase;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Footer\FooterProviderInterface;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Footer\DefaultFooterProvider;

/**
 * Default footer provider test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Provider\Footer
 * @final
 */
final class DefaultFooterProviderTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj = new DefaultFooterProvider();

		$this->assertEquals(FooterProviderInterface::DEFAULT_TEMPLATE, $obj->getTemplate());
	}

}
