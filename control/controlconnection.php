<?php

require_once('model/connection.php');

function np()
{

    require('view/Viewconnection.php');
}

function singup()
{
	
    require('view/Viewsingup.php');
}

function inform($id, $name, $country, $city)
{
	$informet = new connexion();
    $awnser = $informet->getinfo($id, $name, $country, $city);

    if ($awnser === false) 
	{
        die(' impossible action');
    }
    else 
	{
        header('location:index.php?action=listPosts&id='.$_GET['id']);
    }
}
function newmemberok($phone, $name, $country, $city)
{
	$newmembe = new connexion();
    $nposts = $newmembe->newmember($phone, $name, $country, $city);
    if ($nposts === false) {
        die('Impossible d\'ajouter l\'article !');
    }
    else 
	{
        header('location:index.php?action=listPosts&id='.$nposts);
    }
}