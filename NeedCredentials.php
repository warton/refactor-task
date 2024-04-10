<?php

declare(strict_types=1);

namespace App;

interface NeedCredentials
{

    /**
     * @param array $settings
     * @return void
     */
    public function setCredentials(array $settings): void;
}