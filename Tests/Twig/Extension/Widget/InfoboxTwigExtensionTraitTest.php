<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2019 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Widget;

use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Twig\Extension\Widget\TestInfoboxTwigExtensionTrait;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Widget\InfoboxTwigExtension;

/**
 * Infobox Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Widget
 */
class InfoboxTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the setInfoboxTwigExtension() method.
     *
     * @return void
     */
    public function testSetInfoboxTwigExtension(): void {

        // Set a Infobox Twig extension mock.
        $infoboxTwigExtension = new InfoboxTwigExtension($this->twigEnvironment);

        $obj = new TestInfoboxTwigExtensionTrait();

        $obj->setInfoboxTwigExtension($infoboxTwigExtension);
        $this->assertSame($infoboxTwigExtension, $obj->getInfoboxTwigExtension());
    }
}
