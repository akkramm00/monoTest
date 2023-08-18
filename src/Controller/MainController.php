<?php


namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController
{
    #[Route('/test')]
    public function test()
    {

        dd("Page principale");
    }
}
