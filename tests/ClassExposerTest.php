<?php
namespace Exposer\Tests;

use Exposer\ClassExposer;
use PHPUnit_Framework_TestCase;

class ClassExposerTest extends PHPUnit_Framework_TestCase {

	/**
	 * @test
	 */
	public function it_calls_a_private_method_on_reflected_class()
	{
		$testClass = new ClassExposer(new TestClass());
		$val = $testClass->privateMethod();
		$this->assertEquals("I'm private", $val);
	}

	/**
	 * @test
	 */
	public function it_calls_a_private_method_with_param_on_reflected_class()
	{
		$testClass = new ClassExposer(new TestClass());
		$val = $testClass->privateMethodWithParam("foo", "bar");
		$this->assertEquals("foobar", $val);
	}

	/**
	 * @test
	 */
	public function it_sets_a_private_property_on_reflected_class()
	{
		$testClass = new ClassExposer(new TestClass());
		$testClass->privateVar = "foo";
		$this->assertEquals("foo", $testClass->privateVar);
	}

	/**
	 * @test
	 */
	public function it_gets_a_private_property_on_reflected_class()
	{
		$testClass = new ClassExposer(new TestClass());
		$this->assertEquals(null, $testClass->privateVar);
	}

	/**
	 * @test
	 */
	public function it_checks_that_class_is_instance_of_ClassExposer()
	{
		$testClass = new ClassExposer(new TestClass());
		$isInstance = ($testClass instanceof ClassExposer) ? true : false;
		$this->assertTrue($isInstance);
	}
}