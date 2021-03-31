<?php

/*
 * function getArtworks
 * @params database
 * returns an array of the artworks
 */

function getArtworks(object $db) : array
{
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
    if (empty($data)){
        die("ERROR: no data available");
    }
    $return = '';
    foreach ($data as $artwork){
        if (!$artwork['deleted']) {
            $return .= '<div class="artworks" >';
            $return .= '<img src="' . $artwork['image'] . '" height="250" />';
            $return .= '<h2>Title: ' . $artwork['title'] . '</h2>';
            $return .= '<h3>Artist: ' . $artwork['artist'] . '</h3>';
            $return .= '<h4>Movement: ' . $artwork['movement'] . '</h4>';
            $return .= '<h4>Year: ' . $artwork['year'] . '</h4>';
            $return .= '<form action="delete.php" method="post"><input name="delete" type="submit" value="delete"><input type="hidden" value="' . $artwork['id'] . '" name="id"></form>';
            $return .= '</div>';
        }
    }
    return $return;
}

/*
 * function validateInput
 * @params string $input
 * @return string
 */

function validateText(string $string) :string
{
    $string = trim($string);
    return preg_replace('/[^A-Za-z0-9\-\s]/', '', $string);
}

/*
 * function deleteArtwork
 * @params PDO database
 * @returns bool
 */

function deleteArtwork(PDO $db) :bool
{
    $query = $db->prepare('UPDATE `artworks` SET `deleted` = 1 WHERE `id` = :id');
    $query->bindParam('id', $_POST['id']);
    $query->execute();
    return true;
}
