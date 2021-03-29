<?php

require "getArtworks.php";

$artworks = getArtworks();

echo '<pre>';
var_dump($artworks);
echo '</pre>';