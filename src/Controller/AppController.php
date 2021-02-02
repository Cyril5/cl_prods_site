<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use App\Entity\BlogArticle;
use App\Repository\BlogArticleRepository;

class AppController extends AbstractController
{
    /**
    * @Route("/", name="home")
    */
    public function index() {

        $repository = $this->getDoctrine()->getRepository(BlogArticle::class);
        $creations = $repository->findAll();
        
    	return $this->render('app/index.html.twig', [
            'creations' => $creations
        ]);
    }

    /**
    * @Route("/blog", name="blog")
    */
    public function blog(BlogArticleRepository $repository) {
        
        $articles = $repository->findAll();

    	return $this->render('app/blog.html.twig', [
            'articles' => $articles
        ]);
    }

    /**
    * @Route("/blog/read/{id}/{title}", name="blog_read")
    */
    public function read(BlogArticle $article) {
        // $repository = $this->getDoctrine()->getRepository(BlogArticle::class);
        // $article = $repository->find($id);
        return $this->render('app/blog_read.html.twig', [
            'article' => $article
        ]);
    }

}
