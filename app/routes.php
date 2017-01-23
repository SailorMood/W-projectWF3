<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/contact/', 'Contact#afficheContact', 'contact'],

        //Avis
		['GET', '/avis/', 'AvisController#afficheAvis', 'avis'],
        ['GET', '/avis/', 'AvisController#avisUtilisateurs', 'avisUsers'],
        ['GET|POST', '/avis/', 'AvisController#envoiAvis', 'avisEnvoi'],

        //Log
		['POST', '/', 'Login#login', 'connexion'],
		['GET', '/', 'Logout#logout', 'déconnexion'],

	);
