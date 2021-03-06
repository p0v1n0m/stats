<?php

namespace PHPWorldWide\Stats\Model;

/**
 * Class Comment
 * @package PHPWorldWide\Stats\Model
 */
class Comment
{
    /**
     * @var int Comment's id
     */
    private $id;

    /**
     * @var User Comment's author.
     */
    private $user;

    /**
     * @var string
     */
    private $createdTime;

    /**
     * @var int
     */
    private $likesCount = 0;

    /**
     * @var string|null
     */
    private $message = null;

    /**
     * Set comment's id.
     *
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * Get comment id.
     * 
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set comment's author.
     *
     * @param User $user
     */
    public function setUser(User $user)
    {
        $this->user = $user;
    }

    /**
     * Get comment's author.
     *
     * @return User
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * Set comment's created time.
     *
     * @param string $createdTime
     */
    public function setCreatedTime($createdTime)
    {
        $this->createdTime = $createdTime;
    }

    /**
     * Get comment's created time.
     *
     * @return string
     */
    public function getCreatedTime()
    {
        return $this->createdTime;
    }

    /**
     * Set number of comment's likes.
     *
     * @param int $likesCount
     */
    public function setLikesCount($likesCount)
    {
        $this->likesCount = $likesCount;
    }

    /**
     * Get number of comment's likes.
     *
     * @return int
     */
    public function getLikesCount()
    {
        return $this->likesCount;
    }

    /**
     * Set comment message
     *
     * @param string $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    /**
     * Get comment message.
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
}
