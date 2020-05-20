<?php

namespace App;

use Acme\Test;
use PDO;
use PDOException;

class Student
{
    public function __construct(Record $record, Test $test)
    {
        try {
            $db = new PDO();
        } catch (PDOException $ex) {
            throw $ex->getMessage();
        }
        var_dump('inside App namespace');
    }
}
