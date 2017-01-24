<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/contact/', 'Contact#afficheContact', 'contact'],

        //Avis
		['GET', '/avis/', 'AvisController#afficheAvis', 'avis'],
        ['GET', '/avis/', 'AvisController#avisUtilisateurs', 'avisUsers'],
        ['GET|POST', '/avis/poster/', 'AvisController#envoiAvis', 'poster_avis'],

        //Log
		['POST', '/', 'Login#login', 'connexion'],
		['GET', '/', 'Logout#logout', 'déconnexion'],

        //inscription
        ['GET|POST', '/users/inscription/', 'UserController#inscription', 'inscription']

	);
