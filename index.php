<head>
    <link rel="stylesheet" href="style.css">
</head>
<h1>Art Collector App</h1>
<body>
<form action="form.php" method="post">
    <label>Title: </label>
    <input type="text" name="title" />
    <label>Artist: </label>
    <input type="text" name="artist" />
    <label>Movement: </label>
    <input type="text" name="movement" />
    <label>Year: </label>
    <input type="number" name="year" />
    <label>Image url: </label>
    <input type="url" name="image" />
    <input type="submit" />
</form>
<section class="container">

<?php
require "functions.php";
$artworks = getArtworks();
echo displayArtworks($artworks);
?>

</section>
</body>
