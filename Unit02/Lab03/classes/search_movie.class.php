<?php
/**
 * Name: Jay Dawson II
 * Date:2/2/2023
 * File:search_movie.class.php
 * Description:
 */

require_once './application/app_view.class.php';

class SearchMovie
{

    public function display($terms, $movies) {
        AppView::displayHeader("List All Movies");
        ?>

        <div id="main-header">search results for <?="$terms"?></div>
        <div class="grid-container">
            <?php
            if ($movies === 0) {
                echo "No movie was found.<br><br><br><br><br>";
            } else {
                //display movies in a grid; six movies per row
                foreach ($movies as $i => $movie) {
                    $id = $movie->getId();
                    $title = $movie->getTitle();
                    $rating = $movie->getRating();
                    $release_date = $release_date = new DateTime($movie->getReleaseDate());
                    $image = $movie->getImage();
                    if (strpos($image, "http://") === false AND strpos($image, "https://") === false) {
                        $image = MOVIE_IMG . $image;
                    }
                    if ($i%6 == 0) {
                        echo "<div class='row'>";
                    }
                    echo "<div class='col'><p><a href='view_movie.php?id=" . $id . "'><img src='" . $image .
                        "'></a><span>$title<br>Rated $rating<br>" . $release_date->format('m-d-Y') . "</span></p></div>";
                    ?>
                    <?php
                    if ($i%6 == 5 || $i == count($movies) - 1) {
                        echo "</div>";
                    }
                }
            }

            ?>
        </div>
        <?php
        AppView::displayFooter();
    }
}
