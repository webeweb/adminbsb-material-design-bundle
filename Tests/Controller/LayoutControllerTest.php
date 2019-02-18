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
     * Tests the error404Action() method.
     *
     * @return void
     */
    public function testError404Action() {

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
     * Tests the error500Action() method.
     *
     * @return void
     */
    public function testError500Action() {

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
