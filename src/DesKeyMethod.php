<?php
/**
 * Created by PhpStorm.
 * User: pymerseme
 * Date: 08.10.18
 * Time: 17:07
 */

namespace App;

class DesKeyMethod implements SorterInterface
    {
        public function sort(array $data): array
        {
            \krsort($data);
            return $data;
        }
    }
