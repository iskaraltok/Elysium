<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class LuckyController extends Controller
{
    /**
     * @Route("/lucky/number")
     * @param $name
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function numberAction()
    {
        $number = mt_rand(0,100);

        return new Response(
            '<html><body>Lucky Number: '.$number.'</body></html>'
        );
    }
}
