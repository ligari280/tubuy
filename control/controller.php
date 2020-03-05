<?php

require_once('model/postmanager.php');
require_once('model/commentmanager.php');

function listPosts($id)
{
	$postmanager = new postmanager();
    $posts = $postmanager->getPost($id);

    require('view/View.php');
}function nps()
{

    require('view/Viewnpost.php');
}

function post()
{
	$postmanager = new commentmanager();
	$commentmanager = new commentmanager();
    $post = $postmanager->getPosta($_GET['id']);
    $comments = $commentmanager->getComments($_GET['id']);

    require('view/commentview.php');
}
function addComment($postId, $author, $comment)
{
	$commentmanager = new commentmanager();
    $affectedLines = $commentmanager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        die('Impossible d\'ajouter le commentaire !');
    }
    else {
        header('Location: index.php?action=post&id=' .$postId);
    }
}

function addpost($title, $content)
{
	$postmanager = new postmanager();
    $nposts = postn($title, $content);

    if ($nposts === false) {
        die('Impossible d\'ajouter le billet !');
    }
    else {
        header('Location: index.php?action=listPosts');
    }
}


