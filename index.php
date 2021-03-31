<!DOCTYPE html>
<html lang="en">
<head>
    <title>Art Collector App</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>
<h1>Art Collector App</h1>
<?php
if (isset($_GET['error'])) {
    echo '<p class="warning">Please fill in all fields!</p>';
}
?>
<section class="container">
<?php
require "functions.php";
require "connectToDb.php";

$db = getDB();
$artworks = getArtworks($db);
echo displayArtworks($artworks);
?>
</section>
<div class="form">
    <h3>Add Artwork</h3>
    <form action="form.php" method="post" >
        <label>Title: </label><input type="text" name="title" />
        <label>Artist: </label><input type="text" name="artist" />
        <label>Movement: </label><input type="text" name="movement" />
        <label>Year: </label><input type="number" name="year" />
        <label>Image url: </label><input type="url" name="image" />
        <div><input type="submit" class="submit"/></div>
    </form>
</div>
</body>
</html>

