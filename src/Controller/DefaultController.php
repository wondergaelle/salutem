<?php

namespace App\Controller;

use App\DataFixtures\OpeningHoursFixtures;
use App\Entity\Doctor;
use App\Entity\OpeningHour;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="homepage")
     */
    public function index()
    {
        // rechercher les données dans la base de données
        $doctors = $this->getDoctrine()->getRepository(Doctor::class)->findAll();
        $openingHours = $this->getDoctrine()->getRepository(OpeningHour::class)->findAll();

        //Envoyer les données dans la vue
        return $this->render('default/index.html.twig', [
            'doctors' => $doctors,
            'openingHours'=>$openingHours,
        ]);



    }
}
