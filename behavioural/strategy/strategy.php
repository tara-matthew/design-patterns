<?php

/*
 * When you want to use different variants of an algorithm within an object and be able to switch from one algorithm to another during runtime
 * When you have a lot of similar classes that only differ in the way they execute some behavior
 * Use the pattern to isolate the business logic of a class from the implementation details of algorithms that may not be as important in the context of that logic.
 * Use the pattern when your class has a massive conditional statement that switches between different variants of the same algorithm.
 * can swap algorithms used inside an object at runtime.
 * can isolate the implementation details of an algorithm from the code that uses it
 * You can replace inheritance with composition
 * Open/Closed Principle. You can introduce new strategies without having to change the context
 */

// Defines a family of algorithms, encapsulates each one, makes them interchangeable

// Define a family of algorithms - task that can be executed in multiple ways

// Code to an interface
class LogToFile implements Logger {
    public function log($data) {
        var_dump('Log the data to a file');
    }
}

class LogToDatabase implements Logger {
    public function log($data) {
        var_dump('Log the data to the database');
    }
}

class LogToXWebService implements Logger {
    public function log($data) {
        var_dump('Log the data to a Saas site');
    }
}

// encapsulate and make them interchangeable - code to an interface

interface Logger {
    public function log($data);
}

$app = new App;

$app->log('Some information here', new LogToXWebService()); // can swap this out at runtime
$app->log('Some other information here', new LogToDatabase()); // can swap this out at runtime
