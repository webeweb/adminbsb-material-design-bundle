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

use Symfony\Component\Routing\RouterInterface;
use WBW\Bundle\AdminBSBBundle\Provider\JavascriptProvider;
use WBW\Bundle\AdminBSBBundle\Tests\AbstractWebTestCase;
use WBW\Bundle\CoreBundle\Helper\SkeletonHelper;

/**
 * Views controller test.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Controller
 */
class ViewsControllerTest extends AbstractWebTestCase {

    /**
     * {@inheritdoc}
     */
    public static function setUpBeforeClass(): void {
        parent::setUpBeforeClass();

        // Set up the directories.
        $skeletonDirectory  = realpath(__DIR__ . "/../../Resources/skeleton");
        $resourcesDirectory = realpath(__DIR__ . "/../Fixtures/app/templates/bundles");

        // Copy skeleton.
        SkeletonHelper::copySkeleton($skeletonDirectory, $resourcesDirectory);
    }

    /**
     * Tests assetsJavascriptsAction()
     *
     * @return void
     */
    public function testAssetsJavascriptsAction(): void {

        $client = $this->client;

        $client->request("GET", "/assets/javascripts");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));

        /** @var RouterInterface $router */
        $router = static::$kernel->getContainer()->get("router");

        $provider = new JavascriptProvider();
        foreach ($provider->getJavascripts() as $k => $v) {

            $uri = $router->generate("wbw_core_twig_resource", ["name" => $k, "type" => "js"]);

            $client->request("GET", $uri);
            $this->assertEquals(200, $client->getResponse()->getStatusCode(), $v);
            $this->assertEquals("application/javascript", $client->getResponse()->headers->get("Content-Type"), $v);
        }
    }

    /**
     * Tests assetsStylesheetsAction()
     *
     * @return void
     */
    public function testAssetsStylesheetsAction(): void {

        $client = $this->client;

        $client->request("GET", "/assets/stylesheets");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));
    }

    /**
     * Tests blankAction()
     *
     * @return void
     */
    public function testBlankAction(): void {

        $client = $this->client;

        $client->request("GET", "/blank");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));
    }

    /**
     * Tests the Resources/views/Exception/error404.html.twig template.
     *
     * @return void
     */
    public function testTwigError404Action(): void {

        $client = $this->client;

        $client->request("GET", "/error/404.html");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));

        // Check the response.
        $response = $client->getResponse()->getContent();
        $this->assertStringContainsString("<title>AdminBSB Material Design - 404 Not Found</title>", $response);
        $this->assertStringContainsString('<body class="four-zero-four">', $response);
        $this->assertStringContainsString('<div class="error-code">404</div>', $response);
        $this->assertStringContainsString('<div class="error-message">Not Found</div>', $response);
    }

    /**
     * Tests the Resources/views/Exception/error500.html.twig template.
     *
     * @return void
     */
    public function testTwigError500Action(): void {

        $client = $this->client;

        $client->request("GET", "/error/500.html");
        $this->assertEquals(200, $client->getResponse()->getStatusCode());
        $this->assertEquals("text/html; charset=UTF-8", $client->getResponse()->headers->get("Content-Type"));

        // Check the response.
        $response = $client->getResponse()->getContent();
        $this->assertStringContainsString("<title>AdminBSB Material Design - 500 Internal Server Error</title>", $response);
        $this->assertStringContainsString('<body class="five-zero-zero">', $response);
        $this->assertStringContainsString('<div class="error-code">500</div>', $response);
        $this->assertStringContainsString('<div class="error-message">Internal Server Error</div>', $response);
    }
}
