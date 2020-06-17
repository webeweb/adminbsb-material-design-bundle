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
use WBW\Bundle\CoreBundle\Helper\SkeletonHelper;

/**
 * Layout controller test.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Controller
 */
class LayoutControllerTest extends AbstractWebTestCase {

    /**
     * {@inheritDoc}
     */
    public static function setUpBeforeClass() {
        parent::setUpBeforeClass();

        parent::setUpSchemaTool();
        parent::setUpUserFixtures();

        // Set up the directories.
        $skeletonDirectory  = getcwd() . "/Resources/skeleton";
        $resourcesDirectory = getcwd() . "/Tests/Fixtures/app/Resources";

        // Copy skeleton.
        SkeletonHelper::copySkeleton($skeletonDirectory, $resourcesDirectory);
    }

    /**
     * Tests the blankAction() method.
     *
     * @return void
     */
    public function testBlankAction() {

        $client = $this->client;

        $client->request("GET", "/blank");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));
    }

    /**
     * Tests the Resources/views/Resetting/check_email.html.twig template.
     *
     * @return void
     */
    public function testFOSUserCheckEmailAction() {

        $client = $this->client;

        $client->request("GET", "/resetting/check-email?username=username");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));

        // Check the response.
        $response = $client->getResponse()->getContent();
        $this->assertContains("<title>AdminBSB Material Design - Reset password</title>", $response);
        $this->assertContains("<body class=\"fp-page\">", $response);
        $this->assertContains("<div class=\"fp-box\">", $response);
    }

    /**
     * Tests the Resources/views/Security/login.html.twig template.
     *
     * @return void
     */
    public function testFOSUserLoginAction() {

        $client = $this->client;

        $client->request("GET", "/login");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));

        // Check the response.
        $response = $client->getResponse()->getContent();
        $this->assertContains("<title>AdminBSB Material Design - Log in</title>", $response);
        $this->assertContains("<body class=\"login-page\">", $response);
        $this->assertContains("<div class=\"login-box\">", $response);
    }

    /**
     * Tests the Resources/views/Registration/register.html.twig template.
     *
     * @return void
     */
    public function testFOSUserRegisterAction() {

        $client = $this->client;

        $client->request("GET", "/register/");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));

        // Check the response.
        $response = $client->getResponse()->getContent();
        $this->assertContains("<title>AdminBSB Material Design - Register</title>", $response);
        $this->assertContains("<body class=\"signup-page\">", $response);
        $this->assertContains("<div class=\"signup-box\">", $response);
    }

    /**
     * Tests the Resources/views/Resetting/request.html.twig template.
     *
     * @return void
     */
    public function testFOSUserRequestAction() {

        $client = $this->client;

        $client->request("GET", "/resetting/request");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));

        // Check the response.
        $response = $client->getResponse()->getContent();
        $this->assertContains("<title>AdminBSB Material Design - Reset password</title>", $response);
        $this->assertContains("<body class=\"fp-page\">", $response);
        $this->assertContains("<div class=\"fp-box\">", $response);
    }

    /**
     * Tests the Resources/views/Resetting/reset.html.twig template.
     *
     * @return void
     */
    public function testFOSUserResetAction() {

        $client = $this->client;

        $client->request("GET", "/resetting/reset/confirmationToken");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));

        // Check the response.
        $response = $client->getResponse()->getContent();
        $this->assertContains("<title>AdminBSB Material Design - Reset password</title>", $response);
        $this->assertContains("<body class=\"signup-page\">", $response);
        $this->assertContains("<div class=\"signup-box\">", $response);
    }

    /**
     * Tests the Resources/views/Exception/error404.html.twig template.
     *
     * @return void
     */
    public function testTwigError404Action() {

        $client = $this->client;

        $client->request("GET", "/error/404.html");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));

        // Check the response.
        $response = $client->getResponse()->getContent();
        $this->assertContains("<title>AdminBSB Material Design - 404 Not Found</title>", $response);
        $this->assertContains("<body class=\"four-zero-four\">", $response);
        $this->assertContains("<div class=\"error-code\">404</div>", $response);
        $this->assertContains("<div class=\"error-message\">Not Found</div>", $response);
    }

    /**
     * Tests the Resources/views/Exception/error500.html.twig template.
     *
     * @return void
     */
    public function testTwigError500Action() {

        $client = $this->client;

        $client->request("GET", "/error/500.html");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));

        // Check the response.
        $response = $client->getResponse()->getContent();
        $this->assertContains("<title>AdminBSB Material Design - 500 Internal Server Error</title>", $response);
        $this->assertContains("<body class=\"five-zero-zero\">", $response);
        $this->assertContains("<div class=\"error-code\">500</div>", $response);
        $this->assertContains("<div class=\"error-message\">Internal Server Error</div>", $response);
    }
}
