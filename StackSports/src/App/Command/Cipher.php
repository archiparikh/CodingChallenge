<?php
namespace App\Command;

use App\Cipher\CipherConstant;
use App\Cipher\CipherProvider;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Command\Command;

/**
 * 
 */
class Cipher extends Command
{
    protected function configure()
    {
        $this->setDescription('CipherProvider Data');
        $this->addArgument('input-file', InputOption::VALUE_REQUIRED, 'input file path');
        $this->addArgument('cipher-mode', InputOption::VALUE_REQUIRED, 'decide cipher mode', CipherConstant::ENCRYPTION);
        $this->addOption('cipher-complexity', 'c',InputOption::VALUE_REQUIRED, 'decide cipher complexity', CipherConstant::SIMPLE);

        $this->setHelp(<<<EOF
The <info>%command.name%</info> command accepts an input file and outputs the encrypted/decrypted data

Example:
    <info>php %command.full_name% source/file/name encrypt</info>
EOF
       );
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $file = $input->getArgument('input-file');
        if (! $file || ! realpath($file)) {
            $output->writeln("Input file not found");
            return 1;
        }

        $cipherMode = $input->getArgument('cipher-mode');
        if (!in_array($cipherMode, CipherConstant::CIPHER_MODE)) {
            $output->writeln("CipherProvider mode invalid.");
            return 1;
        }

        $cipherComplexity = $input->getOption('cipher-complexity');
        if (!in_array($cipherComplexity, CipherConstant::CIPHER_COMPLEXITY)) {
            $output->writeln("CipherProvider complexity not supported.");
            return 1;
        }

        $output->writeln("Starting $cipherMode: ".$file);

        try {
            $cipherData = (new CipherProvider($file, $cipherMode, $cipherComplexity))->cipher();
        }
        catch(\Exception $e) {
            $cipherData = $e->getMessage();
        }

        $output->writeln($cipherData);
        
        return 0;
    }
}
