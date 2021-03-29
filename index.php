<head>
    <link rel="stylesheet" href="style.css">
</head>
<h1>Art Collector App</h1>
<body>
<section class="container">

<?php
require "functions.php";
$artworks = getArtworks();
echo displayArtworks($artworks);
?>

</section>
</body>
