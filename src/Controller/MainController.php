<?php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;


use Symfony\Component\Routing\Annotation\Route;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;

class MainController extends AbstractController
{

    //
    /**
     * @Route("/")
     * @Method({"GET"})
     */
    public function index(): Response
    {
        $number = random_int(0, 100);

        // return new Response(
        //     '<html><body>Lucky number: '.$number.'</body></html>'
        // );
        return $this->render('ideas/index.html.twig');
    }
}