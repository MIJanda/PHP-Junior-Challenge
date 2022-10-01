Intro
-----

This is a small application to attempt the PHP Junior Challenge.

### Installing Dependencies 
Run:

`$ composer install`

This will install all the dependencies associated with the project

### Running the application
Run:

`$ php src/MinMaxSum.php`

To run MinMaxSum.

Or:

`$ php src/CamelCase.php`

To run CamelCase.

### Running the unit tests

Make sure you have PHPUnit installed. 

When PHPUnit is installed, run:

`$ alias pu="php vendor/bin/phpunit"`

To create an alias to ease execution of phpunit then run:

`$ pu`

This will run all the test suites.

To run individual test suites:

`$ pu <TestDirectory>`

For example:

`$ pu tests/CamelCaseTest.php`

To run the CamelCaseTest suite.

To run specific test run:

`$ pu <TestDirectory> --filter <TestCase>`

For example:

`$ pu tests/MinMaxSumTest.php --filter testSortArray`
