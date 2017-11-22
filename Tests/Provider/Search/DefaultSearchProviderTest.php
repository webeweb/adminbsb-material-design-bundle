<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Provider\Search;

use PHPUnit_Framework_TestCase;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Search\SearchProviderInterface;
use WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Search\DefaultSearchProvider;

/**
 * Default search provider test.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Tests\Provider\Search
 * @final
 */
final class DefaultSearchProviderTest extends PHPUnit_Framework_TestCase {

	/**
	 * Tests the __construct() method.
	 *
	 * @return void
	 */
	public function testConstructor() {

		$obj = new DefaultSearchProvider();

		$this->assertEquals(SearchProviderInterface::DEFAULT_TEMPLATE, $obj->getTemplate());
	}

}
