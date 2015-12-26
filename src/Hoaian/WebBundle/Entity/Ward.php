<?php

namespace Hoaian\WebBundle\Entity;

/**
 * Ward
 */
class Ward
{
    /**
     * @var string
     */
    private $wardid;

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
    private $districtid;


    /**
     * Get wardid
     *
     * @return string
     */
    public function getWardid()
    {
        return $this->wardid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Ward
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
     * @return Ward
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
     * @return Ward
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
     * Set districtid
     *
     * @param string $districtid
     *
     * @return Ward
     */
    public function setDistrictid($districtid)
    {
        $this->districtid = $districtid;

        return $this;
    }

    /**
     * Get districtid
     *
     * @return string
     */
    public function getDistrictid()
    {
        return $this->districtid;
    }
}

