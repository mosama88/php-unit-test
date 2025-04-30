<?php

declare(strict_types=1);

use PhpUnitTest\Src\Email;
use PHPUnit\Framework\TestCase;

final class EmailTest extends TestCase
{
    public function testCanBeCreatedFromValidEmail(): void
    {
        //AAA
        // Arrange: إعداد البيانات
        $string = 'mosama@gmail.com';

        // Act: تنفيذ العملية
        $email = Email::fromString($string);

        // Assert: التحقق من النتيجة
        $this->assertSame($string, $email->asString());
    }

    public function testCannotBeCreatedFromInvalidEmail(): void
    {
        $this->expectException(InvalidArgumentException::class);
        Email::fromString('invalid');

    }
}