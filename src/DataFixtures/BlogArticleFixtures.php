<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\BlogArticle;

class BlogArticleFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        
        for ($i=0; $i < 5; $i++) { 
            $article = new BlogArticle();
            $article->setTitle("Titre de l'article ". $i);
            $article->setImage("https://source.unsplash.com/350x150");
            
            $article->setContent([]);

            $date = new \DateTime();
            
            $article->setPublished = false;
            $article->setCreationDate($date);
            $article->setModificationDate($date);
            
            $manager->persist($article);
        }
        
        $manager->flush();
    }
}
