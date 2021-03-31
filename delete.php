<?php

require "functions.php";
require "connectToDb.php";


if (isset($_POST)) {
    $db = getDB();
    deleteArtwork($db, $_POST['delete']);
    header("Location: index.php");
    exit;
}