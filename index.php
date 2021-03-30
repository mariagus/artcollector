<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Art Collector App</h1>
<section class="container">

<?php
require "functions.php";
require "connectToDb.php";

$db = getDB();
$artworks = getArtworks($db);
echo displayArtworks($artworks);
?>

</section>
</body>
</html>