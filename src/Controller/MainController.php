<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(name: 'app_')]
class MainController extends AbstractController
{
    #[Route('/', name: 'main')]
    public function test()
    {
        return $this->render('main.html.twig');
    }



    #[Route('/Nous contactez', name: 'contact')]
    public function contact()
    {
        return $this->render('contact.html.twig');
    }
}
