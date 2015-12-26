<?php

namespace Hoaian\WebBundle\Entity;

/**
 * Province
 */
class Province
{
    /**
     * @var string
     */
    private $provinceid;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $type;


    /**
     * Get provinceid
     *
     * @return string
     */
    public function getProvinceid()
    {
        return $this->provinceid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Province
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
     * Set type
     *
     * @param string $type
     *
     * @return Province
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
}

