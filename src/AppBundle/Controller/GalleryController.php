<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class GalleryController extends Controller
{
    /**
     * @Route("/gallery", name="gallery")
     */
    public function indexAction()
    {
        return $this->render('gallery/index.html.twig', [
            'images' => [
                'daim-dans-la-foret.jpg',
                'daim-dans-la-foret.jpg',
                'daim-dans-la-foret.jpg',
                'daim-dans-la-foret.jpg',
                'daim-dans-la-foret.jpg',
                'daim-dans-la-foret.jpg',
                'daim-dans-la-foret.jpg',
                'daim-dans-la-foret.jpg',
                'daim-dans-la-foret.jpg'
            ]
        ]);
    }
}
