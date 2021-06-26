<?php

declare(strict_types=1);

namespace App;

interface SenderInterface
{
    public function setCredentials(array $settings);

    public function send(array $data);

    public function get($leadId): array;
}
