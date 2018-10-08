#!/usr/bin/php
<?php
/**
 * Created by PhpStorm.
 * User: pymerseme
 * Date: 08.10.18
 * Time: 17:09
 */

use App\AscMethod;
use App\DesMethod;

require_once __DIR__ . '/../vendor/autoload.php';

$numbers = [1, 4, 5, 7, 8, 2, 6, 3];
$strings = ["apples", "strawberries", "babanas", "oranges", "lemons"];

$ascSortedNumbers = new AscMethod($numbers);
$desSortedNumbers = new DesMethod($numbers);

$ascSortedStrings = new AscMethod($strings);
$desSortedStrings = new DesMethod($strings);

\var_dump($ascSortedNumbers->sort());
\var_dump($desSortedNumbers->sort());

\var_dump($ascSortedStrings->sort());
\var_dump($desSortedStrings->sort());
