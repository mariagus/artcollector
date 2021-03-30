<?php

/*
 * function getDB
 *
 */

function getDB()
{
    $db = new PDO('mysql:host=db;dbname=artcollector', 'root', 'password');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}
