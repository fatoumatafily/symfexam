<?php

namespace App\DataFixtures;

use App\Entity\Inscription;
use Doctrine\Persistence\ObjectManager;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\DataFixtures\DependentFixtureInterface;

class InscriptionFixtures extends Fixture implements  DependentFixtureInterface 
{
    public function load(ObjectManager $manager): void
    {
        for ($i=1; $i <=40 ; $i++) { 
            $randClasse=rand(0,5);
            $randAnnee=rand(2019,2021);
            $randEtu=rand(1,20);
            $data =new Inscription;
            $data->setClasse( $this->getReference("Classe". $randClasse)) 
                    ->setAnneeScolaire( $this->getReference("AnneeScolaire".$randAnnee))
                    ->setEtudiant( $this->getReference("Etudiant".$randEtu)) ;
            $this->addReference("Inscription".$i,$data );
            $manager->persist($data);
        }

        $manager->flush();
    }

    public function getDependencies()
    {
         return[
                AnneeScolaireFixtures::class,
                ClasseFixtures::class,
                EtudiantFixtures::class
         ] ;
    }
}
