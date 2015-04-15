<?php


namespace Mutum\Bundle\MigrationBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\ConsoleOutput;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Process\Process;

/**
 * Class MigrationCommand
 * @package Mutum\Bundle\MigrationBundle\Command
 */
class MigrationCommand extends ContainerAwareCommand
{
    /**
     *
     */
    protected function configure()
    {
        $this
            ->setName('mutum:migrate')
            ->setDescription('Migre le contenu de Mutum V1 vers la base Mutum V2')
//            ->addArgument('name', InputArgument::OPTIONAL, 'Qui voulez vous saluer??')
//            ->addOption('yell', null, InputOption::VALUE_NONE, 'Si définie, la tâche criera en majuscules')
        ;
    }


    /**
     * @inherited
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->dropDB();
        $this->createDB();
        $this->schemaV1Update();
        $this->schemaV2Update();
        $this->fixturesLoad();

        $this->migrate($output);

        $this->cleanDB();

        $output->writeln('');
        $output->writeln('Done.');

        return null;
    }

    /**
     * @param OutputInterface $output
     */
    private function migrate(OutputInterface $output)
    {
        $this->getContainer()->get('mutum.migration.manager.abuse_type')->execute($output);
        $this->getContainer()->get('mutum.migration.manager.buy')->execute($output);
        $this->getContainer()->get('mutum.migration.manager.category')->execute($output);
//        $this->getContainer()->get('mutum.migration.manager.mangopay')->execute($output);
        $this->getContainer()->get('mutum.migration.manager.notification_cat')->execute($output);
        $this->getContainer()->get('mutum.migration.manager.notification_mail')->execute($output);
        $this->getContainer()->get('mutum.migration.manager.request_status')->execute($output);
        $this->getContainer()->get('mutum.migration.manager.word')->execute($output);

        $this->getContainer()->get('mutum.migration.manager.user')->execute($output);
        $this->getContainer()->get('mutum.migration.manager.product')->execute($output);

        $this->getContainer()->get('mutum.migration.manager.contact')->execute($output);
        $this->getContainer()->get('mutum.migration.manager.request')->execute($output); // a finir
//        $this->getContainer()->get('mutum.migration.manager.research')->execute($output);
        $this->getContainer()->get('mutum.migration.manager.sponsor')->execute($output);
        $this->getContainer()->get('mutum.migration.manager.sponsor_unsub')->execute($output);

        $this->getContainer()->get('mutum.migration.manager.transaction')->execute($output);
    }

    /**
     * @throws \Exception
     */
    private function dropDB()
    {
        $app = $this->getApplication();
        $app->setAutoExit(false);

        $arguments = array(
            'command' => 'doctrine:database:drop',
            '--force' => true,
            '--connection' => 'v2',
        );
        $input = new ArrayInput($arguments);
        $output = new ConsoleOutput();
        $app->run($input, $output);
    }

    /**
     * @throws \Exception
     */
    private function createDB()
    {
        $app = $this->getApplication();
        $arguments = array(
            'command' => 'doctrine:database:create',
            '--connection' => 'v2',
        );
        $input = new ArrayInput($arguments);
        $output = new ConsoleOutput();
        $app->run($input, $output);
    }

    /**
     * @throws \Exception
     */
    private function schemaV1Update()
    {
        $app = $this->getApplication();
        $arguments = array(
            'command' => 'doctrine:schema:update',
            '--force' => true,
            '--em' => 'v1',
        );
        $input = new ArrayInput($arguments);
        $output = new ConsoleOutput();
        $app->run($input, $output);
    }

    /**
     * @throws \Exception
     */
    private function schemaV2Update()
    {
        $app = $this->getApplication();
        $arguments = array(
            'command' => 'doctrine:schema:update',
            '--force' => true,
            '--em' => 'v2',
        );
        $input = new ArrayInput($arguments);
        $output = new ConsoleOutput();
        $app->run($input, $output);
    }

    /**
     * @throws \Exception
     */
    private function fixturesLoad()
    {
        $app = $this->getApplication();
        $arguments = array(
            'command' => 'doctrine:fixtures:load',
            '--no-interaction' => true,
            '--em' => 'v2',
        );
        $input = new ArrayInput($arguments);
        $output = new ConsoleOutput();
        $app->run($input, $output);
    }

    private function cleanDB()
    {
        $app = $this->getApplication();
        $arguments = array(
            'command' => 'doctrine:migrations:migrate',
            '--no-interaction' => true,
            '--em' => 'v2',
        );

        $input = new ArrayInput($arguments);
        $output = new ConsoleOutput();
        $app->run($input, $output);
    }
}