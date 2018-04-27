<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Provider\Footer;

use PHPUnit_Framework_TestCase;
use WBW\Bundle\AdminBSBBundle\Provider\Footer\DefaultFooterProvider;

/**
 * Default footer provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Provider\Footer
 * @final
 */
final class DefaultFooterProviderTest extends PHPUnit_Framework_TestCase {

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstructor() {

        $obj = new DefaultFooterProvider();

        $this->assertEquals("@ABSBMD/html/body/section/aside/div.legal.html.twig", $obj->getTemplate());
    }

}
