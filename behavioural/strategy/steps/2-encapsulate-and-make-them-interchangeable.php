<?php

interface Logger {
    public function log($data);
}

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
