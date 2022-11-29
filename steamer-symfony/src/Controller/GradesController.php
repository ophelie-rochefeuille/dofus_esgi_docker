<?php

namespace App\Controller;

use App\Entity\Grades;
use App\Repository\GradesRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Contracts\Cache\CacheInterface;
class GradesController extends AbstractController
{
    #[Route('/grades', name: 'app_grades')]
    public function index(GradesRepository $gradesRepository, CacheInterface $cache): Response
    {
        dump($cache);
        return $this->render('grades/index.html.twig', [
            'grades' => $gradesRepository->findAll(),
        ]);
    }

}
