<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Provider\Search;

use WBW\Bundle\BootstrapBundle\Provider\Search\SearchProviderInterface;

/**
 * Default search provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Provider\Search
 */
class DefaultSearchProvider implements SearchProviderInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * {@inheritdoc}
     */
    public function getTemplate() {
        return "@ABSBMD/html/body/div.search-bar.html.twig";
    }

}
