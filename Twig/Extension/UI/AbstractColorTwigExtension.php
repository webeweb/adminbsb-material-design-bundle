<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\UI;

use Twig_Environment;
use WBW\Bundle\AdminBSBBundle\Provider\Color\DefaultColorProvider;
use WBW\Bundle\AdminBSBBundle\Twig\Extension\AbstractTwigExtension;

/**
 * Abstract color Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\UI
 * @abstract
 */
abstract class AbstractColorTwigExtension extends AbstractTwigExtension {

    /**
     * Constructor.
     *
     * @param Twig_Environment $twigEnvironment The Twig environment.
     */
    protected function __construct(Twig_Environment $twigEnvironment) {
        parent::__construct($twigEnvironment);
    }

    /**
     * Displays an AdminBSB color.
     *
     * @param string $name The color name.
     * @param string $code The color code.
     * @param string $output The output.
     * @return string Returns the AdminBSB color.
     */
    final protected function adminBSBColor($name, $code, $output) {

        // Initialize the parameters.
        $_name = self::fixColor($name, "");
        $_code = null !== $code ? $code : "500";

        // Return the HTML.
        return "hex" === $output ? DefaultColorProvider::getColors()[$_name][$_code] : "col-" . $_name;
    }
}
