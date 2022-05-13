<?php

namespace App\DataFixtures;

use App\Entity\Animal;
use App\Entity\Continent;
use App\Entity\Famille;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AnimalFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        /**
        *  Création des Continents 
        */
        $b1 = new Continent();
        $b1->setLibelle("Europe");
        $manager->persist($b1);

        $b2 = new Continent();
        $b2->setLibelle("Asie");
        $manager->persist($b2);

        $b3 = new Continent();
        $b3->setLibelle("Afrique");
        $manager->persist($b3);

        $b4 = new Continent();
        $b4->setLibelle("Océanie");
        $manager->persist($b4);

        $b5 = new Continent();
        $b5->setLibelle("Amérique");
        $manager->persist($b5);

        /**
        *  Création des Familles 
        */
        $c1 = new Famille();
        $c1->setLibelle("mammifères")
            ->setDescription("Animaux vertébrés nourissant leurs petits avec du lait")
        ;
        $manager->persist($c1);

        $c2 = new Famille();
        $c2->setLibelle("reptiles")
            ->setDescription("Animaux vertébrés qui rampent")
        ;
        $manager->persist($c2);

        $c3 = new Famille();
        $c3->setLibelle("poissons")
            ->setDescription("Animaux invertébrés du monde aquatique")
        ;
        $manager->persist($c3);

        /**
        *  Création des Animaux  
        */
        $a1 = new Animal();
        $a1->setNom("Chien")
            ->setDescription("Un animal domestique")
            ->setImage("chien.png")
            ->setPoids(10)
            ->setDangereux(false)
            ->setFamille($c1)
            ->addContinent($b1)
            ->addContinent($b2)
            ->addContinent($b3)
            ->addContinent($b4)
            ->addContinent($b5)
        ;
        $manager->persist($a1);

        $a2 = new Animal();
        $a2->setNom("Cochon")
            ->setDescription("Un animal d'élevage")
            ->setImage("cochon.png")
            ->setPoids(300)
            ->setDangereux(false)
            ->setFamille($c1)
            ->addContinent($b1)
            ->addContinent($b5)
        ;
        $manager->persist($a2);

        $a3 = new Animal();
        $a3->setNom("Serpent")
            ->setDescription("Un animal dangereux")
            ->setImage("serpent.png")
            ->setPoids(5)
            ->setDangereux(true)
            ->setFamille($c2)
            ->addContinent($b2)
            ->addContinent($b3)
            ->addContinent($b4)
        ;
        $manager->persist($a3);

        $a4 = new Animal();
        $a4->setNom("Crocodile")
            ->setDescription("Un animal très dangereux")
            ->setImage("crocodile.png")
            ->setPoids(500)
            ->setDangereux(true)
            ->setFamille($c2)
            ->addContinent($b3)
            ->addContinent($b4)
        ;
        $manager->persist($a4);

        $a5 = new Animal();
        $a5->setNom("Requin")
            ->setDescription("Un animal marin très dangereux")
            ->setImage("requin.png")
            ->setPoids(800)
            ->setDangereux(true)
            ->setFamille($c3)
            ->addContinent($b4)
            ->addContinent($b5)
        ;
        $manager->persist($a5);

        $manager->flush();
    }
}
