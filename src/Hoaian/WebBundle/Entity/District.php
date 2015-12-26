<?php

namespace Hoaian\WebBundle\Entity;

/**
 * District
 */
class District
{
    /**
     * @var string
     */
    private $districtid;

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $location;

    /**
     * @var string
     */
    private $provinceid;


    /**
     * Get districtid
     *
     * @return string
     */
    public function getDistrictid()
    {
        return $this->districtid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return District
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
     * @return District
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
     * Set location
     *
     * @param string $location
     *
     * @return District
     */
    public function setLocation($location)
    {
        $this->location = $location;

        return $this;
    }

    /**
     * Get location
     *
     * @return string
     */
    public function getLocation()
    {
        return $this->location;
    }

    /**
     * Set provinceid
     *
     * @param string $provinceid
     *
     * @return District
     */
    public function setProvinceid($provinceid)
    {
        $this->provinceid = $provinceid;

        return $this;
    }

    /**
     * Get provinceid
     *
     * @return string
     */
    public function getProvinceid()
    {
        return $this->provinceid;
    }
}

