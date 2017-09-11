<?php

namespace AppBundle\Controller;


use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller
{
    /**
     * @Route("/", name="home")
     */
    public function indexAction()
    {
        $abstact = [
            "abstract-daim-dans-la-foret.jpg",
            "abstract-file000132701536.jpg",
            "abstract-file000267747089.jpg",
            "abstract-file000267804564.jpg",
            "abstract-file000325161223.jpg",
            "abstract-file000466623310.jpg",
            "abstract-file00053809264.jpg"
        ];

        $summer = [
            "summer-file000477760838.jpg",
            "summer-file000738769552.jpg",
            "summer-file3181278525287.jpg",
            "summer-file4741298583098.jpg",
            "summer-file5391259700152.jpg",
            "summer-file7681334413913.jpg",
            "summer-file8081258144701.jpg"
        ];

        $winter = [
            "winter-file000541344089.jpg",
            "winter-file1651272386454.jpg",
            "winter-file2231273355591.jpg",
            "winter-file4811312660912.jpg",
            "winter-file4821300966298.jpg",
            "winter-file5001258630705.jpg",
            "winter-file991289430233.jpg"
        ];

        $images = array_merge($abstact, $summer, $winter);

        shuffle($images);

        $randomisedImages = array_slice($images, 0, 8);

        return $this->render('home/index.html.twig', [
            'randomised_images' => $randomisedImages,
            'abstract'          => array_slice($abstact, 0, 2),
            'summer'            => array_slice($summer, 0, 2),
            'winter'            => array_slice($winter, 0, 2)
        ]);
    }
}