<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget;

use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractAdminBSBTwigExtension;

/**
 * Abstract widget twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget
 * @abstract
 */
abstract class AbstractWidgetTwigExtension extends AbstractAdminBSBTwigExtension {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

}
