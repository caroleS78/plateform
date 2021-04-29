<?php
namespace App\Controller;

use App\Entity\User;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;


class HomeController extends AbstractController
{
    
/**
* @Route("/home", name="app_home")
*/
public function home()
    {        
        return $this->render('home.html.twig'); 
    }
    
/**
* @Route("/about-us", name="about")
*/
public function about()
    {        
        return $this->render('about-us.html.twig'); 
    }


public function admin()
{
    $users = $this->getDoctrine()->getRepository(User::class)->findAll();

    return $this->render('admin.html.twig', [
        
        'users' => $users
    ]);
}




}
