<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Provider\Bootstrap\Theme;

use WBW\Bundle\BootstrapBundle\Provider\Theme\TasksDropDownThemeProviderInterface;

/**
 * Default tasks drop down theme provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Provider\Bootstrap\Theme
 */
class DefaultTasksDropDownThemeProvider implements TasksDropDownThemeProviderInterface {

    /**
     * Constructor.
     */
    public function __construct() {
        // NOTHING TO DO.
    }

    /**
     * {@inheritdoc}
     */
    public function getTasks() {
        return [];
    }

    /**
     * {@inheritdoc}
     */
    public function getView() {
        return null;
    }

}
