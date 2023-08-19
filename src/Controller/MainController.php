<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/user/{name}')]
    public function test($name)
    {

        $age = 19;

        return $this->render('main.html.twig', [
            'prenom' => $name,
            'age' => $age
        ]);
    }
}
