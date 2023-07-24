<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2022 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Provider;

use WBW\Library\Symfony\Provider\JavascriptProviderInterface;

/**
 * Javascript provider.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Provider
 */
class JavascriptProvider implements JavascriptProviderInterface {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "wbw.adminbsb.provider.javascript";

    /**
     * {@inheritDoc}
     */
    public function getJavascripts(): array {

        return [
            "WBWAdminBSBJQueryCountTo" => "@WBWAdminBSB/assets/WBWAdminBSBJQueryCountTo.js.twig",
        ];
    }
}
