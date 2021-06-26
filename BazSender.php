<?php

declare(strict_types=1);

namespace App;

class BazSender implements SenderInterface
{
    public $settings;

    public function setCredentials(array $settings)
    {
        $this->settings = $settings;
    }

    public function send(array $data)
    {
        //@todo Implement logic here for send a lead to the Baz crm
    }

    public function get($leadId): array
    {
        //@todo Implement logic here

        return [];
    }
}
