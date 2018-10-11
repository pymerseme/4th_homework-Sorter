<?php
/**
 * Created by PhpStorm.
 * User: pymerseme
 * Date: 08.10.18
 * Time: 17:00
 */

namespace App;

class AscKeyMethod implements SorterInterface
    {
        public function sort(array $data): array
        {
            \ksort($data);
            return $data;
        }
    }
