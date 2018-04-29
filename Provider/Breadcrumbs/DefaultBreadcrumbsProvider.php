<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Provider\Breadcrumbs;

use WBW\Bundle\BootstrapBundle\Provider\Breadcrumbs\BreadcrumbsProviderInterface;

/**
 * Default breadcrumbs provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Provider\Breadcrumbs
 */
class DefaultBreadcrumbsProvider implements BreadcrumbsProviderInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * {@inheritdoc}
     */
    public function getView() {
        return "@ABSBMD/html/body/section/div/div.block-header.html.twig";
    }

}
