<?php

declare(strict_types=1);

namespace App;

use InvalidArgumentException;

/**
 * Class CrmManager
 * @package App
 */
class CrmManager
{

    /**
     * @var Sender|BazSender
     */
    private Sender $sender;

    /**
     * @var array
     */
    private array $settings;

    /**
     * @param array $settings
     */
    public function __construct(array $settings)
    {
        if (empty($settings['sender'])) {
            throw new InvalidArgumentException('Sender must be set!');
        }

        $this->sender = SenderFactory::make($settings['sender'], $settings);
    }

    /**
     * Sends the person to a crm
     *
     * @param array $clientEntity
     * @return int
     */
    public function sendPerson(array $clientEntity): int
    {
        return $this->sender->send($clientEntity);
    }
}
