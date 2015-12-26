<?php

namespace Hoaian\WebBundle\Entity;

/**
 * Friend
 */
class Friend
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
    private $friendId = '0';

    /**
     * @var integer
     */
    private $type = '0';

    /**
     * @var integer
     */
    private $status = '0';

    /**
     * @var string
     */
    private $date = '0';

    /**
     * @var string
     */
    private $other;


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
     * @return Friend
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
     * Set friendId
     *
     * @param integer $friendId
     *
     * @return Friend
     */
    public function setFriendId($friendId)
    {
        $this->friendId = $friendId;

        return $this;
    }

    /**
     * Get friendId
     *
     * @return integer
     */
    public function getFriendId()
    {
        return $this->friendId;
    }

    /**
     * Set type
     *
     * @param integer $type
     *
     * @return Friend
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return integer
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set status
     *
     * @param integer $status
     *
     * @return Friend
     */
    public function setStatus($status)
    {
        $this->status = $status;

        return $this;
    }

    /**
     * Get status
     *
     * @return integer
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * Set date
     *
     * @param string $date
     *
     * @return Friend
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return string
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set other
     *
     * @param string $other
     *
     * @return Friend
     */
    public function setOther($other)
    {
        $this->other = $other;

        return $this;
    }

    /**
     * Get other
     *
     * @return string
     */
    public function getOther()
    {
        return $this->other;
    }
}

