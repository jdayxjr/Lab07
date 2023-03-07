<?php
/**
 * Name: Jay Dawson II
 * Date:1/24/2023
 * File:movie.class.php
 * Description:
 */

class Movie{
    //define movie attribute
    //private data members to store movie details
    private $id;
    private $title;
private $rating;
private $release_date;
private $director;
private $image;
private $description;

//the Movie class constructor, which initializes all Movie attributes except movie id.
    public function __construct($title, $rating, $release_date, $director, $image, $description) {
        $this->title = $title;
        $this->rating = $rating;
        $this->release_date = $release_date;
        $this->director = $director;
        $this->image = $image;
        $this->description = $description;
    }

    // get methods to return details

    /**
     * @return mixed
     * gets the id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     * gets the title
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return mixed
     * gets the rating
     */
    public function getRating()
    {
        return $this->rating;
    }

    /**
     * @return mixed
     * gets the release date
     */
    public function getReleaseDate()
    {
        return $this->release_date;
    }

    /**
     * @return mixed
     * gets the director
     */
    public function getDirector()
    {
        return $this->director;
    }

    /**
     * @return mixed
     * gets the image
     */
    public function getImage()
    {
        return $this->image;
    }

    /**
     * @return mixed
     * gets the description
     */
    public function getDescription()
    {
        return $this->description;
    }


//set method for id

    /**
     * @param mixed $id
     * @return Movie
     * set movie id
     */
    public function setId($id): Movie
    {
        $this->id = $id;
        return $this;
    }


}