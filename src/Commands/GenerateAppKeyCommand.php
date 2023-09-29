<?php

namespace Goldfinch\Recipe\Commands;

use Goldfinch\Taz\Console\GeneratorCommand;
use Goldfinch\Taz\Services\InputOutput;
use Symfony\Component\Console\Command\Command;

#[AsCommand(name: 'app:generate-key')]
class GenerateAppKeyCommand extends GeneratorCommand
{
    protected static $defaultName = 'app:generate-key';

    protected $description = 'Generate APP key';

    protected function execute($input, $output): int
    {
        // parent::execute($input, $output);

        $key = substr(base64_encode(random_bytes(32)), 0, 32) . "\n";

        $io = new InputOutput($input, $output);
        $io->text($key);

        return Command::SUCCESS;
    }
}
