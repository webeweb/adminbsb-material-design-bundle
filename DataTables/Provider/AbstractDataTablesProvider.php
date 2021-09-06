<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\DataTables\Provider;

use WBW\Bundle\CoreBundle\Twig\Extension\AbstractTwigExtension;
use WBW\Bundle\JQuery\DataTablesBundle\Api\DataTablesOptionsInterface;
use WBW\Bundle\JQuery\DataTablesBundle\Provider\AbstractDataTablesProvider as BaseDataTablesProvider;

/**
 * Abstract DataTables provider.
 *
 * @author webeweb <https://github.com/webeweb/>
 * @package WBW\Bundle\AdminBSBBundle\DataTables\Provider
 * @abstract
 */
abstract class AbstractDataTablesProvider extends BaseDataTablesProvider {

    /**
     * Column width "actions".
     *
     * @var string
     */
    const COLUMN_WIDTH_ACTIONS = "160px";

    /**
     * Column width "date"
     *
     * @var string
     */
    const COLUMN_WIDTH_DATE = "120px";

    /**
     * Column width "icon".
     *
     * @var string
     */
    const COLUMN_WIDTH_ICON = "20px";

    /**
     * Column width "label".
     *
     * @var string
     */
    const COLUMN_WIDTH_LABEL = "160px";

    /**
     * Column width "thumbnail".
     *
     * @var string
     */
    const COLUMN_WIDTH_THUMBNAIL = "80px";

    /**
     * Column width "unit".
     *
     * @var string
     */
    const COLUMN_WIDTH_UNIT = "40px";

    /**
     * {@inheritDoc}
     */
    public function getOptions(): DataTablesOptionsInterface {

        $dtOptions = parent::getOptions();
        $dtOptions->setOption("searchDelay", 2500);

        return $dtOptions;
    }


    /**
     * Align right.
     *
     * @param string|null $content The content.
     * @return string Returns the right-aligned content.
     */
    protected function alignRight(?string $content): string {
        if (null === $content || "" === $content) {
            return "";
        }
        return AbstractTwigExtension::coreHTMLElement("span", $content, ["class" => "pull-right"]);
    }


    /**
     * Put italic.
     *
     * @param string|null $content The content.
     * @return string Returns the italic.
     */
    protected function putItalic(?string $content): string {
        if (null === $content || "" === $content) {
            return "";
        }
        return AbstractTwigExtension::coreHTMLElement("em", $content);
    }
    /**
     * {@inheritDoc}
     */
    protected function renderRowButtons($entity, string $editRoute = null, string $deleteRoute = null, string $showRoute = null): string {
        $buttons = parent::renderRowButtons($entity, $editRoute, $deleteRoute, $showRoute);
        return $buttons; //str_replace(" btn-xs", "", $buttons);
    }
}