
# Access a PHP Classes Private & Protected Methods & Properties


## Why?

Useful for testing private and protected methods in a class.

##Installation

You can simply download or copy & paste the ClassExposer.php class
and include it in your own php files.

### Composer

Also available via Composer:

`# composer require exposer/class-exposer`

Make sure you have minimum-stability set to 'dev' in your
composer.json file.

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