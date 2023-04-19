<?php

namespace App\Service\Password;

use App\Entity\User;
use App\Exception\Password\PasswordException;
use Symfony\Component\Security\Core\Encoder\UserPasswordEncoderInterface;
use Symfony\Component\Security\Core\User\UserInterface;

class EncoderService
{
    private const MINIMUN_LENGTH = 6;
    private UserPasswordEncoderInterface $userPasswordEncoder;
    public function __construct(UserPasswordEncoderInterface $userPasswordEncoder)
    {
        $this->userPasswordEncoder = $userPasswordEncoder;
    }

    /*
     * Usamos UserInterface ya que nuestra entidad User implementa UserInterface. Por lo tanto, cada vez que hagamos referencia
     * a UserInterface va a buscar todas las clases que la implementen
     */
    public function generateEncodedPassword(UserInterface $user, string $password): string
    {
        if (self::MINIMUN_LENGTH > strlen($password)) {
            throw PasswordException::invalidLength();
        }

        return $this->userPasswordEncoder->encodePassword($user, $password);
    }

    public function isValidPassword(User $user, string $oldPassword): bool
    {
        return $this->userPasswordEncoder->isPasswordValid($user, $oldPassword);
    }
}
