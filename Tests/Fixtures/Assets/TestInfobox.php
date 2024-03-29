<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Assets;

use WBW\Bundle\AdminBSBBundle\Assets\AbstractInfobox;

/**
 * Test infobox.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Assets
 */
class TestInfobox extends AbstractInfobox {

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct(null);
    }
}
