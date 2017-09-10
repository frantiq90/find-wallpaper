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
    public function indexAction(Request $request)
    {
        $images = [
            'daim-dans-la-foret.jpg',
            'daim-dans-la-foret.jpg',
            'daim-dans-la-foret.jpg',
            'daim-dans-la-foret.jpg',
            'daim-dans-la-foret.jpg',
            'daim-dans-la-foret.jpg',
            'daim-dans-la-foret.jpg',
            'daim-dans-la-foret.jpg',
            'daim-dans-la-foret.jpg'
        ];

        $paginator  = $this->get('knp_paginator');
        $pagination = $paginator->paginate(
            $images,
            $request->query->getInt('cart', 1)/*page number*/,
            4/*limit per page*/
        );

        return $this->render('gallery/index.html.twig', [
            'images' => $pagination
        ]);
    }
}
