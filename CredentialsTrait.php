<?php

declare(strict_types=1);

namespace App;

use InvalidArgumentException;

trait CredentialsTrait
{

    /**
     * @var string
     */
    private string $username;

    /**
     * @var string
     */
    private string $password;

    /**
     * @param array $settings
     * @return void
     */
    public function setCredentials(array $settings): void
    {
        if (empty($settings['user'])) {
            throw new InvalidArgumentException('User must be set!');
        }

        if (empty($settings['passwd'])) {
            throw new InvalidArgumentException('Password must be set!');
        }
        $this->username = $settings['user'];
        $this->password = $settings['passwd'];
    }
}