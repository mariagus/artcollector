<html>
<head>
    <title>Art Collector App</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>
</body>
</html>
<?php

require "functions.php";
require "connectToDb.php";

if (isset($_GET)) {
    $db = getDB();
    deleteArtwork($db, $_GET['id']);
    header("Location: index.php");
    exit;
}
