<?php

declare(strict_types=1);

namespace App;

class SenderFactory
{
    /**
     * @param string $class
     * @param array $settings
     * @return Sender
     */
    public static function make(string $class, array $settings): Sender
    {
        $sender = new $class($settings);

        if ($sender instanceof NeedCredentials) {
            $sender->setCredentials($settings);
        }

        return $sender;
    }
}