<?php

declare(strict_types=1);

namespace App;

use InvalidArgumentException;

class CrmManager
{
    /**
     * @var SenderInterface
     */
    private $client;

    /**
     * @var array
     */
    private $settings;

    public function __construct(array $settings)
    {
        if (empty($settings['user'])) {
            throw new InvalidArgumentException('User must be set!');
        }

        if (empty($settings['passwd'])) {
            throw new InvalidArgumentException('Password must be set!');
        }

        $this->settings = $settings;
        $this->client = new BazSender();
    }

    public function sendLead(array $clientEntity)
    {
        $this->client->setCredentials($this->settings);
        $this->client->send($clientEntity);
    }

    public function getLead(int $leadId)
    {
        $this->client->setCredentials($this->settings);
        return $this->client->get($leadId);
    }
}
