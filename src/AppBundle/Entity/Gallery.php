<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Gallery
 */
class Gallery
{
    /**
     * @var integer
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
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
    private $altImg;


    /**
     * Set type
     *
     * @param string $type
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
     * Set altImg
     *
     * @param string $altImg
     * @return Gallery
     */
    public function setAltImg($altImg)
    {
        $this->altImg = $altImg;

        return $this;
    }

    /**
     * Get altImg
     *
     * @return string 
     */
    public function getAltImg()
    {
        return $this->altImg;
    }
    /**
     * @var string
     */
    private $altImage;


    /**
     * Set altImage
     *
     * @param string $altImage
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
}
