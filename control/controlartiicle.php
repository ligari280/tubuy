<?php
require_once('model/article.php');
function na($id)
{
	$article = new articles();
    $post = $article->getida($id);

    require('view/Viewnarticle.php');
}
function nap($id)
{
	$articless = new articles();
    $postq = $articless->getidas($id);

    require('view/visitart.php');
}
function myart($id)
{
	$myarticles = new articles();
    $postart = $myarticles->getmyid($id);

    require('view/Viewmyarticle.php');
}
function addarticle($id, $title,$category,$city,$country,$prix,$devise,$description,$nouveau)
{
	$postarti = new articles();
    $idarticle = $postarti->postarti($id, $title,$category,$city,$country,$prix,$devise,$description,$nouveau);
    if ($nposts === false) {
        die('Impossible d\'ajouter l\'article !');
    }
    else {
        header('Location: index.php?action=images&id='.$idarticle);
    }
}
function ni($id)
{
	$article = new articles();
    $seearticle = $article->postia($id);
    require('view/Viewpimg.php');
}

