<?php

class Advertisement
{
    private $id;
    private $userid;
    private $title;

    /**
     * @param $id
     * @param $userid
     * @param $title
     */
    public function __construct($id, $userid, $title)
    {
        $this->setId($id);
        $this->setUserid($userid);
        $this->setTitle($title);
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getUserid()
    {
        return $this->userid;
    }

    /**
     * @param mixed $userid
     */
    public function setUserid($userid)
    {
        $this->userid = $userid;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

}