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
    $artworks = $query->fetchAll();
    return $artworks;
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
        $return .= '<h2>Title: ' . $artwork['title'] . '</h2>';
        $return .= '<h3>Artist: ' . $artwork['artist'] . '</h3>';
        $return .= '<h3>Movement: ' . $artwork['movement']. '</h3>';
        $return .= '<h3>Year: ' . $artwork['year']. '</h3>';
    }
    return $return;
    '</div>';
}