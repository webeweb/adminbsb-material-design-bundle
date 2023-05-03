<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests;

use WBW\Bundle\AdminBSBBundle\DependencyInjection\WBWAdminBSBExtension;
use WBW\Bundle\AdminBSBBundle\WBWAdminBSBBundle;
use WBW\Bundle\CoreBundle\Provider\AssetsProviderInterface;
use WBW\Library\Symfony\Helper\AssetsHelper;

/**
 * AdminBSB bundle test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests
 */
class WBWAdminBSBBundleTest extends AbstractTestCase {

    /**
     * Test getAssetsRelativeDirectory()
     *
     * @retrun void
     */
    public function testGetAssetsRelativeDirectory(): void {

        $obj = new WBWAdminBSBBundle();

        $this->assertEquals(AssetsProviderInterface::ASSETS_RELATIVE_DIRECTORY, $obj->getAssetsRelativeDirectory());
    }

    /**
     * Test getContainerExtension()
     *
     * @return void
     */
    public function testGetContainerExtension(): void {

        $obj = new WBWAdminBSBBundle();

        $this->assertInstanceOf(WBWAdminBSBExtension::class, $obj->getContainerExtension());
    }

    /**
     * Test getSkeletonRelativeDirectory()
     *
     * @return void
     */
    public function testGetSkeletonRelativeDirectory(): void {

        $obj = new WBWAdminBSBBundle();
        $obj->setContainer($this->containerBuilder);

        $this->assertEquals("/Resources/skeleton", $obj->getSkeletonRelativeDirectory());
    }

    /**
     * Test getTranslationDomain()
     *
     * @return void
     */
    public function testGetTranslationDomain(): void {

        $this->assertEquals(WBWAdminBSBBundle::TRANSLATION_DOMAIN, WBWAdminBSBBundle::getTranslationDomain());
    }

    /**
     * Test listAssets()
     *
     * @return void
     */
    public function testListAssets(): void {

        $assets = realpath(__DIR__ . "/../Resources/assets");

        $res = AssetsHelper::listAssets($assets);
        $this->assertCount(42, $res);

        $i = -1;

        $this->assertRegExp("/animate-css\.zip$/", $res[++$i]);
        $this->assertRegExp("/autosize\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap-colorpicker\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap-material-datetimepicker\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap-notify\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap-select\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap-tagsinput\.zip$/", $res[++$i]);
        $this->assertRegExp("/bootstrap\.zip$/", $res[++$i]);
        $this->assertRegExp("/chartjs\.zip$/", $res[++$i]);
        $this->assertRegExp("/chosen\.zip$/", $res[++$i]);
        $this->assertRegExp("/ckeditor\.zip$/", $res[++$i]);
        $this->assertRegExp("/dropzone\.zip$/", $res[++$i]);
        $this->assertRegExp("/editable-table\.zip$/", $res[++$i]);
        $this->assertRegExp("/flot-charts\.zip$/", $res[++$i]);
        $this->assertRegExp("/font-awesome\.zip$/", $res[++$i]);
        $this->assertRegExp("/gmaps\.zip$/", $res[++$i]);
        $this->assertRegExp("/ion-rangeslider\.zip$/", $res[++$i]);
        $this->assertRegExp("/jquery-cookie\.zip$/", $res[++$i]);
        $this->assertRegExp("/jquery-countto\.zip$/", $res[++$i]);
        $this->assertRegExp("/jquery-datatable\.zip$/", $res[++$i]);
        $this->assertRegExp("/jquery-inputmask\.zip$/", $res[++$i]);
        $this->assertRegExp("/jquery-knob\.zip$/", $res[++$i]);
        $this->assertRegExp("/jquery-slimscroll\.zip$/", $res[++$i]);
        $this->assertRegExp("/jquery-sparkline\.zip$/", $res[++$i]);
        $this->assertRegExp("/jquery-spinner\.zip$/", $res[++$i]);
        $this->assertRegExp("/jquery-steps\.zip$/", $res[++$i]);
        $this->assertRegExp("/jquery-validation\.zip$/", $res[++$i]);
        $this->assertRegExp("/jquery\.zip$/", $res[++$i]);
        $this->assertRegExp("/jvectormap\.zip$/", $res[++$i]);
        $this->assertRegExp("/light-gallery\.zip$/", $res[++$i]);
        $this->assertRegExp("/material-design-iconic-font\.zip$/", $res[++$i]);
        $this->assertRegExp("/materialize-css\.zip$/", $res[++$i]);
        $this->assertRegExp("/momentjs\.zip$/", $res[++$i]);
        $this->assertRegExp("/morrisjs\.zip$/", $res[++$i]);
        $this->assertRegExp("/multi-select\.zip$/", $res[++$i]);
        $this->assertRegExp("/nestable\.zip$/", $res[++$i]);
        $this->assertRegExp("/node-waves\.zip$/", $res[++$i]);
        $this->assertRegExp("/nouislider\.zip$/", $res[++$i]);
        $this->assertRegExp("/raphael\.zip$/", $res[++$i]);
        $this->assertRegExp("/sweetalert\.zip$/", $res[++$i]);
        $this->assertRegExp("/tinymce\.zip$/", $res[++$i]);
        $this->assertRegExp("/waitme\.zip$/", $res[++$i]);
    }

    /**
     * Test __construct()
     *
     * @return void
     */
    public function test__construct(): void {

        $this->assertEquals("WBWAdminBSBBundle", WBWAdminBSBBundle::TRANSLATION_DOMAIN);
    }
}
