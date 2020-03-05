<?php
require('control/controlconnection.php');

require('control/controller.php');
require('control/controlartiicle.php');
try
{
	if (isset($_GET['action'])) 
    {
		// connexion
		if ($_GET['action'] == 'np')
        {
			np();
        }
		// add images
		if ($_GET['action'] == 'images')
        {
			if(isset($_GET['id']))
				{
					ni($_GET['id']);
				}
				else
				{
					throw new exception ('erreur de recuperation de donnee');
				}
        }
		// see my article
		if ($_GET['action'] == 'myarticles')
        {
			if(isset($_GET['id']))
				{
					myart($_GET['id']);
				}
				else
				{
					throw new exception ('erreur de recuperation de donnee');
				}
        }
		
		// end
		
		
        // articlels page post
		else if ($_GET['action'] == 'narticle') 
        {
			    if(isset($_GET['id']))
				{
					na($_GET['id']);
				}
				else
				{
					throw new exception ('erreur de recuperation de donnee');
				}
		}	
		else if ($_GET['action'] == 'visarticle') 
        {
			    if(isset($_GET['id']))
				{
					nap($_GET['id']);
				}
				else
				{
					throw new exception ('erreur de recuperation de donnee');
				}
		}	
	// home page
        else if ($_GET['action']=='listPosts')
        {
            if(isset($_GET['id']))
            {
                listPosts($_GET['id']);
            }
            
        }
	// singup page
		else if ($_GET['action']=='singup')
        {
           
                singup();
            
            
        }
		// singup post
		elseif ($_GET['action'] == 'info') 
		{
        
            if (isset($_GET['id']) && !empty($_POST['name']) && !empty($_POST['country']) && !empty($_POST['city'])) 
			{
                inform($_GET['id'], $_POST['name'], $_POST['country'], $_POST['city']);
            }
            else 
			{
                throw new exception ('Erreur : tous les champs ne sont pas remplis !');
            }
        
		}	
		// post article
		elseif ($_GET['action'] == 'postok') 
		{
        
            if (isset($_GET['id']) && !empty($_POST['title']) && !empty($_POST['category']) && !empty($_POST['city']) && !empty($_POST['country']) && !empty($_POST['prix']) && !empty($_POST['devise']) && !empty($_POST['description']) && !empty($_POST['nouveau'])) 
			{
                addarticle($_GET['id'], $_POST['title'], $_POST['category'] , $_POST['city'], $_POST['country'], $_POST['prix'], $_POST['devise'] , nl2br(htmlspecialchars($_POST['description'])), $_POST['nouveau']);
            }
            else 
			{
                throw new exception ('Erreur : tous les champs ne sont pas remplis !');
            }
        
		}
		// add member
			elseif ($_GET['action'] == 'postmember') 
		{
        
            if (isset($_GET['phone']) && !empty($_POST['name']) && !empty($_POST['country']) && !empty($_POST['city'])) 
			{
                newmemberok($_GET['phone'], $_POST['name'], $_POST['country'] , $_POST['city']);
            }
            else 
			{
                throw new exception ('Erreur : tous les champs ne sont pas remplis !');
            }
        
		}
			
	}
	
    else 
    {
        np();
    }
}
 catch(exception $e)
{echo 'ERREUR :' .$e->getMessage();}