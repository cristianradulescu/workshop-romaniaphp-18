# Test-Driven Applications
## Sebastian Bergmann, Arne Blankerts, Stefan Priebsch
### Workshop on June 21, 2018 at RomaniaPHP

> Implementing the business logic of your application in the object-oriented fashion requires more than knowing your favorite framework inside out and extending a controller base class. Avoiding tight coupling to the framework and hidden dependencies, we will develop business logic in a decoupled, fully tested and extensible way. Following the domain-driven design approach and test-driven development principles, we will develop a fully tested application.
>
> Most of the day, attendees will work in groups that are individually coached by the trainers. As we progress from understanding and documenting requirements to writing unit tests and working production code, we might even feel inclined to make use of some modern concepts like Command Query Responsibility Segregation (CQRS) and Event Sourcing.
>
> Please bring a laptop with PHP 7.2 and PHPUnit 7.2, and a decent IDE. We will need no web server, so please make sure that you can run PHP at the command line, and are able to execute tests with PHPUnit. We will need to frameworks or other third-party code.

Code written for/during the "Test-Driven Applications" workshop at RomaniaPHP 2018.

This is example code that is not production-ready. It is intended for studying and learning purposes.

#### Generating the autoloader

```
$ ./tools/phpab -o src/autoload.php src
```

#### Running the tests

```
$ ./tools/phpunit.phar
```

(c) 2018 thePHP.cc. All rights reserved.
