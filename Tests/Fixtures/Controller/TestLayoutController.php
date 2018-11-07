<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Controller;

use Symfony\Component\HttpFoundation\Response;
use WBW\Bundle\AdminBSBBundle\Controller\AbstractAdminBSBController;

/**
 * Test layout controller.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Tests\Fixtures\Controller
 */
class TestLayoutController extends AbstractAdminBSBController {

    /**
     * Displays a blank page.
     *
     * @return Response Returns the response.
     */
    public function blankAction() {

        // Return the response.
        return $this->render("@AdminBSB/layout/blank.html.twig");
    }

}
