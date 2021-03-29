<h1>Art Collector App</h1>
<body>
<?php

require "getArtworks.php";

function displayArtworks()
{
    $artworks = getArtworks();
    '<div class="artworks">';
    $return = '';
    foreach ($artworks as $artwork){
        $return .= '<h2>Title: ' . $artwork['title'] . '</h2>';
        $return .= '<h3>Artist: ' . $artwork['artist'] . '</h3>';
        $return .= '<h3>Movement: ' . $artwork['movement']. '</h3>';
        $return .= '<h3>Year: ' . $artwork['year']. '</h3>';
    }
    return $return;
    '</div>';
}

echo displayArtworks();
?>
</body>
