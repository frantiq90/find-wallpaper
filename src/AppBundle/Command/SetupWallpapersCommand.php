<?php

namespace AppBundle\Command;

use AppBundle\Entity\Wallpaper;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SetupWallpapersCommand extends Command
{
     /**
      * @var string
      */
     private $rootDir;

     public function __construct(string $rootDir, EntityManagerInterface $em)
     {
         parent::__construct();

         $this->rootDir = $rootDir;
         $this->em = $em;
     }

    protected function configure()
    {
        $this
            ->setName('app:setup-wallpapers')
            ->setDescription('Grabg all the local wallpapers and creates a Wallpaper entity for each one.')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $wallpapers = glob($this->rootDir . '/../web/images/*.*');

        foreach ($wallpapers as $wallpaper) {
            $wp = (new Wallpaper())
                ->setFilename($wallpaper)
                ->setSlug($wallpaper)
                ->setWidth(1920)
                ->setHeight(1080)
                ;

            $this->em->persist($wp);
        }

        $this->em->flush();

        $output->writeln('Command result.');
    }

}
