<?php
/**
 * Name: Jay Dawson II
 * Date:1/24/2023
 * File:list_movie.php
 * Description:
 */

require_once 'classes/list_movie.class.php';
require_once 'classes/movie_manager.class.php';

//create a MovieManager instance
$movie_manager = MovieManager:: getMovieManager();

//get all movies
$movies = $movie_manager->list_movie();

//handle errors if the last query failed
if (!$movies) {
    $message = "There was a problem displaying movies.";
    header("Location: show_error.php?eMsg=$message");
    exit();
}

//display all movies
$view = new ListMovie();
$view->display($movies);
