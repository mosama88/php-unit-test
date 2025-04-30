<?php

declare(strict_types=1);

namespace PhpUnitTest\Src;

use InvalidArgumentException;

final class Email
{
    private string $email;

    private function __construct(string $email)
    {
        $this->ensureIsValidEmail($email);

        $this->email = $email;
    }

    public static function fromString(string $email): self
    {
        return new self($email);
    }


    // getter
    public function asString(): string
    {
        return $this->email;
    }

    private function ensureIsValidEmail(string $email): void
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            throw new InvalidArgumentException(
                sprintf(
                    '"%s" is not a valid email address',
                    $email
                )
            );
        }
    }
}

// $email = "mosama";  // مثال على بريد غير صالحtry {
// $emailTest = Email::fromString($email);

// if ($email == false) {
//     echo "$email  Email is not valid please write Valid Email";
// }

// function calc(int $a, int $b)
// {
//     return $a + $b;
// }
// echo calc(10, 15);