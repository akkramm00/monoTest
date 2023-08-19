<?php


namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route(name: 'app_')]
// Cette manipulation nous évite de montionner "app_" au niveau des routes de la classe 
// on peut aussi spécifier par/exp si c'est des pages "admin" ,comme ceci:
// #[Route('/admin' name:'app_')] ; cela signifie que les pages seront des pages admin.

class MainController extends AbstractController
{
    #[Route('/{name}-{age}', name: 'main')]
    public function test($name, $age)
    {
        return $this->render('main.html.twig', [
            'name' => $name,
            'age' => $age
        ]);
    }



    // #[Route('/contact', name: 'contact')]
    // public function contact()
    // {
    //     return $this->render('contact.html.twig');
    // }

    // On peut passer un "id" a la fonction et a la route, puis le recuperer au niveau de la page contact.html.twig
    //(voir main.html.twig au niveau du <h1>), ce qui donne le code suivant:

    #[Route('/contact/{id}', name: 'contact')]
    public function contact($id)
    {
        return $this->render('contact.html.twig', [
            'id' => $id
        ]);
    }
}
