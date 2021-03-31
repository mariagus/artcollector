<?php

require "functions.php";
require "connectToDb.php";



    $db = getDB();
    deleteArtwork($db, $_GET['id']);
    header("Location: index.php");
    exit;
