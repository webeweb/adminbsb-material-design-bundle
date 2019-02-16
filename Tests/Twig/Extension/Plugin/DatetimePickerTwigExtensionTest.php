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

use Twig_Node;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\Plugin\DatetimePickerTwigExtension;

/**
 * Datetime picker Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\Plugin
 */
class DatetimePickerTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the adminBSBDatePickerFunction() method.
     *
     * @return void
     */
    public function testAdminBSBDatePickerFunction() {

        $obj = new DatetimePickerTwigExtension($this->twigEnvironment, $this->translator);

        $arg = ["selector" => "selector", "clearButton" => true, "format" => "DD/MM/YYYY", "lang" => "fr", "weekStart" => 1];
        $res = <<< EOT
<script type="text/javascript">
    $("selector").bootstrapMaterialDatePicker({
        cancelText: "label.cancel",
        clearButton: true,
        clearText: "label.delete",
        date: true,
        format: "DD/MM/YYYY",
        lang: "fr",
        time: false,
        weekStart: 1
    });
</script>
EOT;
        $this->assertEquals($res, $obj->adminBSBDatePickerFunction($arg));
    }

    /**
     * Tests the adminBSBDatePickerFunction() method.
     *
     * @return void
     */
    public function testAdminBSBDatePickerFunctionWithSelectorOnly() {

        $obj = new DatetimePickerTwigExtension($this->twigEnvironment, $this->translator);

        $arg = ["selector" => "selector"];
        $res = <<<'EOT'
<script type="text/javascript">
    $("selector").bootstrapMaterialDatePicker({
        cancelText: "label.cancel",
        clearButton: false,
        clearText: "label.delete",
        date: true,
        format: "YYYY-MM-DD",
        lang: "en",
        time: false,
        weekStart: 0
    });
</script>
EOT;
        $this->assertEquals($res, $obj->adminBSBDatePickerFunction($arg));
    }

    /**
     * Tests the adminBSBDatetimePickerFunction() method.
     *
     * @return void
     */
    public function testAdminBSBDatetimePickerFunction() {

        $obj = new DatetimePickerTwigExtension($this->twigEnvironment, $this->translator);

        $arg = ["selector" => "selector", "clearButton" => true, "format" => "DD/MM/YYYY HH mm", "lang" => "fr", "weekStart" => 1];
        $res = <<<'EOT'
<script type="text/javascript">
    $("selector").bootstrapMaterialDatePicker({
        cancelText: "label.cancel",
        clearButton: true,
        clearText: "label.delete",
        date: true,
        format: "DD/MM/YYYY HH mm",
        lang: "fr",
        time: true,
        weekStart: 1
    });
</script>
EOT;
        $this->assertEquals($res, $obj->adminBSBDatetimePickerFunction($arg));
    }

    /**
     * Tests the adminBSBDatetimePickerFunction() method.
     *
     * @return void
     */
    public function testAdminBSBDatetimePickerFunctionWithSelectorOnly() {

        $obj = new DatetimePickerTwigExtension($this->twigEnvironment, $this->translator);

        $arg = ["selector" => "selector"];
        $res = <<< EOT
<script type="text/javascript">
    $("selector").bootstrapMaterialDatePicker({
        cancelText: "label.cancel",
        clearButton: false,
        clearText: "label.delete",
        date: true,
        format: "YYYY-MM-DD - HH:mm",
        lang: "en",
        time: true,
        weekStart: 0
    });
</script>
EOT;
        $this->assertEquals($res, $obj->adminBSBDatetimePickerFunction($arg));
    }

    /**
     * Tests the adminBSBTimePickerFunction() method.
     *
     * @return void
     */
    public function testAdminBSBTimePickerFunction() {

        $obj = new DatetimePickerTwigExtension($this->twigEnvironment, $this->translator);

        $arg = ["selector" => "selector", "clearButton" => true, "format" => "HH mm", "lang" => "fr"];
        $res = <<< EOT
<script type="text/javascript">
    $("selector").bootstrapMaterialDatePicker({
        cancelText: "label.cancel",
        clearButton: true,
        clearText: "label.delete",
        date: false,
        format: "HH mm",
        lang: "fr",
        time: true,
        weekStart: 0
    });
</script>
EOT;
        $this->assertEquals($res, $obj->adminBSBTimePickerFunction($arg));
    }

    /**
     * Tests the adminBSBTimePickerFunction() method.
     *
     * @return void
     */
    public function testAdminBSBTimePickerFunctionWithSelectorOnly() {

        $obj = new DatetimePickerTwigExtension($this->twigEnvironment, $this->translator);

        $arg = ["selector" => "selector"];
        $res = <<< EOT
<script type="text/javascript">
    $("selector").bootstrapMaterialDatePicker({
        cancelText: "label.cancel",
        clearButton: false,
        clearText: "label.delete",
        date: false,
        format: "HH:mm",
        lang: "en",
        time: true,
        weekStart: 0
    });
</script>
EOT;
        $this->assertEquals($res, $obj->adminBSBTimePickerFunction($arg));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new DatetimePickerTwigExtension($this->twigEnvironment, $this->translator);

        $this->assertEquals("webeweb.adminbsb.twig.extension.plugin.datetime_picker", DatetimePickerTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
        $this->assertSame($this->translator, $obj->getTranslator());
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new DatetimePickerTwigExtension($this->twigEnvironment, $this->translator);

        $res = $obj->getFunctions();
        $this->assertCount(3, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("adminBSBDatePicker", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBDatePickerFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("adminBSBDatetimePicker", $res[1]->getName());
        $this->assertEquals([$obj, "adminBSBDatetimePickerFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("adminBSBTimePicker", $res[2]->getName());
        $this->assertEquals([$obj, "adminBSBTimePickerFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));
    }
}
