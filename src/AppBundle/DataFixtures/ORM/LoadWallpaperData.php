<?php

namespace AppBundle\DataFixtures\ORM;

use AppBundle\Entity\Wallpaper;
use Doctrine\Common\DataFixtures\FixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;

class LoadWallpaperData implements FixtureInterface
{
    /**
    * Load data fixtures with the passed EntityManager
    *
    * @param ObjectManager $manager
    */
    public function load(ObjectManager $manager)
    {
        $wallpaper = (new Wallpaper())
            ->setFilename('abstract-daim-dans-la-foret.jpg')
            ->setSlug('abstract-daim-dans-la-foret')
            ->setWidth(1920)
            ->setHeight(1080)
            ;
        $manager->persist($wallpaper);
        $manager->flush();
    }
}