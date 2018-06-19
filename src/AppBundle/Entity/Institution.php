<?php

namespace AppBundle\Entity;

/**
 * Institution
 */
class Institution
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $urlImage;

    /**
     * @var string
     */
    private $altImage;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $urlWebsite;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Institution
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set urlImage
     *
     * @param string $urlImage
     *
     * @return Institution
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
     * @return Institution
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
     * Set type
     *
     * @param string $type
     *
     * @return Institution
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
     * Set urlWebsite
     *
     * @param string $urlWebsite
     *
     * @return Institution
     */
    public function setUrlWebsite($urlWebsite)
    {
        $this->urlWebsite = $urlWebsite;

        return $this;
    }

    /**
     * Get urlWebsite
     *
     * @return string
     */
    public function getUrlWebsite()
    {
        return $this->urlWebsite;
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

