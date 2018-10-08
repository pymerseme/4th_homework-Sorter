<?php
/**
 * Created by PhpStorm.
 * User: pymerseme
 * Date: 08.10.18
 * Time: 17:07
 */

namespace App;

class DesMethod extends Sorter
    {
        public function sort()
        {
            \arsort($this->data);
            return $this->data;
        }
    }
