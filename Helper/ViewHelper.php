<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Helper;

use WBW\Library\Core\Exception\FileSystem\IOException;

/**
 * View helper.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Helper
 */
class ViewHelper {

    /**
     * Write.
     *
     * @param string $filename The filename.
     * @param string $content The content.
     * @param boolean $overwrite Overwrite ?
     * @return void
     * @throws IOException Throws an I/O exception an I/O error occurs.
     */
    public static function write($filename, $content, $overwrite = false) {

        // Check the filename.
        if (true === file_exists($filename) && false === $overwrite) {
            return;
        }

        // Get and check the directory.
        $directory = dirname($filename);
        if (false === file_exists($directory)) {

            // Create the directories.
            mkdir($directory, 0755, true);
        }

        // Open the filename.
        $stream = @fopen($filename, "w");
        if (false === $stream) {
            throw new IOException(sprintf("Failed to open \"%s\"", $filename));
        }

        // Write the content.
        if (false === @fwrite($stream, $content)) {
            throw new IOException(sprintf("Failed to write into \"%s\"", $filename));
        }

        // Close the filename.
        if (false === @fclose($stream)) {
            throw new IOException(sprintf("Failed to close \"%s\"", $filename));
        }
    }

}
