<?php

namespace Hoaian\WebBundle\Entity;

/**
 * Forum
 */
class Forum
{
    /**
     * @var integer
     */
    private $id;

    /**
     * @var integer
     */
    private $userId = '0';

    /**
     * @var integer
     */
    private $userUid = '0';

    /**
     * @var integer
     */
    private $idForum = '0';

    /**
     * @var integer
     */
    private $date = '0';

    /**
     * @var string
     */
    private $text;


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
     * Set userId
     *
     * @param integer $userId
     *
     * @return Forum
     */
    public function setUserId($userId)
    {
        $this->userId = $userId;

        return $this;
    }

    /**
     * Get userId
     *
     * @return integer
     */
    public function getUserId()
    {
        return $this->userId;
    }

    /**
     * Set userUid
     *
     * @param integer $userUid
     *
     * @return Forum
     */
    public function setUserUid($userUid)
    {
        $this->userUid = $userUid;

        return $this;
    }

    /**
     * Get userUid
     *
     * @return integer
     */
    public function getUserUid()
    {
        return $this->userUid;
    }

    /**
     * Set idForum
     *
     * @param integer $idForum
     *
     * @return Forum
     */
    public function setIdForum($idForum)
    {
        $this->idForum = $idForum;

        return $this;
    }

    /**
     * Get idForum
     *
     * @return integer
     */
    public function getIdForum()
    {
        return $this->idForum;
    }

    /**
     * Set date
     *
     * @param integer $date
     *
     * @return Forum
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return integer
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set text
     *
     * @param string $text
     *
     * @return Forum
     */
    public function setText($text)
    {
        $this->text = $text;

        return $this;
    }

    /**
     * Get text
     *
     * @return string
     */
    public function getText()
    {
        return $this->text;
    }
}

