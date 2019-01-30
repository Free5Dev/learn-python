<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

use App\Entity\Post;

class PythonController extends AbstractController
{
    /**
     * @Route("/python", name="python")
     */
    public function index()
    {
        $posts= new Post();
        $repo=$this->getDoctrine()->getRepository(Post::class);
        $posts=$repo->findAll();
        return $this->render('python/index.html.twig', [
            'posts' => $posts 
        ]);
    }
    /**
     * @Route("/", name="home")
     */
    public function home(){
        $posts= new Post();
        $repo=$this->getDoctrine()->getRepository(Post::class);
        $posts=$repo->findAll();
        return $this->render('python/home.html.twig',[
            'posts' => $posts 
        ]);
    }
    /**
     * @Route("/python/{id}", name="python_show")
     */
    public function show($id){
        $repo=$this->getDoctrine()->getRepository(Post::class);
        $post=$repo->find($id);
        return $this->render('python/show.html.twig',[
            'post'=>$post
        ]);
    }
    /**
     * @Route("/initiation", name="initiation")
     */
    public function initiation(){
        $posts= new Post();
        $repo=$this->getDoctrine()->getRepository(Post::class);
        $posts=$repo->findAll();
        return $this->render('python/index.html.twig',[
            'posts' => $posts 
        ]);
    }
    /**
     * @Route("/perfection", name="perfection")
     */
    public function perfection(){
        $posts= new Post();
        $repo=$this->getDoctrine()->getRepository(Post::class);
        $posts=$repo->findAll();
        return $this->render('python/index.html.twig',[
            'posts' => $posts 
        ]);
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
