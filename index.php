<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Art Collector App</h1>
<div>
<h3>Add Artwork: </h3>
    <form action="form.php" method="post">
        <label>Title: <input type="text" name="title" /></label>
        <label>Artist: <input type="text" name="artist" /></label>
        <label>Movement: <input type="text" name="movement" /></label>>
        <label>Year: <input type="number" name="year" /></label>
        <label>Image link: <input type="url" name="image" /></label>
        <input type="submit" />
    </form>
<?php
if (isset($_GET['error'])) {
    echo '<p>Please fill in all fields!</p>';
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

