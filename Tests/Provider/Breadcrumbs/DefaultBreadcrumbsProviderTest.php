<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Provider\Breadcrumbs;

use WBW\Bundle\AdminBSBBundle\Provider\Breadcrumbs\DefaultBreadcrumbsProvider;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractAdminBSBFrameworkTestCase;

/**
 * DefaultBreadcrumbsProviderTest
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Provider\Breadcrumbs
 * @final
 */
final class DefaultBreadcrumbsProviderTest extends AbstractAdminBSBFrameworkTestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DefaultBreadcrumbsProvider();

        $this->assertEquals("@ABSBMD/html/body/section/div/div.block-header.html.twig", $obj->getView());
    }

}
