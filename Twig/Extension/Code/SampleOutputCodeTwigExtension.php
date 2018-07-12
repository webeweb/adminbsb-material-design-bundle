<?php

/**
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2018 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Twig\Extension\Code;

use Twig_SimpleFunction;
use WBW\Bundle\BootstrapBundle\Twig\Extension\Code\SampleOutputCodeTwigExtension as BaseTwigExtension;

/**
 * Sample output code Twig extension.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\Twig\Extension\Code
 */
class SampleOutputCodeTwigExtension extends BaseTwigExtension {

    /**
     * Service name.
     *
     * @var string
     */
    const SERVICE_NAME = "webeweb.adminbsbbundle.twig.extension.code.sampleoutput";

    /**
     * Constructor.
     */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Get the Twig functions.
     *
     * @return array Returns the Twig functions.
     */
    public function getFunctions() {
        return [
            new Twig_SimpleFunction("adminBSBSampleOutput", [$this, "bootstrapSampleOutputFunction"], ["is_safe" => ["html"]]),
        ];
    }

}
