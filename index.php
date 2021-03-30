<html>
<head>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<h1>Art Collector App</h1>
<form action="form.php" method="post">
    Title: <input type="text" name="title" />
    Artist: <input type="text" name="artist" />
    Movement: <input type="text" name="movement" />
    Year: <input type="number" name="year" />
    Image link: <input type="url" name="image" />
    <input type="submit" />
</form>

<?php
if (isset($_GET['error'])) {
    echo '<p>Please fill in all fields!</p>';
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
</body>
</html>

