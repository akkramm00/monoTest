<?php
// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class MainController
{
    #[Route('/')]
    public function test()
    {
        $x = 5;
        $y = 25;

        $result = $x * $y;
        dd($result);
    }
}
