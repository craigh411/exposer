
# Class Exposer

### Access a PHP Classes Private & Protected Methods & Properties

## What?

PHP class to expose private and protected methods and properties

## Why?

Useful for testing private and protected methods in a class.

## Usage

```
// Use the Exposer namespace
use Exposer;
// Include the ClassExposer Class
require_once 'ClassExposer.php';
// Pass an object instance in to the ClassExposer
$myExposedClass = new ClassExposer(new MyClass());

// Access all methods and properties as normal
$myExposedClass->myPrivateMethod();
$myExposedClass->myPrivateProperty = "foo";
echo $myExposedClass->myPrivateProperty;
```