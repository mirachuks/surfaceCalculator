<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TriangleDoubleController extends AbstractController
{

    /*  FORMULAR:
      The most pupolar formular for the surface area of a triangle is (height x base)/ 2 .
      However since we were given three parameters on the problem, we will be using  another formular;
        The Heron’s formula Surface Area = ( (s)(s-a)(s-b)(s-c) )^1/2
                    where s = semi perimeter: (a+b+c)/2
  */

    #[Route('/doubletriangle/{a?}/{b?}/{c?}/{d?}/{e?}/{f?}', name:'triangle')]
    public function triangle(Request $request)
    {

        $a = floatval(dump($request->get(key: 'a')));
        $b = floatval(dump($request->get(key: 'b')));
        $c = floatval(dump($request->get(key: 'c')));
        $a2 = floatval(dump($request->get(key: 'd')));
        $b2 = floatval(dump($request->get(key: 'e')));
        $c2 = floatval(dump($request->get(key: 'f')));

        $s = ($a+$b+$c)/2;
        $perimeter = $a+$b+$c;
        $surface =  sqrt( $s*($s-$a)*($s-$b)*($s-$c) );
        $s2 = ($a2+$b2+$c2)/2;
        $perimeter2 = $a2+$b2+$c2;
        $surface2 =  sqrt( $s2*($s2-$a2)*($s2-$b2)*($s2-$c2) );

        //Rounding perimeter to 4 decimal places
        $surface = round($surface, 4);
        $surface2 = round($surface2, 4);

        //Calculating the total for the two shapes
        $totalSurface = round($surface + $surface2);
        $totalPerimeter = $perimeter + $perimeter2;



        return new Response ($this->json([
            'First side = ' => $a,
            'Second side = ' => $b,
            'Third side = ' => $c,
            'The Perimeter = ' => $perimeter,
            'The Surface Area = ' => $surface,

            'First side for triangle2 = ' => $a2,
            'Second side for triangle2 = ' => $b2,
            'Third side for triangle2 = ' => $c2,
            'The Perimeter for triangle2 = ' => $perimeter2,
            'The Surface Area for triangle2 = ' => $surface2,

            'The Sum of Perimeter for the two triangles = ' => $totalPerimeter,
            'The sum of Surface Area for the two triangles = ' => $totalSurface,
        ]));


    }
}

