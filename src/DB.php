<?php


class DB
{
    public $con;

    public function __construct($user, $password, $database, $host = 'localhost') {
        $this->con = new mysqli($host, $user, $password, $database);
    }

    public function escape($value) {
        return $this->con->real_escape_string($value);
    }

    public function __destruct() {
        $this->con->close();
    }
}