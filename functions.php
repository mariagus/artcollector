<?php
require "connectToDb.php";

/*
 * function getArtworks
 * returns an array of the artworks
 */

function getArtworks() : array
{
    $db = getDB();
    $query = $db->prepare('SELECT * FROM `artworks`;');
    $query->execute();
    return $query->fetchAll();
}

/*
 * function displayArtworks
 * @params array
 * returns HTML displaying the artwork details
 */

function displayArtworks(array $data) : string
{
    '<div class="artworks">';
    $return = '';
    foreach ($data as $artwork){
        $return .= '<img src="' . $artwork['image'] . '" width="400" />';
        $return .= '<br/><h2>Title: ' . $artwork['title'] . '</h2>';
        $return .= '<h3>Artist: ' . $artwork['artist'] . '</h3>';
        $return .= '<h4>Movement: ' . $artwork['movement'] . '</h4>';
        $return .= '<h4>Year: ' . $artwork['year'] . '</h4>' . '<br/>';
    }
    return $return;
    '</div>';
}