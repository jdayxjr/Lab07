<?php
/**
 * Name: Jay Dawson II
 * Date:1/18/2023
 * File:course.class.php
 * Description:
 */

class course_class {

    private $title;
    private $number;
    private $credits;
    private $description;
    private $prerequisite;

    public function __construct($description,$credits,$number,$prerequisite,$title)
    {
        $this->title = $title;
        $this->description = $description;
        $this->credits = $credits;
        $this->prerequisite = $prerequisite;
        $this->number =$number;


    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     */
    public function getNumber()
    {
        return $this->number;
    }

    /**
     * @return mixed
     */
    public function getCredits()
    {
        return $this->credits;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @return mixed
     */
    public function getPrerequisite()
    {
        return $this->prerequisite;
    }

}