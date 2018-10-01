<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;
use TestKernel;

/**
 * Abstract AdminBSB web test case.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests
 */
abstract class AbstractWebTestCase extends WebTestCase {

    /**
     * {@inheritdoc}
     */
    protected static function getKernelClass() {
        require_once __DIR__ . "/Fixtures/app/TestKernel.php";
        return TestKernel::class;
    }

    /**
     * {@inheritdoc}
     */
    public static function setUpBeforeClass() {
        parent::setUpBeforeClass();

        // Initialize and boot the kernel.
        static::$kernel = static::createKernel();
        static::$kernel->boot();
    }

    /**
     * {@inheritdoc}
     */
    protected function tearDown() {

        // Shutdown the kernel.
        static::$kernel->shutdown();
    }

}
