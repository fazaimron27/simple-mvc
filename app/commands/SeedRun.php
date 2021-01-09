<?php

namespace App\Commands;

use Phinx\Console\Command\SeedRun as Seed;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class SeedRun extends Command
{
    protected function configure()
    {
        $this->setName('seed:run')
            ->setDescription('Phinx Run Seeder')
            ->setHelp('This command to run seeder');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $command = new Seed();

        $arguments = [
            '--environment'   => 'development',
            '--configuration' => '.\app\config\phinx.php'
        ];

        $input = new ArrayInput($arguments);
        $returnCode = $command->run(new ArrayInput($arguments), $output);

        return $returnCode;
    }
}
