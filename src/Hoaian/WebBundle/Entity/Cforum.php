<?php

namespace Hoaian\WebBundle\Entity;

/**
 * Cforum
 */
class Cforum
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var string
     */
    private $name = 'Chatbox';

    /**
     * @var integer
     */
    private $level = '0';

    /**
     * @var integer
     */
    private $levelDel = '99';


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
     * Set name
     *
     * @param string $name
     *
     * @return Cforum
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
     * Set level
     *
     * @param integer $level
     *
     * @return Cforum
     */
    public function setLevel($level)
    {
        $this->level = $level;

        return $this;
    }

    /**
     * Get level
     *
     * @return integer
     */
    public function getLevel()
    {
        return $this->level;
    }

    /**
     * Set levelDel
     *
     * @param integer $levelDel
     *
     * @return Cforum
     */
    public function setLevelDel($levelDel)
    {
        $this->levelDel = $levelDel;

        return $this;
    }

    /**
     * Get levelDel
     *
     * @return integer
     */
    public function getLevelDel()
    {
        return $this->levelDel;
    }
}

