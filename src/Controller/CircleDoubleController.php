<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class CircleDoubleController extends AbstractController
{

    /*  FORMULAR:
          Pi = 3.16
          Diameter = 2*Radius
          Perimeter = 2*Pi*Radius
          Surface Area = Pi*(Radius^2)
    */

    // Properties


    #[Route('/doublecircle/{radius?}/{radius2?}', name:'circle_double_controlller')]
    public function calculateSurface(Request $request)
    {
        //collect data (radius) from the request

        $radius = floatval(dump($request->get(key: 'radius')));
        $radius2 = floatval(dump($request->get(key: 'radius2')));


        //Calculations
        //for circle1
        $diameter = $radius*2;
        $perimeter = 2*pi()*$radius;
        $surface =  sqrt(pi()*$radius);

        //for circle 2
        $diameter2 = $radius2*2;
        $perimeter2 = 2*pi()*$radius2;
        $surface2 =  sqrt(pi()*$radius2);


        //rounding results to 4 decimal places
        $radius = round($radius, 4);
        $perimeter = round($perimeter, 4);
        $radius2 = round($radius2, 4);
        $perimeter2 = round($perimeter2, 4);

        //Add the two shape
        $totalSurface = $surface + $surface2;
        $totalPerimeter = $perimeter + $perimeter2;

        //Outputing the information.
        return new Response ($this->json([
            'Radius for circle1= ' => $radius,
            'Perimeter for circle1 = ' => $perimeter,
            'Surface Area for circle1 = ' => $surface,

            'The Radius for circle2 = ' => $radius2,
            'The perimeter for circle2 = ' => $perimeter2,
            'Surface Area for circle2 = ' => $surface2,

            'The Sum of perimeter for the two circle = ' => $totalPerimeter,
            'The Sum of Surface Area for the two circle = ' => $totalSurface,
        ]));

    }


}
