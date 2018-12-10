<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Helper;

use WBW\Bundle\AdminBSBBundle\Tests\AbstractFrameworkTestCase;
use WBW\Bundle\CoreBundle\Tests\Fixtures\Helper\TestAssetsHelper;

/**
 * Assets helper test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Helper
 */
class AssetsHelperTest extends AbstractFrameworkTestCase {

    /**
     * Directory "assets".
     *
     * @var string
     */
    private $directoryAssets;

    /**
     * {@inheritdoc}
     */
    protected function setUp() {
        parent::setUp();

        // Set the directories.
        $this->directoryAssets = getcwd() . "/Resources/assets";
    }

    /**
     * Tests the listAssets() method.
     *
     * @return void
     */
    public function testListAssets() {

        $res = TestAssetsHelper::listAssets($this->directoryAssets);
        $this->assertCount(42, $res);

        $this->assertRegExp("/animate\-css\.zip$/", $res[0]);
        $this->assertRegExp("/autosize\.zip$/", $res[1]);
        $this->assertRegExp("/bootstrap\-colorpicker\.zip$/", $res[2]);
        $this->assertRegExp("/bootstrap\-material-datetimepicker\.zip$/", $res[3]);
        $this->assertRegExp("/bootstrap\-notify\.zip$/", $res[4]);
        $this->assertRegExp("/bootstrap\-select\.zip$/", $res[5]);
        $this->assertRegExp("/bootstrap\-tagsinput\.zip$/", $res[6]);
        $this->assertRegExp("/bootstrap\.zip$/", $res[7]);
        $this->assertRegExp("/chartjs\.zip$/", $res[8]);
        $this->assertRegExp("/chosen\.zip$/", $res[9]);
        $this->assertRegExp("/ckeditor\.zip$/", $res[10]);
        $this->assertRegExp("/dropzone\.zip$/", $res[11]);
        $this->assertRegExp("/editable\-table\.zip$/", $res[12]);
        $this->assertRegExp("/flot\-charts\.zip$/", $res[13]);
        $this->assertRegExp("/font\-awesome\.zip$/", $res[14]);
        $this->assertRegExp("/gmaps\.zip$/", $res[15]);
        $this->assertRegExp("/ion\-rangeslider\.zip$/", $res[16]);
        $this->assertRegExp("/jquery\-cookie\.zip$/", $res[17]);
        $this->assertRegExp("/jquery\-countto\.zip$/", $res[18]);
        $this->assertRegExp("/jquery\-datatable\.zip$/", $res[19]);
        $this->assertRegExp("/jquery\-inputmask\.zip$/", $res[20]);
        $this->assertRegExp("/jquery\-knob\.zip$/", $res[21]);
        $this->assertRegExp("/jquery\-slimscroll\.zip$/", $res[22]);
        $this->assertRegExp("/jquery\-sparkline\.zip$/", $res[23]);
        $this->assertRegExp("/jquery\-spinner\.zip$/", $res[24]);
        $this->assertRegExp("/jquery\-steps\.zip$/", $res[25]);
        $this->assertRegExp("/jquery\-validation\.zip$/", $res[26]);
        $this->assertRegExp("/jquery\.zip$/", $res[27]);
        $this->assertRegExp("/jvectormap\.zip$/", $res[28]);
        $this->assertRegExp("/light-gallery\.zip$/", $res[29]);
        $this->assertRegExp("/material\-design\-iconic\-font\.zip$/", $res[30]);
        $this->assertRegExp("/materialize\-css\.zip$/", $res[31]);
        $this->assertRegExp("/momentjs\.zip$/", $res[32]);
        $this->assertRegExp("/morrisjs\.zip$/", $res[33]);
        $this->assertRegExp("/multi\-select\.zip$/", $res[34]);
        $this->assertRegExp("/nestable\.zip$/", $res[35]);
        $this->assertRegExp("/node\-waves\.zip$/", $res[36]);
        $this->assertRegExp("/nouislider\.zip$/", $res[37]);
        $this->assertRegExp("/raphael\.zip$/", $res[38]);
        $this->assertRegExp("/sweetalert\.zip$/", $res[39]);
        $this->assertRegExp("/tinymce\.zip$/", $res[40]);
        $this->assertRegExp("/waitme\.zip$/", $res[41]);
    }

}
