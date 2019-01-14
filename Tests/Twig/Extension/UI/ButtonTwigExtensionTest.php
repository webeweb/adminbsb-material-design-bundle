<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI;

use Twig_Node;
use Twig_SimpleFilter;
use Twig_SimpleFunction;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractTestCase;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\UI\ButtonTwigExtension;

/**
 * Button Twig extension test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Twig\Extension\UI
 */
class ButtonTwigExtensionTest extends AbstractTestCase {

    /**
     * Tests the adminBSBButtonDangerFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonDangerFunction() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "disable" => true, "icon" => "person"];
        $res = '<button class="btn btn-danger waves-effect btn-lg" title="title" type="button" data-toggle="tooltip" disabled="disabled"><i class="material-icons" style="margin: -4px 2px 0; vertical-align: sub;">person</i>content</button>';
        $this->assertEquals($res, $obj->adminBSBButtonDangerFunction($arg));
    }

    /**
     * Tests the adminBSBButtonDangerFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonDangerFunctionWithBlock() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["block" => true];
        $res = '<button class="btn btn-danger waves-effect btn-block" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonDangerFunction($arg));
    }

    /**
     * Tests the adminBSBButtonDangerFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonDangerFunctionWithCircle() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["circle" => true];
        $res = '<button class="btn btn-danger waves-effect btn-circle waves-circle waves-float" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonDangerFunction($arg));
    }

    /**
     * Tests the adminBSBButtonDangerFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonDangerFunctionWithContent() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<button class="btn btn-danger waves-effect" type="button">content</button>';
        $this->assertEquals($res, $obj->adminBSBButtonDangerFunction($arg));
    }

    /**
     * Tests the adminBSBButtonDangerFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonDangerFunctionWithDisable() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["disable" => true];
        $res = '<button class="btn btn-danger waves-effect" type="button" disabled="disabled"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonDangerFunction($arg));
    }

    /**
     * Tests the adminBSBButtonDangerFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonDangerFunctionWithIcon() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["icon" => "person"];
        $res = '<button class="btn btn-danger waves-effect" type="button"><i class="material-icons">person</i></button>';
        $this->assertEquals($res, $obj->adminBSBButtonDangerFunction($arg));
    }

    /**
     * Tests the adminBSBButtonDangerFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonDangerFunctionWithSize() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["size" => "lg"];
        $res = '<button class="btn btn-danger waves-effect btn-lg" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonDangerFunction($arg));
    }

    /**
     * Tests the adminBSBButtonDangerFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonDangerFunctionWithTitle() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["title" => "title"];
        $res = '<button class="btn btn-danger waves-effect" title="title" type="button" data-toggle="tooltip"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonDangerFunction($arg));
    }

    /**
     * Tests the adminBSBButtonDangerFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonDangerFunctionWithoutArguments() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-danger waves-effect" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonDangerFunction($arg));
    }

    /**
     * Tests the adminBSBButtonDefaultFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonDefaultFunction() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "disable" => true, "icon" => "person"];
        $res = '<button class="btn btn-default waves-effect btn-lg" title="title" type="button" data-toggle="tooltip" disabled="disabled"><i class="material-icons" style="margin: -4px 2px 0; vertical-align: sub;">person</i>content</button>';
        $this->assertEquals($res, $obj->adminBSBButtonDefaultFunction($arg));
    }

    /**
     * Tests the adminBSBButtonDefaultFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonDefaultFunctionWithBlock() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["block" => true];
        $res = '<button class="btn btn-default waves-effect btn-block" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonDefaultFunction($arg));
    }

    /**
     * Tests the adminBSBButtonDefaultFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonDefaultFunctionWithCircle() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["circle" => true];
        $res = '<button class="btn btn-default waves-effect btn-circle waves-circle waves-float" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonDefaultFunction($arg));
    }

    /**
     * Tests the adminBSBButtonDefaultFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonDefaultFunctionWithContent() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<button class="btn btn-default waves-effect" type="button">content</button>';
        $this->assertEquals($res, $obj->adminBSBButtonDefaultFunction($arg));
    }

    /**
     * Tests the adminBSBButtonDefaultFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonDefaultFunctionWithDisable() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["disable" => true];
        $res = '<button class="btn btn-default waves-effect" type="button" disabled="disabled"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonDefaultFunction($arg));
    }

    /**
     * Tests the adminBSBButtonDefaultFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonDefaultFunctionWithIcon() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["icon" => "person"];
        $res = '<button class="btn btn-default waves-effect" type="button"><i class="material-icons">person</i></button>';
        $this->assertEquals($res, $obj->adminBSBButtonDefaultFunction($arg));
    }

    /**
     * Tests the adminBSBButtonDefaultFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonDefaultFunctionWithSize() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["size" => "lg"];
        $res = '<button class="btn btn-default waves-effect btn-lg" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonDefaultFunction($arg));
    }

    /**
     * Tests the adminBSBButtonDefaultFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonDefaultFunctionWithTitle() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["title" => "title"];
        $res = '<button class="btn btn-default waves-effect" title="title" type="button" data-toggle="tooltip"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonDefaultFunction($arg));
    }

    /**
     * Tests the adminBSBButtonDefaultFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonDefaultFunctionWithoutArguments() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-default waves-effect" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonDefaultFunction($arg));
    }

    /**
     * Tests the adminBSBButtonInfoFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonInfoFunction() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "disable" => true, "icon" => "person"];
        $res = '<button class="btn btn-info waves-effect btn-lg" title="title" type="button" data-toggle="tooltip" disabled="disabled"><i class="material-icons" style="margin: -4px 2px 0; vertical-align: sub;">person</i>content</button>';
        $this->assertEquals($res, $obj->adminBSBButtonInfoFunction($arg));
    }

    /**
     * Tests the adminBSBButtonDangerFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonInfoFunctionWithBlock() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["block" => true];
        $res = '<button class="btn btn-info waves-effect btn-block" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonInfoFunction($arg));
    }

    /**
     * Tests the adminBSBButtonInfoFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonInfoFunctionWithCircle() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["circle" => true];
        $res = '<button class="btn btn-info waves-effect btn-circle waves-circle waves-float" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonInfoFunction($arg));
    }

    /**
     * Tests the adminBSBButtonInfoFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonInfoFunctionWithContent() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<button class="btn btn-info waves-effect" type="button">content</button>';
        $this->assertEquals($res, $obj->adminBSBButtonInfoFunction($arg));
    }

    /**
     * Tests the adminBSBButtonInfoFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonInfoFunctionWithDisable() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["disable" => true];
        $res = '<button class="btn btn-info waves-effect" type="button" disabled="disabled"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonInfoFunction($arg));
    }

    /**
     * Tests the adminBSBButtonInfoFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonInfoFunctionWithIcon() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["icon" => "person"];
        $res = '<button class="btn btn-info waves-effect" type="button"><i class="material-icons">person</i></button>';
        $this->assertEquals($res, $obj->adminBSBButtonInfoFunction($arg));
    }

    /**
     * Tests the adminBSBButtonInfoFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonInfoFunctionWithSize() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["size" => "lg"];
        $res = '<button class="btn btn-info waves-effect btn-lg" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonInfoFunction($arg));
    }

    /**
     * Tests the adminBSBButtonInfoFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonInfoFunctionWithTitle() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["title" => "title"];
        $res = '<button class="btn btn-info waves-effect" title="title" type="button" data-toggle="tooltip"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonInfoFunction($arg));
    }

    /**
     * Tests the adminBSBButtonInfoFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonInfoFunctionWithoutArguments() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-info waves-effect" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonInfoFunction($arg));
    }

    /**
     * Tests the adminBSBButtonLinkFilter() method.
     *
     * @return void
     */
    public function testAdminBSBButtonLinkFilter() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = $obj->adminBSBButtonMaterialDesignFunction();
        $res = '<a class="btn bg-red waves-effect" href="https://github.com"></a>';
        $this->assertEquals($res, $obj->adminBSBButtonLinkFilter($arg, "https://github.com"));
    }

    /**
     * Tests the adminBSBButtonLinkFilter() method.
     *
     * @return void
     */
    public function testAdminBSBButtonLinkFilterWithoutArguments() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = $obj->adminBSBButtonMaterialDesignFunction();
        $res = '<a class="btn bg-red waves-effect" href="javascript:void(0);"></a>';
        $this->assertEquals($res, $obj->adminBSBButtonLinkFilter($arg));
    }

    /**
     * Tests the adminBSBButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonMaterialDesignFunction() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "disable" => true, "icon" => "person", "color" => "black"];
        $res = '<button class="btn bg-black waves-effect btn-lg" title="title" type="button" data-toggle="tooltip" disabled="disabled"><i class="material-icons" style="margin: -4px 2px 0; vertical-align: sub;">person</i>content</button>';
        $this->assertEquals($res, $obj->adminBSBButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonMaterialDesignFunctionWithBlock() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["block" => true];
        $res = '<button class="btn bg-red waves-effect btn-block" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonMaterialDesignFunctionWithCircle() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["circle" => true];
        $res = '<button class="btn bg-red waves-effect btn-circle waves-circle waves-float" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonMaterialDesignFunctionWithColor() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["color" => "black"];
        $res = '<button class="btn bg-black waves-effect" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonMaterialDesignFunctionWithContent() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<button class="btn bg-red waves-effect" type="button">content</button>';
        $this->assertEquals($res, $obj->adminBSBButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonMaterialDesignFunctionWithDisable() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["disable" => true];
        $res = '<button class="btn bg-red waves-effect" type="button" disabled="disabled"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonMaterialDesignFunctionWithIcon() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["icon" => "person"];
        $res = '<button class="btn bg-red waves-effect" type="button"><i class="material-icons">person</i></button>';
        $this->assertEquals($res, $obj->adminBSBButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonMaterialDesignFunctionWithSize() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["size" => "lg"];
        $res = '<button class="btn bg-red waves-effect btn-lg" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonMaterialDesignFunctionWithTitle() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["title" => "title"];
        $res = '<button class="btn bg-red waves-effect" title="title" type="button" data-toggle="tooltip"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBButtonMaterialDesignFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonMaterialDesignFunctionWithoutArguments() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn bg-red waves-effect" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonMaterialDesignFunction($arg));
    }

    /**
     * Tests the adminBSBButtonPrimaryFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonPrimaryFunction() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "disable" => true, "icon" => "person"];
        $res = '<button class="btn btn-primary waves-effect btn-lg" title="title" type="button" data-toggle="tooltip" disabled="disabled"><i class="material-icons" style="margin: -4px 2px 0; vertical-align: sub;">person</i>content</button>';
        $this->assertEquals($res, $obj->adminBSBButtonPrimaryFunction($arg));
    }

    /**
     * Tests the adminBSBButtonPrimaryFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonPrimaryFunctionWithBlock() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["block" => true];
        $res = '<button class="btn btn-primary waves-effect btn-block" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonPrimaryFunction($arg));
    }

    /**
     * Tests the adminBSBButtonPrimaryFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonPrimaryFunctionWithCircle() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["circle" => true];
        $res = '<button class="btn btn-primary waves-effect btn-circle waves-circle waves-float" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonPrimaryFunction($arg));
    }

    /**
     * Tests the adminBSBButtonPrimaryFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonPrimaryFunctionWithContent() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<button class="btn btn-primary waves-effect" type="button">content</button>';
        $this->assertEquals($res, $obj->adminBSBButtonPrimaryFunction($arg));
    }

    /**
     * Tests the adminBSBButtonPrimaryFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonPrimaryFunctionWithDisable() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["disable" => true];
        $res = '<button class="btn btn-primary waves-effect" type="button" disabled="disabled"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonPrimaryFunction($arg));
    }

    /**
     * Tests the adminBSBButtonPrimaryFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonPrimaryFunctionWithIcon() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["icon" => "person"];
        $res = '<button class="btn btn-primary waves-effect" type="button"><i class="material-icons">person</i></button>';
        $this->assertEquals($res, $obj->adminBSBButtonPrimaryFunction($arg));
    }

    /**
     * Tests the adminBSBButtonPrimaryFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonPrimaryFunctionWithSize() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["size" => "lg"];
        $res = '<button class="btn btn-primary waves-effect btn-lg" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonPrimaryFunction($arg));
    }

    /**
     * Tests the adminBSBButtonPrimaryFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonPrimaryFunctionWithTitle() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["title" => "title"];
        $res = '<button class="btn btn-primary waves-effect" title="title" type="button" data-toggle="tooltip"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonPrimaryFunction($arg));
    }

    /**
     * Tests the adminBSBButtonPrimaryFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonPrimaryFunctionWithoutArguments() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-primary waves-effect" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonPrimaryFunction($arg));
    }

    /**
     * Tests the adminBSBButtonSuccessFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonSuccessFunction() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "disable" => true, "icon" => "person"];
        $res = '<button class="btn btn-success waves-effect btn-lg" title="title" type="button" data-toggle="tooltip" disabled="disabled"><i class="material-icons" style="margin: -4px 2px 0; vertical-align: sub;">person</i>content</button>';
        $this->assertEquals($res, $obj->adminBSBButtonSuccessFunction($arg));
    }

    /**
     * Tests the adminBSBButtonSuccessFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonSuccessFunctionWithBlock() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["block" => true];
        $res = '<button class="btn btn-success waves-effect btn-block" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonSuccessFunction($arg));
    }

    /**
     * Tests the adminBSBButtonSuccessFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonSuccessFunctionWithCircle() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["circle" => true];
        $res = '<button class="btn btn-success waves-effect btn-circle waves-circle waves-float" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonSuccessFunction($arg));
    }

    /**
     * Tests the adminBSBButtonSuccessFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonSuccessFunctionWithContent() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<button class="btn btn-success waves-effect" type="button">content</button>';
        $this->assertEquals($res, $obj->adminBSBButtonSuccessFunction($arg));
    }

    /**
     * Tests the adminBSBButtonSuccessFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonSuccessFunctionWithDisable() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["disable" => true];
        $res = '<button class="btn btn-success waves-effect" type="button" disabled="disabled"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonSuccessFunction($arg));
    }

    /**
     * Tests the adminBSBButtonSuccessFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonSuccessFunctionWithIcon() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["icon" => "person"];
        $res = '<button class="btn btn-success waves-effect" type="button"><i class="material-icons">person</i></button>';
        $this->assertEquals($res, $obj->adminBSBButtonSuccessFunction($arg));
    }

    /**
     * Tests the adminBSBButtonSuccessFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonSuccessFunctionWithSize() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["size" => "lg"];
        $res = '<button class="btn btn-success waves-effect btn-lg" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonSuccessFunction($arg));
    }

    /**
     * Tests the adminBSBButtonSuccessFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonSuccessFunctionWithTitle() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["title" => "title"];
        $res = '<button class="btn btn-success waves-effect" title="title" type="button" data-toggle="tooltip"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonSuccessFunction($arg));
    }

    /**
     * Tests the adminBSBButtonSuccessFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonSuccessFunctionWithoutArguments() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-success waves-effect" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonSuccessFunction($arg));
    }

    /**
     * Tests the adminBSBButtonWarningFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonWarningFunction() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content", "title" => "title", "size" => "lg", "disable" => true, "icon" => "person"];
        $res = '<button class="btn btn-warning waves-effect btn-lg" title="title" type="button" data-toggle="tooltip" disabled="disabled"><i class="material-icons" style="margin: -4px 2px 0; vertical-align: sub;">person</i>content</button>';
        $this->assertEquals($res, $obj->adminBSBButtonWarningFunction($arg));
    }

    /**
     * Tests the adminBSBButtonWarningFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonWarningFunctionWithBlock() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["block" => true];
        $res = '<button class="btn btn-warning waves-effect btn-block" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonWarningFunction($arg));
    }

    /**
     * Tests the adminBSBButtonWarningFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonWarningFunctionWithCircle() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["circle" => true];
        $res = '<button class="btn btn-warning waves-effect btn-circle waves-circle waves-float" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonWarningFunction($arg));
    }

    /**
     * Tests the adminBSBButtonWarningFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonWarningFunctionWithContent() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["content" => "content"];
        $res = '<button class="btn btn-warning waves-effect" type="button">content</button>';
        $this->assertEquals($res, $obj->adminBSBButtonWarningFunction($arg));
    }

    /**
     * Tests the adminBSBButtonWarningFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonWarningFunctionWithDisable() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["disable" => true];
        $res = '<button class="btn btn-warning waves-effect" type="button" disabled="disabled"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonWarningFunction($arg));
    }

    /**
     * Tests the adminBSBButtonWarningFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonWarningFunctionWithIcon() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["icon" => "person"];
        $res = '<button class="btn btn-warning waves-effect" type="button"><i class="material-icons">person</i></button>';
        $this->assertEquals($res, $obj->adminBSBButtonWarningFunction($arg));
    }

    /**
     * Tests the adminBSBButtonWarningFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonWarningFunctionWithSize() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["size" => "lg"];
        $res = '<button class="btn btn-warning waves-effect btn-lg" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonWarningFunction($arg));
    }

    /**
     * Tests the adminBSBButtonWarningFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonWarningFunctionWithTitle() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = ["title" => "title"];
        $res = '<button class="btn btn-warning waves-effect" title="title" type="button" data-toggle="tooltip"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonWarningFunction($arg));
    }

    /**
     * Tests the adminBSBButtonSuccessFunction() method.
     *
     * @return void
     */
    public function testAdminBSBButtonWarningFunctionWithoutArguments() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $arg = [];
        $res = '<button class="btn btn-warning waves-effect" type="button"></button>';
        $this->assertEquals($res, $obj->adminBSBButtonWarningFunction($arg));
    }

    /**
     * Tests the __construct() method.
     *
     * @return void
     */
    public function testConstruct() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $this->assertEquals("webeweb.adminbsb.twig.extension.ui.button", ButtonTwigExtension::SERVICE_NAME);
        $this->assertSame($this->twigEnvironment, $obj->getTwigEnvironment());
    }

    /**
     * Tests the getFilters() method.
     *
     * @return void
     */
    public function testGetFilters() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $res = $obj->getFilters();
        $this->assertCount(1, $res);

        $this->assertInstanceOf(Twig_SimpleFilter::class, $res [0]);
        $this->assertEquals("adminBSBButtonLink", $res [0]->getName());
        $this->assertEquals([$obj, "adminBSBButtonLinkFilter"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));
    }

    /**
     * Tests the getFunctions() method.
     *
     * @return void
     */
    public function testGetFunctions() {

        $obj = new ButtonTwigExtension($this->twigEnvironment);

        $res = $obj->getFunctions();
        $this->assertCount(7, $res);

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[0]);
        $this->assertEquals("adminBSBButtonDanger", $res[0]->getName());
        $this->assertEquals([$obj, "adminBSBButtonDangerFunction"], $res[0]->getCallable());
        $this->assertEquals(["html"], $res[0]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[1]);
        $this->assertEquals("adminBSBButtonDefault", $res[1]->getName());
        $this->assertEquals([$obj, "adminBSBButtonDefaultFunction"], $res[1]->getCallable());
        $this->assertEquals(["html"], $res[1]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[2]);
        $this->assertEquals("adminBSBButtonInfo", $res[2]->getName());
        $this->assertEquals([$obj, "adminBSBButtonInfoFunction"], $res[2]->getCallable());
        $this->assertEquals(["html"], $res[2]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[3]);
        $this->assertEquals("adminBSBButtonMaterialDesign", $res[3]->getName());
        $this->assertEquals([$obj, "adminBSBButtonMaterialDesignFunction"], $res[3]->getCallable());
        $this->assertEquals(["html"], $res[3]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[4]);
        $this->assertEquals("adminBSBButtonPrimary", $res[4]->getName());
        $this->assertEquals([$obj, "adminBSBButtonPrimaryFunction"], $res[4]->getCallable());
        $this->assertEquals(["html"], $res[4]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[5]);
        $this->assertEquals("adminBSBButtonSuccess", $res[5]->getName());
        $this->assertEquals([$obj, "adminBSBButtonSuccessFunction"], $res[5]->getCallable());
        $this->assertEquals(["html"], $res[5]->getSafe(new Twig_Node()));

        $this->assertInstanceOf(Twig_SimpleFunction::class, $res[6]);
        $this->assertEquals("adminBSBButtonWarning", $res[6]->getName());
        $this->assertEquals([$obj, "adminBSBButtonWarningFunction"], $res[6]->getCallable());
        $this->assertEquals(["html"], $res[6]->getSafe(new Twig_Node()));
    }
}
