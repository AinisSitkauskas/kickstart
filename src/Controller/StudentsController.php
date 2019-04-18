<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;

class StudentsController extends AbstractController
{
    /**
     * @Route("/students", name="students")
     */
    public function index(Request $request)
    {
        return $this->render('students/index.html.twig', [
            'controller_name' => $request->get('testas', 'standartinė'),
        ]);
    }
}
