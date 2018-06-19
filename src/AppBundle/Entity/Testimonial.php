<?php

namespace AppBundle\Entity;

/**
 * Testimonial
 */
class Testimonial
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $testimonial;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set type
     *
     * @param string $type
     *
     * @return Testimonial
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
     * Set name
     *
     * @param string $name
     *
     * @return Testimonial
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
     * Set testimonial
     *
     * @param string $testimonial
     *
     * @return Testimonial
     */
    public function setTestimonial($testimonial)
    {
        $this->testimonial = $testimonial;

        return $this;
    }

    /**
     * Get testimonial
     *
     * @return string
     */
    public function getTestimonial()
    {
        return $this->testimonial;
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

