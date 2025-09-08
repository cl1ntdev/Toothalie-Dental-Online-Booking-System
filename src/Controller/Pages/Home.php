<?php
namespace App\Controller\Pages;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class Home extends AbstractController {
    #[Route("/pages/home",name:"home")]
    public function doHome(){
        return $this->render('/Pages/home.html.twig');
    }
    
};