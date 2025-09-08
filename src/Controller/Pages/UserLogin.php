<?php
namespace App\Controller\Pages;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;


class UserLogin extends AbstractController{
    #[Route("/pages/user-login",name:"user_login")]
    public function doUserLogin(){
        return $this->render("/Pages/userlogin.html.twig");
    }
}   