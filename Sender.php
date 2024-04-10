<?php

declare(strict_types=1);

namespace App;

abstract class Sender
{

    /**
     * @param array $data
     * @return int
     */
    abstract public function send(array $data): int;
}