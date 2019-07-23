<?php
/**
 * @copyright Copyright (c) 2017, StoneEagle.com
 */

ini_set('display_errors', 1);

require_once __DIR__ . '/vendor/autoload.php';

$application = new Symfony\Component\Console\Application();

$application->add(new App\Command\DataConvert('data-convert'));
$application->add(new App\Command\Cipher('cipher'));

$application->run();