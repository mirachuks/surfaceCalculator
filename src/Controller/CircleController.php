<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CircleController extends AbstractController
{
    
  /*  FORMULAR:  
        Pi = 3.16 
        Diameter = 2*Radius
        Perimeter = 2*Pi*Radius
        Surface Area = Pi*(Radius^2)
  */

  // Properties


      #[Route('/circle/{radius?}', name:'app_circle')]
      public function calculateSurface(Request $request)
    {
        //collect data (radius) from the request

        $radius = floatval(dump($request->get(key: 'radius')));


        //Calculations

        $diameter = $radius*2;
        $perimeter = 2*pi()*$radius;
        $surface =  sqrt(pi()*$radius);

        
        //rounding results to 4 decimal places

        $surface = round($surface, 4);
        $perimeter = round($perimeter, 4);


        //Outputing the information.
        return new Response ($this->json([
            'The Radius = ' => $radius,
            'The perimeter = ' => $perimeter,
            'Surface Area = ' => $surface,
        ]));

}


    public function index(): Response
    {
        return $this->render('circle/index.html.twig', [
            'controller_name' => 'CircleController',
        ]);
    }
}
