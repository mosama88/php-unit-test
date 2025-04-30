<?php

declare(strict_types=1);

use PhpUnitTest\Src\Email;
use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmail(): void
    {
        $string = 'mosama88@hotmail.com';

        $email = Email::fromString($string);

        $this->assertSame($string, $email->asString());
    }

    public function testCannotBeCreatedFromInvalidEmail(): void
    {
        $this->expectException(InvalidArgumentException::class);

        Email::fromString('invalid');
    }
}