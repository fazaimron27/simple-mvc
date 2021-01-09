<?php

namespace App\Commands;

use Phinx\Console\PhinxApplication;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class RollbackCommand extends Command
{
    protected function configure()
    {
        $this->setName('rollback')
            ->setDescription('Phinx rollback')
            ->setHelp('This command run migration rollback');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $phinx = new PhinxApplication();
        $command = $phinx->find('rollback');

        $arguments = [
            'command'         => 'rollback',
            '--environment'   => 'development',
            '--configuration' => '.\app\config\phinx.php'
        ];

        $input = new ArrayInput($arguments);
        $returnCode = $command->run(new ArrayInput($arguments), $output);

        return $returnCode;
    }
}
