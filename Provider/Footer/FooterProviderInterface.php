<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Footer;

/**
 * Footer provider interface.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Provider\Footer
 */
interface FooterProviderInterface {

    /**
     * Default template.
     *
     * @var string
     */
    const DEFAULT_TEMPLATE = "@ABSBMD/html/body/section/aside/div.legal.html.twig";

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.provider.footer";

    /**
     * Get the template.
     *
     * @return string Returns the template.
     */
    public function getTemplate();
}
