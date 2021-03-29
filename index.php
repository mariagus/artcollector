<h1>Art Collector App</h1>
<body>
<?php
require "functions.php";

$artworks = getArtworks();
echo displayArtworks($artworks);
?>
</body>
