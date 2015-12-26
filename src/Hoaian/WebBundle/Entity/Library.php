<?php

namespace Hoaian\WebBundle\Entity;

/**
 * Library
 */
class Library
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $view;

    /**
     * @var integer
     */
    private $refid = '0';

    /**
     * @var integer
     */
    private $realid = '0';

    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $content;


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
     * Set view
     *
     * @param integer $view
     *
     * @return Library
     */
    public function setView($view)
    {
        $this->view = $view;

        return $this;
    }

    /**
     * Get view
     *
     * @return integer
     */
    public function getView()
    {
        return $this->view;
    }

    /**
     * Set refid
     *
     * @param integer $refid
     *
     * @return Library
     */
    public function setRefid($refid)
    {
        $this->refid = $refid;

        return $this;
    }

    /**
     * Get refid
     *
     * @return integer
     */
    public function getRefid()
    {
        return $this->refid;
    }

    /**
     * Set realid
     *
     * @param integer $realid
     *
     * @return Library
     */
    public function setRealid($realid)
    {
        $this->realid = $realid;

        return $this;
    }

    /**
     * Get realid
     *
     * @return integer
     */
    public function getRealid()
    {
        return $this->realid;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Library
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
     * Set content
     *
     * @param string $content
     *
     * @return Library
     */
    public function setContent($content)
    {
        $this->content = $content;

        return $this;
    }

    /**
     * Get content
     *
     * @return string
     */
    public function getContent()
    {
        return $this->content;
    }
}

