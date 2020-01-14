<?php

namespace App\DataFixtures;

use App\Entity\Contact;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ContactFixtures extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $contact = new Contact();
        $contact->setPhone("0213456734");
        $contact->setEmail("johndoe@gmail.com");
        $manager->persist($contact);

        $manager->flush();
    }
}
