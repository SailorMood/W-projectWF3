<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],

        //Contact
		['GET', '/contact/', 'Contact#afficheContact', 'contact'],
        ['GET', '/contact/contact', 'MessageController#envoiMessage', 'message'],

        //Avis
		['GET', '/avis/', 'AvisController#afficheAvis', 'avis'],
        ['GET', '/avis/', 'AvisController#avisUtilisateurs', 'avisUsers'],
        ['GET|POST', '/avis/poster/', 'AvisController#envoiAvis', 'poster_avis'],

        //Log
		['GET|POST', '/users/connexion/', 'userController#connexionForm', 'connexion'],
		['GET', '/', 'Logout#logout', 'deconnexion'],

        //inscription
        ['GET|POST', '/users/inscription/', 'userController#inscriptionForm', 'inscription']

	);
