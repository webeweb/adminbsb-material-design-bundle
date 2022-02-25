<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Plugin;

use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Twig\Extension\Plugin\TestDatetimePickerTwigExtensionTrait;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Plugin\DatetimePickerTwigExtension;

/**
 * Datetime picker Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Plugin
 */
class DatetimePickerTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests setDatetimePickerTwigExtension()
     *
     * @return void
     */
    public function testSetDatetimePickerTwigExtension(): void {

        // Set a Datetime picker Twig extension mock.
        $datetimePickerTwigExtension = new DatetimePickerTwigExtension($this->twigEnvironment, $this->translator);

        $obj = new TestDatetimePickerTwigExtensionTrait();

        $obj->setDatetimePickerTwigExtension($datetimePickerTwigExtension);
        $this->assertSame($datetimePickerTwigExtension, $obj->getDatetimePickerTwigExtension());
    }
}
