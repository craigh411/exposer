<?php
namespace Exposer\Tests;

class TestClass {

	private $privateVar;

	private function privateMethod()
	{
		return "I'm private";
	}

	private function privateMethodWithParam($param1, $param2)
	{
		return $param1 . $param2;
	}
}