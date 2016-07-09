<?php

namespace App\CommandBus\Command\User;

/**
 * Class Register
 * @package App\CommandBus\Command\User
 * @author Petr Pliska <petr.pliska@post.cz>
 */
class Register
{
    /**
     * @var string
     */
    protected $emailAddress;

    /**
     * @var string
     */
    protected $password;

    /**
     * @param string $emailAddress
     * @param string $password
     */
    public function __construct(string $emailAddress, string $password)
    {
        $this->emailAddress = $emailAddress;
        $this->password = $password;
    }

    /**
     * @return string
     */
    public function getEmailAddress(): string
    {
        return $this->emailAddress;
    }
}
