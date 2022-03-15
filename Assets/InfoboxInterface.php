<?php

/*
 * This file is part of the adminbsb-material-design-bundle package.
 *
 * (c) 2021 WEBEWEB
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace WBW\Bundle\AdminBSBBundle\Assets;

/**
 * Infobox interface.
 *
 * @author webeweb <https://github.com/webeweb>
 * @package WBW\Bundle\AdminBSBBundle\Assets
 */
interface InfoboxInterface {

    /**
     * Get the class.
     *
     * @return string|null Returns the class.
     */
    public function getClass(): ?string;

    /**
     * Get the color.
     *
     * @return string|null Returns the color.
     */
    public function getColor(): ?string;

    /**
     * Get the content number.
     *
     * @return string|null Returns the content number.
     */
    public function getContentNumber(): ?string;

    /**
     * Get the content text.
     *
     * @return string|null Returns the content text.
     */
    public function getContentText(): ?string;

    /**
     * Get the count to.
     *
     * @return array|null Returns the count to.
     */
    public function getCountTo(): ?array;

    /**
     * Get the hover expand effect.
     *
     * @return bool|null Returns the hover expand effect.
     */
    public function getHoverExpandEffect(): ?bool;

    /**
     * Get the hover zoom effect.
     *
     * @return bool|null Returns the hover zoom effect.
     */
    public function getHoverZoomEffect(): ?bool;

    /**
     * Get the icon color.
     *
     * @return string|null Returns the icon color.
     */
    public function getIconColor(): ?string;

    /**
     * Get the icon name.
     *
     * @return string|null Returns the icon name.
     */
    public function getIconName(): ?string;

    /**
     * Set the class.
     *
     * @param string|null $class The class.
     * @return InfoboxInterface Returns this infobox.
     */
    public function setClass(?string $class): InfoboxInterface;

    /**
     * Set the color.
     *
     * @param string|null $color The color.
     * @return InfoboxInterface Returns this infobox.
     */
    public function setColor(?string $color): InfoboxInterface;

    /**
     * Set the content number.
     *
     * @param string|null $contentNumber The content number.
     * @return InfoboxInterface Returns this infobox.
     */
    public function setContentNumber(?string $contentNumber): InfoboxInterface;

    /**
     * Set the content text.
     *
     * @param string|null $contentText The content text.
     * @return InfoboxInterface Returns this infobox.
     */
    public function setContentText(?string $contentText): InfoboxInterface;

    /**
     * Set the count to.
     *
     * @param array|null $countTo The count to.
     * @return InfoboxInterface Returns this infobox.
     */
    public function setCountTo(?array $countTo): InfoboxInterface;

    /**
     * Set the hover expand effect.
     *
     * @param bool|null $hoverExpandEffect The hover expand effect.
     * @return InfoboxInterface Returns this infobox.
     */
    public function setHoverExpandEffect(?bool $hoverExpandEffect): InfoboxInterface;

    /**
     * Set the hover zoom effect.
     *
     * @param bool|null $hoverZoomEffect The hover zoom effect.
     * @return InfoboxInterface Returns this infobox.
     */
    public function setHoverZoomEffect(?bool $hoverZoomEffect): InfoboxInterface;

    /**
     * Set the icon color.
     *
     * @param string|null $iconColor The icon color.
     * @return InfoboxInterface Returns this infobox.
     */
    public function setIconColor(?string $iconColor): InfoboxInterface;

    /**
     * Set the icon name.
     *
     * @param string|null $iconName The icon name.
     * @return InfoboxInterface Returns this infobox.
     */
    public function setIconName(?string $iconName): InfoboxInterface;

}
