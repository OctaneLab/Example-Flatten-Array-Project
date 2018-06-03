VML Task
====

## Getting Started ##
Project is not based on any framework. 
All components has been built only for the task purposes, 
yet may be used externally as well.
```
./components/OArray
./components/OTxt
./components/Exceptions/OException
```
```
./interfaces/DisplayInterface
```
```
./traits/DisplayTextTrait
./traits/DisplayArrayTrait
./traits/FlattenArrayTrait
```
To run this app (e.g.) simply place all files 
in your project folder and run index.php.
If you use xampp - place project 
in a new dir named (e.g.) __*vml_task*__ within xampp 
directory and go to __*http://localhost/vml_task/*__ page 
while running Apache (or equivalent if you've messed up with hosts).
If not - [Uncle Google](https://www.google.pl/search?ei=KZKyWtDSJeyk6ATjyqLwBg&q=How+to+run+PHP+program+in+XAMPP&oq=How+to+run+PHP+program+in+XAMPP&gs_l=psy-ab.3..0i7i30i19k1l3j0i19k1l5j0i30i19k1j0i8i30i19k1.5956.6412.0.6685.2.2.0.0.0.0.96.178.2.2.0....0...1c.1.64.psy-ab..0.2.177....0.wCz2ezznMjc)
 may be helpful :)
 
## App ##
Main file which will show the before and after:
```
index.php
```
It only shows the given example.

## Vendors for Unit tests ##
Assuming composer has been installed in order to 
obtain PHPUnit vendor you need to eiher run 
(not included within this project 
vendor direcory):
```
composer update
```
..or to be able to download vendor and create 
your own composer file and run:
 ```
composer require --dev phpunit/phpunit ^4
 ```
 
 ## Unit tests itself ##
 
 PHPUnit tests are run by:
 ```
 phpunit --bootstrap <autoload file> <testing class>
 ```
In this case tests is extended by OUnitTest class (which is stored in ./test/ directory) 
and to be able to run tests you have to use e.g.:
 
```
phpunit --bootstrap ./vendor/autoload.php ./tests/OUnitTest
```
Running above will fire a test
which will bring a result of (e.g.):
```
PHPUnit 4.0.0 by Sebastian Bergmann.
..

Time: 33 ms, Memory: 4.00MB

OK (5 tests, 5 assertions)


```
-------------
 
**If you have any problems with installing vendors,
copy code below and paste it into your composer.json file 
in your project directory:**
 
```
{
    "require-dev": {
        "phpunit/phpunit": "4"
    }
}

```
  
**REMEMBER - VENDOR DIR IS EMPTY UNTIL 
YOU UPDATE THE COMPOSER**

If it doesn't work - google how to use composer,
 vendors and test code with PHPUnit.

Tested both on Windows (10) and Linux (Elementary Loki).
## Author ##

[Joanna Kostek](https://www.linkedin.com/in/joanna-kostek-981732104/)
[@](mailto::kostekjo@gmail.com)



