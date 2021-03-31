<?php

/*
 * function getDB
 * @returns PDO
 */

function getDB() :PDO
{
    try {
        $db = new PDO('mysql:host=db;dbname=artcollector', 'root', 'password');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        return $db;
    } catch (PDOException $e) {
        echo 'Connection failed: ' . $e->getMessage();
    }
}
