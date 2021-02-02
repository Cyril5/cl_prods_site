<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    /**
     * @Route("/cl_admin", name="admin")
     */
    public function index()
    {
        return $this->render('admin/index.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }

     /**
     * @Route("/cl_admin/blog_update", name="blog_update")
     */
    public function blog_update() {
        return $this->render('admin/blog_update.html.twig', [
            'controller_name' => 'AdminController',
        ]);
    }
}
