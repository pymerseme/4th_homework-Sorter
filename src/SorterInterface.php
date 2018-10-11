<?php
/**
 * Created by PhpStorm.
 * User: pymerseme
 * Date: 11.10.18
 * Time: 17:11
 */

namespace App;

interface SorterInterface
{
    public function sort(array $data): array;
}