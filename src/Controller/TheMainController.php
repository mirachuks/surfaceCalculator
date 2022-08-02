<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Service\ValidationService;

class TheMainController extends AbstractController
{
    #[Route('/', name: 'app_the_main')]
    public function index(): Response
    {
        return $this->render('form.html', [
            'controller_name' => 'TheMainController',
        ]);
    }


// ...

}