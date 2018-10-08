<?php
/**
 * Created by PhpStorm.
 * User: pymerseme
 * Date: 08.10.18
 * Time: 17:00
 */

namespace App;

class AscMethod extends Sorter
    {
        public function sort()
        {
            \asort($this->data);
            return $this->data;
        }
    }
