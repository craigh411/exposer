
# Access a PHP Classes Private & Protected Methods & Properties


## Why?

Useful for testing private and protected methods in a class.

## Usage

```
// Include the ClassExposer Class
require_once 'ClassExposer.php';
// Pass an object instance in to the ClassExposer
$myExposedClass = new Exposer\ClassExposer(new MyClass());

// Access all methods and properties as normal
$myExposedClass->myPrivateMethod();
$myExposedClass->myPrivateProperty = "foo";
echo $myExposedClass->myPrivateProperty;
```