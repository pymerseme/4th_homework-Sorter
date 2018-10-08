<?php
/**
 * Created by PhpStorm.
 * User: pymerseme
 * Date: 08.10.18
 * Time: 16:44
 */

namespace App;

abstract class Sorter
{
    protected $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    abstract public function sort();
}
