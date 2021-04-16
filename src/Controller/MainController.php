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
        $ideas = [
        [   "id"=>1,
            "title"=>"Title A",
            "content"=>" 4x4 4x4 "
        ],
        [   "id"=>2,
            "title"=>"Title B",
            "content"=>" 4x4 4x4 "
        ],
        [   "id"=>3,
            "title"=>"Title C",
            "content"=>" 4x4 4x4 "
        ],
        [   "id"=>4,
            "title"=>"Title D",
            "content"=>" 4x4 4x4 "
        ],
        [   "id"=>5,
            "title"=>"Title E",
            "content"=>" 4x4 4x4 "
        ],
        [   "id"=>6,
            "title"=>"Title F",
            "content"=>" 4x4 4x4 "
        ]
        ];

        // return new Response(
        //     '<html><body>Lucky number: '.$number.'</body></html>'
        // );
        return $this->render('ideas/index.html.twig',array("data"=>$ideas));
    }
}