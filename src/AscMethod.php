<?php
/**
 * Created by PhpStorm.
 * User: pymerseme
 * Date: 08.10.18
 * Time: 17:00
 */

namespace App;

class AscMethod implements SorterInterface
    {
        public function sort(array $data): array
        {
            \sort($data);
            return $data;
        }
    }
