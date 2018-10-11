<?php
/**
 * Created by PhpStorm.
 * User: pymerseme
 * Date: 11.10.18
 * Time: 17:19
 */

namespace App;

class NullMethod implements SorterInterface
{
    public function sort(array $data): array
    {
        return $data;
    }
}