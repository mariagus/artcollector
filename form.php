<?php

require_once 'connectToDb.php';
require_once 'functions.php';

if (count($_POST) === 5) {
    $db = getDb();


    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $movement = $_POST['movement'];
    $year = $_POST['year'];
    $image = $_POST['image'];

    $artwork = insertArtwork($db, $title, $artist, $movement, $year, $image);
    header("Location: index.php");
}

/*
 * Inserts a new artwork into the DB
 *
 * @params PDO $db, string $title, string $artist, string $movement, int $year, $string image
 *
 * @return bool
 */
function insertArtwork(PDO $db, string $title, string $artist, string $movement, int $year, string $image) :bool
{
    $query = $db->prepare('INSERT INTO `artworks` (`title`, `artist`, `movement`, `year`, `image`) VALUES (:title, :artist, :movement, :year, :image);');
    $query->bindParam('title', $title);
    $query->bindParam('artist', $artist);
    $query->bindParam('movement', $movement);
    $query->bindParam('year', $year);
    $query->bindParam('image', $image);
    $query->execute();
    return true;
}