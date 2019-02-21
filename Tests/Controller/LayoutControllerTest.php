<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Controller;

use WBW\Bundle\AdminBSBBundle\Tests\AbstractWebTestCase;

/**
 * Layout controller test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Controller
 */
class LayoutControllerTest extends AbstractWebTestCase {

    /**
     * Tests the blankAction() method.
     *
     * @return void
     */
    public function testBlankAction() {

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/blank");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
    }

    /**
     * Tests the Resources/views/layout/Resetting/check_email.html.twig template.
     *
     * @return void
     */
    public function testFOSUserCheckEmailAction() {

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/resetting/check-email?username=username");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        // Get the response.
        $response = $client->getResponse()->getContent();

        $this->assertContains("<title>AdminBSB Material Design - Reset password</title>", $response);

        $this->assertContains("<body class=\"fp-page\">", $response);

        $this->assertContains("<div class=\"fp-box\">", $response);
    }

    /**
     * Tests the Resources/views/layout/Security/login.html.twig template.
     *
     * @return void
     */
    public function testFOSUserLoginAction() {

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/login");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        // Get the response.
        $response = $client->getResponse()->getContent();

        $this->assertContains("<title>AdminBSB Material Design - Log in</title>", $response);

        $this->assertContains("<body class=\"login-page\">", $response);

        $this->assertContains("<div class=\"login-box\">", $response);
    }

    /**
     * Tests the Resources/views/layout/Registration/register.html.twig template.
     *
     * @return void
     */
    public function testFOSUserRegisterAction() {

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/register/");
        echo $client->getResponse()->getContent() . "\n";
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        // Get the response.
        $response = $client->getResponse()->getContent();

        $this->assertContains("<title>AdminBSB Material Design - Register</title>", $response);

        $this->assertContains("<body class=\"signup-page\">", $response);

        $this->assertContains("<div class=\"signup-box\">", $response);
    }

    /**
     * Tests the Resources/views/layout/Resetting/request.html.twig template.
     *
     * @return void
     */
    public function testFOSUserRequestAction() {

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/resetting/request");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        // Get the response.
        $response = $client->getResponse()->getContent();

        $this->assertContains("<title>AdminBSB Material Design - Reset password</title>", $response);

        $this->assertContains("<body class=\"fp-page\">", $response);

        $this->assertContains("<div class=\"fp-box\">", $response);
    }

    /**
     * Tests the Resources/views/layout/Exception/error404.html.twig template.
     *
     * @return void
     */
    public function testTwigError404Action() {

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/error404");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        // Get the response.
        $response = $client->getResponse()->getContent();

        $this->assertContains("<title>AdminBSB Material Design - 404 Not found</title>", $response);

        $this->assertContains("<body class=\"four-zero-four\">", $response);

        $this->assertContains("<div class=\"error-code\">404</div>", $response);
        $this->assertContains("<div class=\"error-message\">Not found</div>", $response);
    }

    /**
     * Tests the Resources/views/layout/Exception/error500.html.twig template.
     *
     * @return void
     */
    public function testTwigError500Action() {

        // Create a client.
        $client = static::createClient();

        // Make a GET request.
        $client->request("GET", "/error500");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());

        // Get the response.
        $response = $client->getResponse()->getContent();

        $this->assertContains("<title>AdminBSB Material Design - 500 Internal server error</title>", $response);

        $this->assertContains("<body class=\"five-zero-zero\">", $response);

        $this->assertContains("<div class=\"error-code\">500</div>", $response);
        $this->assertContains("<div class=\"error-message\">Internal server error</div>", $response);
    }
}
