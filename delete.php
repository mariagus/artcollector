<?php

require "functions.php";
require "connectToDb.php";

if (isset($_GET)) {
    $db = getDB();
    deleteArtwork($db, $_GET['id']);
    header("Location: index.php");
    exit;
}
