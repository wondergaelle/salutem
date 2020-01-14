<?php

namespace App\DataFixtures;

use App\Entity\OpeningHour;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class OpeningHoursFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
       $lundi =new OpeningHour();
       $lundi->setDayname("Lundi");
       $lundi->setDaynumber(1);
       $lundi->setOpeningTime(new \DateTime("2020-01-01 09:00:00"));
       $lundi->setClosingtime(new \DateTime("2020-01-01 17:00:00"));
       $manager->persist($lundi);

        $Mardi =new OpeningHour();
        $Mardi->setDayname("Mardi");
        $Mardi->setDaynumber(2);
        $Mardi->setOpeningTime(new \DateTime("2020-01-01 09:00:00"));
        $Mardi->setClosingtime(new \DateTime("2020-01-01 17:00:00"));
        $manager->persist($Mardi);

        $Mercredi =new OpeningHour();
        $Mercredi->setDayname("Mercredi");
        $Mercredi->setDaynumber(3);
        $Mercredi->setOpeningTime(new \DateTime("2020-01-01 09:00:00"));
        $Mercredi->setClosingtime(new \DateTime("2020-01-01 17:00:00"));
        $manager->persist($Mercredi);

        $Jeudi =new OpeningHour();
        $Jeudi->setDayname("Jeudi");
        $Jeudi->setDaynumber(4);
        $Jeudi->setOpeningTime(new \DateTime("2020-01-01 09:00:00"));
        $Jeudi->setClosingtime(new \DateTime("2020-01-01 17:00:00"));
        $manager->persist($Jeudi);

        $Vendredi =new OpeningHour();
        $Vendredi->setDayname("Vendredi");
        $Vendredi->setDaynumber(5);
        $Vendredi->setOpeningTime(new \DateTime("2020-01-01 09:00:00"));
        $Vendredi->setClosingtime(new \DateTime("2020-01-01 17:00:00"));
        $manager->persist($Vendredi);

        $Samedi =new OpeningHour();
        $Samedi->setDayname("Samedi");
        $Samedi->setDaynumber(6);
        $manager->persist($Samedi);

        $Dimanche =new OpeningHour();
        $Dimanche->setDayname("Dimanche");
        $Dimanche->setDaynumber(6);
        $manager->persist($Dimanche);

        $manager->flush();
    }
}
