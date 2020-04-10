<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Typography;

use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Twig\Extension\Typography\TestTypographyTwigExtensionTrait;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Typography\TypographyTwigExtension;

/**
 * Typography Twig extension trait test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Typography
 */
class TypographyTwigExtensionTraitTest extends AbstractTestCase {

    /**
     * Tests the setTypographyTwigExtension() method.
     *
     * @return void
     */
    public function testSetTypographyTwigExtension() {

        // Set a Typography Twig extension mock.
        $typographyTwigExtension = new TypographyTwigExtension($this->twigEnvironment, $this->translator);

        $obj = new TestTypographyTwigExtensionTrait();

        $obj->setTypographyTwigExtension($typographyTwigExtension);
        $this->assertSame($typographyTwigExtension, $obj->getTypographyTwigExtension());
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct() {

        $obj = new TestTypographyTwigExtensionTrait();

        $this->assertNull($obj->getTypographyTwigExtension());
    }
}
