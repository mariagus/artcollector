<?php
require "connectToDb.php";

function getArtworks()
{
    $db = getDB();
    $query = $db->prepare('SELECT * FROM `artworks`;');
    $query->execute();
    $artworks = $query->fetchAll();
    return $artworks;
}