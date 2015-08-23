<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Shawware\PPT\Test\FirstClass;
use Apix\Log\Logger\File;

$log = new File('/tmp/firstclass.log');

/**
 *
 * @var FirstClass the first class
 */
$fc = new FirstClass('test');

$log->info('type: ' . get_class($fc));
$log->info('name: ' . $fc->name);
$log->info('name: ' . $fc->name());
