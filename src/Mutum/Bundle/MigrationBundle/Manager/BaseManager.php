<?php

namespace Mutum\Bundle\MigrationBundle\Manager;


use Doctrine\ORM\EntityManager;
use Doctrine\ORM\EntityRepository;
use Symfony\Component\Console\Helper\ProgressBar;
use Symfony\Component\Console\Output\OutputInterface;

/**
 * Class BaseManager
 * @package Mutum\Bundle\MigrationBundle\Manager
 */
abstract class BaseManager
{
    /** @var  EntityRepository $repository */
    private $repository;
    /** @var  EntityManager $em */
    private $em;

    /** @var  ProgressBar $progress */
    private $progress;

    /**
     * @param EntityManager $em
     */
    public function setEntityManager(EntityManager $em)
    {
        $this->em = $em;
    }


    /**
     * @return EntityManager
     */
    public function getEntityManager()
    {
        return $this->em;
    }

    /**
     * @param EntityRepository $repository
     */
    public function setRepository(EntityRepository $repository)
    {
        $this->repository = $repository;
    }

    /**
     * @return EntityRepository
     */
    public function getRepository()
    {
        return $this->repository;
    }

    /**
     * @param OutputInterface $output
     * @param $max
     */
    public function progressInit(OutputInterface $output, $max)
    {
        $max = $max ? : 1;

        $output->writeln('');
        $output->writeln('');
        $output->writeln('');
        $this->progress = new ProgressBar($output, $max);
        $step = ceil($max / 10) > 1 ? ceil($max / 50) : 1;
        $this->progress->setRedrawFrequency($step);
        $this->progress->setFormat('%message% %filename%' . PHP_EOL . ' >> %current%/%max% [%bar%] %percent:3s%% %elapsed:6s%/%estimated:-6s% %memory:6s%' . PHP_EOL . '%status%' );
        $this->progress->setMessage("Start task");
        $this->progress->setMessage(get_called_class(), 'filename');
        $this->progress->start();
    }

    /**
     *
     */
    public function progressUpdate()
    {
        $this->progress->setMessage('In progress', 'status');
        $this->progress->advance();
    }

    /**
     *
     */
    public function progressStop()
    {
        $this->progress->setMessage('Task is finished', 'status');
        $this->progress->finish();
    }
}