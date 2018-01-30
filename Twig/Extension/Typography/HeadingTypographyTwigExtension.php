<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2017 NdC/WBW
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Typography;

use Twig_SimpleFunction;

/**
 * Heading typography Twig extension.
 *
 * @author NdC/WBW <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBMaterialDesignBundle\Twig\Extension\Typography
 * @final
 */
final class HeadingTypographyTwigExtension extends AbstractTypographyTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.bundle.adminbsbmaterialdesignbundle.twig.extension.typography.heading";

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("h1", [$this, "h1Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("h2", [$this, "h2Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("h3", [$this, "h3Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("h4", [$this, "h4Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("h5", [$this, "h5Function"], ["is_safe" => ["html"]]),
            new Twig_SimpleFunction("h6", [$this, "h6Function"], ["is_safe" => ["html"]]),
        ];
    }

    /**
     * Displays a heading 1.
     *
     * @param array $getArgs The getArguments.
     * @return string Returns the heading 1.
     */
    public function h1Function(array $getArgs = []) {
        return $this->h(1, $this->getArg($getArgs, "content"), $this->getArg($getArgs, "class"));
    }

    /**
     * Displays a heading 2.
     *
     * @param array $getArgs The getArguments.
     * @return string Returns the heading 2.
     */
    public function h2Function(array $getArgs = []) {
        return $this->h(2, $this->getArg($getArgs, "content"), $this->getArg($getArgs, "class"));
    }

    /**
     * Displays a heading 3.
     *
     * @param array $getArgs The getArguments.
     * @return string Returns the heading 3.
     */
    public function h3Function(array $getArgs = []) {
        return $this->h(3, $this->getArg($getArgs, "content"), $this->getArg($getArgs, "class"));
    }

    /**
     * Displays a heading 4.
     *
     * @param array $getArgs The getArguments.
     * @return string Returns the heading 4.
     */
    public function h4Function(array $getArgs = []) {
        return $this->h(4, $this->getArg($getArgs, "content"), $this->getArg($getArgs, "class"));
    }

    /**
     * Displays a heading 5.
     *
     * @param array $getArgs The getArguments.
     * @return string Returns the heading 5.
     */
    public function h5Function(array $getArgs = []) {
        return $this->h(5, $this->getArg($getArgs, "content"), $this->getArg($getArgs, "class"));
    }

    /**
     * Displays a heading 6.
     *
     * @param array $getArgs The getArguments.
     * @return string Returns the heading 6.
     */
    public function h6Function(array $getArgs = []) {
        return $this->h(6, $this->getArg($getArgs, "content"), $this->getArg($getArgs, "class"));
    }

}
