<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Helper;

use WBW\Bundle\AdminBSBBundle\Helper\ViewHelper;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Library\Core\FileSystem\FileHelper;

/**
 * View helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Helper
 */
class ViewHelperTest extends AbstractTestCase {

    /**
     * Filename.
     *
     * @var string
     */
    private $filename;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set a Filename mock.
        $this->filename = getcwd() . "/views/write.txt";
    }

    /**
     * {@inehritdoc}
     */
    protected function tearDown() {
        parent::tearDown();

        // Remove the Filename mock.
        if (true === file_exists($this->filename)) {
            unlink($this->filename);
            rmdir(dirname($this->filename));
        }
    }

    /**
     * Tests the write() method.
     *
     * @return
     */
    public function testWrite() {

        $this->assertFileNotExists($this->filename);

        // Write.
        $this->assertNull(ViewHelper::write($this->filename, "content\n"));
        $this->assertFileExists($this->filename);

        $size = FileHelper::getSize($this->filename);

        // Write without overwrite.
        $this->assertNull(ViewHelper::write($this->filename, "another content\n"));
        $this->assertFileExists($this->filename);

        $this->assertEquals($size, FileHelper::getSize($this->filename));

        // Write with overwrite.
        $this->assertNull(ViewHelper::write($this->filename, "another content\n", true));
        $this->assertFileExists($this->filename);

        $this->assertGreaterThan($size, FileHelper::getSize($this->filename));
    }
}
