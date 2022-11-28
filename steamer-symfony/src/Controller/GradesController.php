<?php

namespace App\Controller;

use App\Entity\Grades;
use App\Repository\GradesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class GradesController extends AbstractController
{
    #[Route('/grades', name: 'app_grades')]
    public function index(GradesRepository $gradesRepository): Response
    {
        return $this->render('grades/index.html.twig', [
            'grades' => $gradesRepository->findAll(),
        ]);
    }
}
