<?php

namespace App\DataFixtures;

use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use App\Entity\Creation;

class CreationFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $creation = new Creation();
        $creation->setTitle("SITE E-Link 2.0");
        $creation->setDescription("Une application mobile iOS conçu pour les techniciens de SITE Equip");
        $creation->setImage("https://placehold.it/350x350");
        $creation->setCreatedAt(new \DateTime());
        $creation->setContent("<p>Contenu de cette création</p>");
        $manager->persist($creation);

        $creation2 = new Creation();
        $creation2->setTitle("Multiplayer Survival Board Game");
        $creation2->setDescription("");
        $creation2->setImage("https://placehold.it/350x350");
        $creation2->setCreatedAt(new \DateTime());
        $creation2->setContent("<p>Contenu de cette création</p>");
        $manager->persist($creation2);

        $creation3 = new Creation();
        $creation3->setTitle("Worms 4 Racing");
        $creation3->setDescription("A mario kart like fan game based on Worms 4 Mayhem game content");
        $creation3->setImage("https://placehold.it/350x350");
        $creation3->setCreatedAt(new \DateTime());
        $creation3->setContent("<p>Contenu de cette création</p>");
        $manager->persist($creation3);

        $creation4 = new Creation();
        $creation4->setTitle("Voyageurs 37");
        $creation4->setDescription("Site web de l'association Voyageurs37");
        $creation4->setImage("https://placehold.it/350x350");
        $creation4->setCreatedAt(new \DateTime());
        $creation4->setContent("<p>Contenu de cette création</p>");
        $manager->persist($creation4);



        $manager->flush();
    }
}