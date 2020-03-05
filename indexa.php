<?php
require('control/controller.php');
try
{
	if (isset($_GET['action'])) {
		if ($_GET['action'] == 'listPosts') {
			listPosts();
			
	}
	else if ($_GET['action'] == 'post') {
        if (isset($_GET['id'])) {
            post();
        }
        else {
            throw new exception ('Erreur : aucun identifiant de billet envoyé');
        }
	}
	elseif ($_GET['action'] == 'np') {
                np();
            }
     elseif ($_GET['action'] == 'addComment') {
        
            if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                addComment($_GET['id'], $_POST['author'], $_POST['comment']);
            }
            else {
                throw new exception ('Erreur : tous les champs ne sont pas remplis !');
            }
        
    }
	 elseif ($_GET['action'] == 'addpost') {
        
            if (!empty($_POST['title']) && !empty($_POST['content'])) {
                addpost($_POST['title'], $_POST['content']);
            }
            else {
                throw new exception ('Erreur : tous les champs ne sont pas remplis !');
            }
        
    }
	

}
else {
    listPosts();
}
}
catch(exception $e)
{echo 'ERREUR :' .$e->getMessage();}
