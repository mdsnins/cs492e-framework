<?php

class DB {
    $DB_HOST = "localhost";
    $DB_PORT = 3306;
    $DB_USER = "csweb";
    $DB_USER_PW = "c5w3b";
    $DB_NAME = "webhacking";

    public static function connect() {
        global $DB_HOST, $DB_PORT, $DB_USER, $DB_USER_PW, $DB_NAME;
        $conn = mysqli_connect($DB_HOST, $DB_USER, $DB_USER_PW, $DB_NAME, $DB_PORT);
        return $conn;
    }

    public static function close($conn) {
        $conn->close();
        return;
    }
}