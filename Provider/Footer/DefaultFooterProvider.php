<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Provider\Footer;

use WBW\Bundle\BootstrapBundle\Provider\Footer\FooterProviderInterface;

/**
 * Default footer provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Provider\Footer
 */
class DefaultFooterProvider implements FooterProviderInterface {

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
        return "@ABSBMD/html/body/section/aside/div.legal.html.twig";
    }

}
