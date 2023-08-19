<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController extends AbstractController
{
    #[Route('/')]
    public function test()
    {
        return $this->render('main.html.twig');
    }



    #[Route('/contact')]
    public function contact()
    {
        return $this->render('contact.html.twig');
    }
}
