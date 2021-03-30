<head>
    <link rel="stylesheet" href="style.css">
</head>
<h1>Art Collector App</h1>
<body>
<form action="form.php" method="post">
    Title: <input type="text" name="title" />
    Artist: <input type="text" name="artist" />
    Movement: <input type="text" name="movement" />
    Year: <input type="number" name="year" />
    Image link: <input type="url" name="image" />
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
