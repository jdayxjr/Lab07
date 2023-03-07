<?php
/**
 * Name: Jay Dawson II
 * Date:2/2/2023
 * File:search_movie.php
 * Description:
 */

if (!isset($_GET['id'])) {
    //handle error
}

$terms = $_GET['query-terms'];

//view movie details
require_once 'classes/movie_manager.class.php';
require_once 'classes/search_movie.class.php';


//get the movie
$movie_manager = MovieManager::getMovieManager();
$movies = $movie_manager->search_movie($terms);

if (!$movies) {
    //handle errors
    $message = "An error has occurred.";
    header("Location: show_error.php?eMsg=$message");
}

//display all movies
$view = new searchMovie();
$view->display($terms, $movies);