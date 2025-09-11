<?php
namespace App\Controller\API;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class UserInfo {
    public $name;
    public $lastName;
    public $userName;
    
    public function setCred($name,$lastname,$username){
        $this->name = $name;
        $this->lastName = $lastname;
        $this->userName = $username;
    }
    public function whoami($name,$lastname){
        return "I am " . $name . " " . $lastname;
    }
};

class LoginAuth extends AbstractController{
    #[Route('auth/login-auth',name:"login-auth")]
    public function doLoginAuth(Request $request){
        $user = new UserInfo();
        $data = json_decode($request->getContent(), true);
        $username = $data['username'] ?? '';
        $lastname = $data['password'] ?? '';
        
        // $user->whoami($username,$lastname);

        $message = $user->whoami($username, $lastname);
        return new JsonResponse([
            'success'=>true,
            'message'=> $message
        ]);

    }
}