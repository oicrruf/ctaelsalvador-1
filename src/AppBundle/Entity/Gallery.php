<?php

namespace AppBundle\Entity;

/**
 * Gallery
 */
class Gallery
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $nameActivity;

    /**
     * @var string
     */
    private $urlImage;

    /**
     * @var string
     */
    private $altImage;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set type
     *
     * @param string $type
     *
     * @return Gallery
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set nameActivity
     *
     * @param string $nameActivity
     *
     * @return Gallery
     */
    public function setNameActivity($nameActivity)
    {
        $this->nameActivity = $nameActivity;

        return $this;
    }

    /**
     * Get nameActivity
     *
     * @return string
     */
    public function getNameActivity()
    {
        return $this->nameActivity;
    }

    /**
     * Set urlImage
     *
     * @param string $urlImage
     *
     * @return Gallery
     */
    public function setUrlImage($urlImage)
    {
        $this->urlImage = $urlImage;

        return $this;
    }

    /**
     * Get urlImage
     *
     * @return string
     */
    public function getUrlImage()
    {
        return $this->urlImage;
    }

    /**
     * Set altImage
     *
     * @param string $altImage
     *
     * @return Gallery
     */
    public function setAltImage($altImage)
    {
        $this->altImage = $altImage;

        return $this;
    }

    /**
     * Get altImage
     *
     * @return string
     */
    public function getAltImage()
    {
        return $this->altImage;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
}

