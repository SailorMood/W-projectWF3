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