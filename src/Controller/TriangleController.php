<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TriangleController extends AbstractController
{

      /*  FORMULAR:
        The most pupolar formular for the surface area of a triangle is (height x base)/ 2 .
        However since we were given three parameters on the problem, we will be using  another formular;
          The Heron’s formula Surface Area = ( (s)(s-a)(s-b)(s-c) )^1/2
                      where s = semi perimeter: (a+b+c)/2
    */

      #[Route('/triangle/{a?}/{b?}/{c?}', name:'app_triangle')]
      public function doubletriangle(Request $request)
      {

          $a = floatval(dump($request->get(key: 'a')));
          $b = floatval(dump($request->get(key: 'b')));
          $c = floatval(dump($request->get(key: 'c')));


        $s = ($a+$b+$c)/2;
        $perimeter = $a+$b+$c;
        $surface =  sqrt( $s*($s-$a)*($s-$b)*($s-$c) );

        //Rounding perimeter to 4 decimal places
         $surface = round($surface, 4);



        return new Response ($this->json([
            'First side = ' => $a,
            'Second side = ' => $b,
            'Third side = ' => $c,


            'The Perimeter = ' => $perimeter,
            'The Surface Area = ' => $surface,
        ]));
  

}
}

