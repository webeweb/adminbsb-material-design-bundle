<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Provider\Search;

use WBW\Bundle\AdminBSBBundle\Provider\Search\DefaultSearchProvider;
use WBW\Bundle\AdminBSBBundle\Tests\Cases\AbstractAdminBSBFrameworkTestCase;

/**
 * Default search provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Provider\Search
 * @final
 */
final class DefaultSearchProviderTest extends AbstractAdminBSBFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DefaultSearchProvider();

        $this->assertEquals("@ABSBMD/html/body/div.search-bar.html.twig", $obj->getView());
    }

}
