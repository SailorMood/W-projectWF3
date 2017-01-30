<?php
namespace Controller;

use \W\Controller\Controller;
use \Model\insertUserModel;
use \Model\LoginModel;
use \W\Security\AuthentificationModel;
use \W\Model\UsersModel;


class userController extends Controller
{
    public function inscriptionForm()
    {
        if (isset($_POST['send'])) {
            $cryptedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $newUser = array(
                "name" => $_POST['name'],
                "firstname" => $_POST['firstname'],
                "numberphone" => $_POST['numberphone'],
                "email" => $_POST['email'],
                "password" => $cryptedPassword
            );
            $insertUser = new insertUserModel();
            $insertion = $insertUser->insertUser($newUser);

            $email = $_POST['email'];

    // Préparation du mail de confirmation d'inscription
            $destinataire = $email;
            $sujet = "Inscription aux Taxis de Dieppe" ;
            $entete = "From: inscription@TaxisDieppe.com" ;


            $message = 'Bienvenue sur les Taxis de Dieppe, votre inscription est dès à présent effective.
 
        ---------------
        Ceci est un mail automatique, Merci de ne pas y répondre.';


            mail($destinataire, $sujet, $message, $entete) ; // Envoi du mail

            $this->show('default/home');
        } else {
            $this->show('w_errors/403');
        }

    }

    public function connexionForm() {
        if (isset($_POST['connect'])){
            // On instancie un nouvel objet
            $authUser = new AuthentificationModel();
            // $userID nous renvoie l'ID de l'utilisateur si les infos sont correctes sinon il renvoie 0
            $userID = $authUser -> isValidLoginInfo($_POST['numberphone'], $_POST['password']);

            $cryptedPassword = password_hash($_POST['password'], PASSWORD_DEFAULT);
            $user = array(
                'numberphone' => $_POST['numberphone'],
                'password' => $cryptedPassword
            );

            var_dump($user);
            $connectUser = $authUser -> logUserIn($user);
            var_dump($userID);

        }
            $this->show('default/home');
    }
}