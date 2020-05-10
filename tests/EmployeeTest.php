<?php declare(strict_types=1);
use PHPUnit\Framework\TestCase;
require_once ./Employee.php;

final class EmployeeTest extends TestCase
{
    public function testCanBeCreatedFromConstructor(): void{
        $emp =  new Employee('Dries', 'Swinnen', 1001);
        $this->assertInstanceOf(
            Employee::Class,
            $emp
        );
    }

    public function testCannotBeCreatedWithInvalidId(): void
    {
        $this->expectException(InvalidArgumentException::class);

        $emp = new Employee('Dries', 'Swinnen', 5);
    }

    public function testCanGetObjectAsString(): void{
        $emp = new Employee('Maarten', 'Sourbron', 1001);

        $this->assertEquals(
            '(1001)Maarten Sourbron',
            $emp->__toString()
        );

    }

}