<?php

abstract class Connection {

    protected function connectDB() {
        try {
            return $connect = new PDO("mysql:host=localhost;dbname=RA211512755", "root", "");
        } catch(PDOException $e) {
            return $e->getMessage();
        }
    }


   
}


