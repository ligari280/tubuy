<?php
class server
{
protected function dbConnect()
{
    try
    {
        $db = new PDO('mysql:host=localhost;dbname=tubuy;charset=utf8', 'root', '');
        return $db;
    }
    catch(Exception $e)
    {
        die('Erreur : '.$e->getMessage());
    }
}
}