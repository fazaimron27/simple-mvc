<?php

namespace App\Commands;

use Phinx\Console\PhinxApplication;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class MigrateCommand extends Command
{
    protected function configure()
    {
        $this->setName('migrate')
            ->setDescription('Phinx Migrate')
            ->setHelp('This command run migration');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $phinx = new PhinxApplication();
        $command = $phinx->find('migrate');

        $arguments = [
            'command'         => 'migrate',
            '--environment'   => 'development',
            '--configuration' => '.\app\config\phinx.php'
        ];

        $input = new ArrayInput($arguments);
        $returnCode = $command->run(new ArrayInput($arguments), $output);

        return $returnCode;
    }
}
