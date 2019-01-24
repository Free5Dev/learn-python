<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class PythonController extends AbstractController
{
    /**
     * @Route("/python", name="python")
     */
    public function index()
    {
        return $this->render('python/index.html.twig', [
            'controller_name' => 'PythonController',
        ]);
    }
    /**
     * @Route("/", name="home")
     */
    public function home(){
        return $this->render('python/home.html.twig');
    }
    /**
     * @Route("/python/12", name="python_show")
     */
    public function show(){
        return $this->render('python/show.html.twig');
    }
    /**
     * @Route("/initiation", name="initiation")
     */
    public function initiation(){
        return $this->render('python/initiation.html.twig');
    }
    /**
     * @Route("/perfection", name="perfection")
     */
    public function perfection(){
        return $this->render('python/perfection.html.twig');
    }
    /**
     * @Route("/subscription", name="subscription")
     */
    public function subscription(){
        return $this->render('python/subscription.html.twig');
    }
    /**
     * @Route("/contact", name="contact")
     */
    public function contact(){
        return $this->render('python/contact.html.twig');
    }
}
