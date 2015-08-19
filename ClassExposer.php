<?php
namespace Exposer;

use ReflectionClass;

/**
 * Class ClassExposer
 * @package Expose
 *
 * Exposes private and protected class methods and properties.
 *
 * Makes all class methods and properties accessible on the given class instance.
 *
 */
class ClassExposer {

	private $reflector;
	private $obj;

	/**
	 * Takes an object instance and returns an instance of ClassExposer
	 *
	 * @param $obj
	 * @return ClassExposer
	 */
	public function __construct($obj)
	{
		$this->obj = $obj;
		$this->reflector = new ReflectionClass($obj);

		return $this;
	}

	/**
	 * Maps the called method to the method of the given instance.
	 *
	 * @param $method
	 * @param $args
	 * @return mixed
	 */
	public function __call($method, $args)
	{
		$method = $this->reflector->getMethod($method);
		$method->setAccessible(true);
		return $method->invokeArgs($this->obj, $args);
	}

	/**
	 * Returns the property value of the given property
	 *
	 * @param $name
	 * @return mixed
	 */
	public function __get($name)
	{
		$property = $this->reflector->getProperty($name);
		$property->setAccessible(true);

		return $property->getValue($this->obj);
	}

	/**
	 * Sets the value of the given property
	 *
	 * @param $name
	 * @param $val
	 */
	public function __set($name, $val)
	{
		$property = $this->reflector->getProperty($name);
		$property->setAccessible(true);
		$property->setValue($this->obj, $val);
	}
}