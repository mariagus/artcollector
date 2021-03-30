<?php

session_start();

require_once 'connectToDb.php';
require_once 'functions.php';

// There should be no way to get to this page without having filled out the form
// But why not check anyway just in case

if (count($_POST) === 5) {
    $db = getDb();

    // Extract the form data from the post superglobal
    $title = $_POST['title'];
    $artist = $_POST['artist'];
    $movement = $_POST['movement'];
    $year = $_POST['year'];
    $image = $_POST['image'];

    // Call our insertUser function which inserts a user into the DB
    $artwork = insertArtwork($db, $title, $artist, $movement, $year, $image);
    getArtworks($db);
    header("Location: index.php");
}

/*
 * Inserts a new artwork into the DB
 *
 * @param PDO $db
 * @param string $title
 * @param string $artist
 *
 * @return bool
 */
function insertArtwork(PDO $db, string $title, string $artist, string $movement, int $year, string $image)
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