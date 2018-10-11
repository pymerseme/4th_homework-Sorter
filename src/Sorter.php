<?php
/**
 * Created by PhpStorm.
 * User: pymerseme
 * Date: 08.10.18
 * Time: 16:44
 */

namespace App;

class Sorter
{
    private $input;
    private $method;
    private $output;
    private $output_string = '';

    public function __construct(array $data, SorterInterface $method = null)
    {
        $this->input = $this->output = $data;
        $this->method = $method;
    }

    public function setMethod(SorterInterface $method)
    {
        $this->method = $method;
    }

    public function sorting(): void
    {
        if(!is_null($this->method))
            $this->output = $this->method->sort($this->output);
    }

    public function getInput(): array
    {
        return $this->input;
    }

    public function __toString(): string
    {
        foreach ($this->output as $key => $item)
            $this->output_string .= $key . ' = > ' . $item . \PHP_EOL;
        return $this->output_string;
    }
}
