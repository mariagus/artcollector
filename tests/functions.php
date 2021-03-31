<?php

use PHPUnit\Framework\TestCase;

require '../functions.php';

class Functions extends TestCase
{
    public function testDisplayArtworks_success1()
    {
        $data = [['id'=>1, 'image'=>'', 'title'=>'Blue Sky', 'artist'=>'Blobby', 'movement'=>'realism', 'year'=>1994],['id'=>2, 'image'=>'', 'title'=>'Red Sky', 'artist'=>'Rocky', 'movement'=>'surrealism', 'year'=>1995]];
        $result = displayArtworks($data);
        $this->assertIsString($result);
    }
    public function testDisplayArtworks_success2()
    {
        $data = [['id'=>1, 'title'=>'Blue Sky', 'artist'=>'Blobby', 'movement'=>'realism', 'year'=>1994, 'image'=>''],['id'=>2, 'title'=>'Red Sky', 'artist'=>'Rocky', 'movement'=>'surrealism', 'year'=>1995, 'image'=>'']];
        $output = '<div class="artworks"><img src="" alt="Blue Sky" height="250" /><h2>Title: Blue Sky</h2><h3>Artist: Blobby</h3><h3>Movement: realism</h3><h3>Year: 1994</h3><a href="delete.php?id=1">delete</a></div><div class="artworks"><img src="" alt="Red Sky" height="250" /><h2>Title: Red Sky</h2><h3>Artist: Rocky</h3><h3>Movement: surrealism</h3><h3>Year: 1995</h3><a href="delete.php?id=2">delete</a></div>';
        $result = displayArtworks($data);
        $this->assertEquals($result, $output);
    }
    public function testDisplayArtworks_malformed()
    {
        $this->expectException(TypeError::class);
        displayArtworks(4);
    }

    public function testValidateText_success1()
    {
        $data = ' £./hello> ';
        $output = 'hello';
        $result = validateText($data);
        $this->assertEquals($result, $output);
    }
    public function testValidateText_success2()
    {
        $result = validateText('.cool');
        $this->assertIsString($result);
    }
    public function testValidateText_malformed()
    {
        $this->expectException(TypeError::class);
        validateText([1,2,3]);
    }
}