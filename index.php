<head>
    <link rel="stylesheet" href="style.css">
</head>
<h1>Art Collector App</h1>
<body>
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
