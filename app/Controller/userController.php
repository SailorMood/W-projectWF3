<?php
namespace Controller;

use \W\Controller\Controller;
use \Model\insertUserModel;


class userController extends Controller
{
    public function inscription()
    {
        if (isset($_POST['inscription'])) {
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
            return false;
        }

    }
}