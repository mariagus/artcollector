<?php

require_once 'connectToDb.php';
require_once 'functions.php';

if (count($_POST) === 5) {
    if (array_search('', $_POST)) {
        header('Location: index.php?error=Registration%20failed');
        exit;
    }
    $db = getDb();

    $title = validateText($_POST['title']);
    $artist = validateText($_POST['artist']);
    $movement = validateText($_POST['movement']);
    $year = validateText($_POST['year']);
    $image = $_POST['image'];

    $artwork = insertArtwork($db, $title, $artist, $movement, $year, $image);
    header("Location: index.php");
    exit;
}

/*
 * Inserts a new artwork into the DB
 * @params PDO $db, string $title, string $artist, string $movement, int $year, $string image
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

