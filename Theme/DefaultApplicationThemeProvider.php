<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Theme;

use WBW\Bundle\CoreBundle\Theme\DefaultApplicationThemeProvider as BaseApplicationThemeProvider;

/**
 * Default application theme provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Theme
 */
class DefaultApplicationThemeProvider extends BaseApplicationThemeProvider {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * {@inheritdoc}
     */
    public function getDescription() {
        return "AdminBSB bundle";
    }

    /**
     * {@inheritdoc}
     */
    public function getName() {
        return "AdminBSB<b>bundle</b>";
    }

    /**
     * {@inheritdoc}
     */
    public function getTitle() {
        return "AdminBSB bundle";
    }

}
