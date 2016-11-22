# SLK581
This project generates SLK581 Codes. More info on SLK581 codes can be found [here](https://ataps-mds.com/mds/user-documentation/slk/). More detailed notes on the specification can be found [here](http://meteor.aihw.gov.au/content/index.phtml/itemId/349510).

### Install
`composer require tohmua/SLK581`

### Use
```PHP
$slk581 = new SLK581\SLK581();

$slk581->generate(
    $firstName   = 'firstname',
    $lastName    = 'lastname',
    $dateOfBirth = '11/11/2016', // must be formatted dd/mm/yyyy
    $gender      = 2             // see documentation or 'src/Fields/Interfaces/Gender.php' for gender codes
); // ASNIR111120162
```

### Errors
`generate()` method returns a string of a valid SLK581 code on success or `FLASE` on Failure.

To get the error message you can call the `errorMessage()` method.

```PHP
$slk581 = new SLK581\SLK581();

$slk581->generate(
    $firstName   = 'firstname',
    $lastName    = 'lastname',
    $dateOfBirth = '',
    $gender      = 2
); // (bool) FALSE

$slk581->errorMessage(); //SLK581 Error: No Date of Birth supplied. This is required.
```

### Tests
To run: `composer test`

The code coverage report can be found in tests/_output however this is git ignored but it will be generated automatically for you when you run the test suite.
