<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Controller;

use Symfony\Component\HttpFoundation\Response;
use WBW\Bundle\AdminBSBBundle\Controller\AbstractController;

/**
 * Test views controller.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Controller
 */
class TestViewsController extends AbstractController {

    /**
     * Render assets/_javascripts.html.twig
     *
     * @return Response Returns the response.
     */
    public function assetsJavascriptsAction(): Response {
        return $this->render("@WBWAdminBSB/assets/_javascripts.html.twig");
    }

    /**
     * Render assets/_stylesheets.html.twig
     *
     * @return Response Returns the response.
     */
    public function assetsStylesheetsAction(): Response {
        return $this->render("@WBWAdminBSB/assets/_stylesheets.html.twig");
    }

    /**
     * Displays a blank page.
     *
     * @return Response Returns the response.
     */
    public function blankAction(): Response {
        return $this->render("@WBWAdminBSB/layout/blank.html.twig");
    }
}
