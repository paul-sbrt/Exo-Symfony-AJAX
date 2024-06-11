<?php

namespace App\DataFixtures;

use App\Entity\Coktail;
use App\Entity\Couleur;
use App\Entity\Fruit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $vert = new Couleur();
        $vert->setNom('vert');
        $manager->persist($vert);
        $rouge = new Couleur();
        $rouge->setNom('rouge');
        $manager->persist($rouge);
        $orange = new Couleur();
        $orange->setNom('orange');
        $manager->persist($orange);

        $jaune = new Couleur();
        $jaune->setNom('jaune');
        $manager->persist($jaune);

        $violet = new Couleur();
        $violet->setNom('violet');
        $manager->persist($violet);
        //--------------------------
        $grenade = new Fruit();
        $grenade->setNom('grenade');
        $grenade->setCouleurs($rouge);
        $manager->persist($grenade);

        $cerise = new Fruit();
        $cerise->setNom('cerise');
        $cerise->setCouleurs($rouge);
        $manager->persist($cerise);

        $kiwi = new Fruit();
        $kiwi->setNom('kiwi');
        $kiwi->setCouleurs($vert);
        $manager->persist($kiwi);

        $pomme = new Fruit();
        $pomme->setNom('pomme');
        $pomme->setCouleurs($vert);
        $manager->persist($pomme);

        $banane = new Fruit();
        $banane->setNom('banane');
        $banane->setCouleurs($jaune);
        $manager->persist($banane);

        $ananas = new Fruit();
        $ananas->setNom('ananas');
        $ananas->setCouleurs($jaune);
        $manager->persist($ananas);

        $citron = new Fruit();
        $citron->setNom('citron');
        $citron->setCouleurs($jaune);
        $manager->persist($citron);

        $prune = new Fruit();
        $prune->setNom('prune');
        $prune->setCouleurs($violet);
        $manager->persist($prune);

        $raisin = new Fruit();
        $raisin->setNom('raisin');
        $raisin->setCouleurs($violet);
        $manager->persist($raisin);

        $mangue = new Fruit();
        $mangue->setNom('mangue');
        $mangue->setCouleurs($orange);
        $manager->persist($mangue);

        $abricot = new Fruit();
        $abricot->setNom('abricot');
        $abricot->setCouleurs($orange);
        $manager->persist($abricot);

        $peche = new Fruit();
        $peche->setNom('pêche');
        $peche->setCouleurs($orange);
        $manager->persist($peche);

        $framboise = new Fruit();
        $framboise->setNom('framboise');
        $framboise->setCouleurs($rouge);
        $manager->persist($framboise);

        $fraise = new Fruit();
        $fraise->setNom('fraise');
        $fraise->setCouleurs($rouge);
        $manager->persist($fraise);
        //--------------------------

        $grenadine = New Coktail();
        $grenadine->setNom('Grenadine Coktail');
        $grenadine->setFruits($grenade);
        $manager->persist($grenadine);

        $jus = New Coktail();
        $jus->setNom('Cocktail jus de pomme');
        $jus->setFruits($pomme);
        $manager->persist($jus);;








        $manager->flush();
    }
}
