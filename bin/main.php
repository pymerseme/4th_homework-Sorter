#!/usr/bin/php
<?php
/**
 * Created by PhpStorm.
 * User: pymerseme
 * Date: 08.10.18
 * Time: 17:09
 */

use App\{Sorter, AscMethod, DesMethod, AscKeyMethod, DesKeyMethod, NullMethod};

require_once __DIR__ . '/../vendor/autoload.php';

$numbers = [1, 4, 5, 7, 8, 2, 6, 3];
$strings = ["apples", "strawberries", "babanas", "oranges", "lemons"];

$sorted_numbers = new Sorter($numbers, new NullMethod);

$sorted_numbers->sorting();
echo $sorted_numbers . \PHP_EOL;

$sorted_numbers->setMethod(new AscMethod);
echo $sorted_numbers . \PHP_EOL;
$sorted_numbers->sorting();
echo $sorted_numbers . \PHP_EOL;

$sorted_numbers->setMethod(new DesMethod);
echo $sorted_numbers . \PHP_EOL;
