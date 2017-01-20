<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/contact/', 'Contact#afficheContact', 'contact'],

        //Avis
		['GET', '/avis/', 'Avis#afficheAvis', 'avis'],
        ['GET', '/avis/', 'Avis#avisUtilisateurs', 'avisUsers'],
        ['GET|POST', '/avis/', 'Avis#envoiAvis', 'avisEnvoi'],

        //Log
		['POST', '/', 'Login#login', 'connexion'],
		['GET', '/', 'Logout#logout', 'déconnexion'],

	);
