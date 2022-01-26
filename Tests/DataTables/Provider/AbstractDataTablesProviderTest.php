<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\DataTables\Provider;

use WBW\Bundle\AdminBSBBundle\DataTables\Provider\AbstractDataTablesProvider;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Tests\Fixtures\DataTables\Provider\TestDataTablesProvider;
use WBW\Bundle\BootstrapBundle\Twig\Extension\CSS\ButtonTwigExtension;
use WBW\Bundle\JQuery\DataTablesBundle\Api\DataTablesOptionsInterface;

/**
 * Abstract DataTables provider test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\DataTables\Provider
 */
class AbstractDataTablesProviderTest extends AbstractTestCase {

    /**
     * Button Twig extension.
     *
     * @var ButtonTwigExtension
     */
    private $buttonTwigExtension;

    /**
     * {@inheritDoc}
     */
    protected function setUp(): void {
        parent::setUp();

        // Set a Button Twig extension mock.
        $this->buttonTwigExtension = new ButtonTwigExtension($this->twigEnvironment);
    }

    /**
     * Tests the alignRight() methods.
     *
     * @return void
     */
    public function testAlignRight() {

        $obj = new TestDataTablesProvider($this->router, $this->translator, $this->buttonTwigExtension);

        $this->assertEquals("", $obj->alignRight(null));
        $this->assertEquals("", $obj->alignRight(""));
        $this->assertEquals('<span class="pull-right">content</span>', $obj->alignRight("content"));
    }

    /**
     * Tests the getOptions() method.
     *
     * @return void
     */
    public function testGetOptions(): void {

        $obj = new TestDataTablesProvider($this->router, $this->translator, $this->buttonTwigExtension);

        $res = $obj->getOptions();
        $this->assertInstanceOf(DataTablesOptionsInterface::class, $res);

        $this->assertEquals(2500, $res->getOption("searchDelay"));
    }

    /**
     * Tests the putItalic() methods.
     *
     * @return void
     */
    public function testPutItalic() {

        $obj = new TestDataTablesProvider($this->router, $this->translator, $this->buttonTwigExtension);

        $this->assertEquals("", $obj->putItalic(null));
        $this->assertEquals("", $obj->putItalic(""));
        $this->assertEquals("<em>content</em>", $obj->putItalic("content"));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("20px", AbstractDataTablesProvider::COLUMN_WIDTH_XXS);
        $this->assertEquals("40px", AbstractDataTablesProvider::COLUMN_WIDTH_XS);
        $this->assertEquals("80px", AbstractDataTablesProvider::COLUMN_WIDTH_S);
        $this->assertEquals("120px", AbstractDataTablesProvider::COLUMN_WIDTH_M);
        $this->assertEquals("160px", AbstractDataTablesProvider::COLUMN_WIDTH_L);
        $this->assertEquals("200px", AbstractDataTablesProvider::COLUMN_WIDTH_XL);
        $this->assertEquals("240px", AbstractDataTablesProvider::COLUMN_WIDTH_XXL);
        $this->assertEquals("280px", AbstractDataTablesProvider::COLUMN_WIDTH_XXXL);

        $this->assertEquals(AbstractDataTablesProvider::COLUMN_WIDTH_L, AbstractDataTablesProvider::COLUMN_WIDTH_ACTIONS);
        $this->assertEquals(AbstractDataTablesProvider::COLUMN_WIDTH_M, AbstractDataTablesProvider::COLUMN_WIDTH_DATE);
        $this->assertEquals(AbstractDataTablesProvider::COLUMN_WIDTH_XXS, AbstractDataTablesProvider::COLUMN_WIDTH_ICON);
        $this->assertEquals(AbstractDataTablesProvider::COLUMN_WIDTH_L, AbstractDataTablesProvider::COLUMN_WIDTH_LABEL);
        $this->assertEquals(AbstractDataTablesProvider::COLUMN_WIDTH_S, AbstractDataTablesProvider::COLUMN_WIDTH_THUMBNAIL);
        $this->assertEquals(AbstractDataTablesProvider::COLUMN_WIDTH_XS, AbstractDataTablesProvider::COLUMN_WIDTH_UNIT);
    }
}
