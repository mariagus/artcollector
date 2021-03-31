<!DOCTYPE html>
<head>
    <title>Art Collector App</title>
    <link rel="stylesheet" href="style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>
<h1>Art Collector App</h1>
<div class="form">
<h3>Add Artwork: </h3>
    <form action="form.php" method="post" >
        <label>Title: <input type="text" name="title" /></label>
        <label>Artist: <input type="text" name="artist" /></label>
        <label>Movement: <input type="text" name="movement" /></label>
        <label>Year: <input type="number" name="year" /></label>
        <label>Image url: <input type="url" name="image" /></label>
        <input type="submit" class="submit"/>
    </form>
<?php
if (isset($_GET['error'])) {
    echo '<p class="warning">Please fill in all fields!</p>';
}
?>
</div>
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

