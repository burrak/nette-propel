<?php

namespace Division\Monolog;

class LoggerFactory
{
    /** @var string  */
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function create(): Monolog\Logger
    {
        return new Monolog\Logger($this->$name);
    }

}