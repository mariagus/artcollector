<?php

require "getArtworks.php";

function displayArtworks()
{
    $artworks = getArtworks();
    '<div class="artworks">';
    foreach ($artworks as $artwork){
        echo '<h1>' . $artwork['title'] . '</h1>';
        echo '<h2>' . $artwork['artist'] . '</h2>';
        echo '<h3>' . $artwork['movement']. '</h3>';
        echo '<h3>' . $artwork['year']. '</h3>';
    }
    '</div>';

}

echo displayArtworks();
