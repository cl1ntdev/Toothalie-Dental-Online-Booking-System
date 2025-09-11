<?php
namespace App\Controller\Auth;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserRegister extends AbstractController {
    #[Route("/pages/register",name:"user-register")]
    public function doUserRegister(){
        return $this->render('Pages/user_register.html.twig');
    }
}
