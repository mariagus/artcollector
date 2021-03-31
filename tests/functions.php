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
        $output = '<div class="artworks"><img src="" height="250" /><h2>Title: Blue Sky</h2><h3>Artist: Blobby</h3><h4>Movement: realism</h4><h4>Year: 1994</h4><a href="delete.php?id=1">delete</a></div><div class="artworks"><img src="" height="250" /><h2>Title: Red Sky</h2><h3>Artist: Rocky</h3><h4>Movement: surrealism</h4><h4>Year: 1995</h4><a href="delete.php?id=2">delete</a></div>';
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