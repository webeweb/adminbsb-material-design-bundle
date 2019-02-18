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

use FOS\UserBundle\Form\Type\RegistrationFormType;
use Symfony\Component\HttpFoundation\Response;
use WBW\Bundle\AdminBSBBundle\Controller\AbstractController;

/**
 * Test layout controller.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Controller
 */
class TestLayoutController extends AbstractController {

    /**
     * Displays a blank page.
     *
     * @return Response Returns the response.
     */
    public function blankAction() {

        // Return the response.
        return $this->render("@AdminBSB/layout/blank.html.twig");
    }

    /**
     * Displays an error template.
     *
     * @return Response Returns the response.
     */
    public function error404Action() {

        // Return the response.
        return $this->render("@AdminBSB/layout/exception/error404.html.twig", [
            "status_code" => 404,
            "status_text" => "Not found",
        ]);
    }

    /**
     * Displays an error template.
     *
     * @return Response Returns the response.
     */
    public function error500Action() {

        // Return the response.
        return $this->render("@AdminBSB/layout/exception/error500.html.twig", [
            "status_code" => 500,
            "status_text" => "Internal server error",
        ]);
    }

    /**
     * Displays a login template.
     *
     * @return Response Returns the response.
     */
    public function loginAction() {

        // Return the response.
        return $this->render("@AdminBSB/layout/security/login.html.twig", [
            "last_username" => "",
            "csrf_token"    => "",
        ]);
    }

    /**
     * Displays a register template.
     *
     * @return Response Returns the response.
     */
    public function registerAction() {

        // Creates the form.
        $form = $this->createForm(RegistrationFormType::class, new TestUser());

        // Return the response.
        return $this->render("@AdminBSB/layout/registration/register.html.twig", [
            "form" => $form->createView(),
        ]);
    }
}
