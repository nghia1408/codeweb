<?php
    $host = 'localhost';
    $dbname = 'demo_mvc';
    $username = 'root';
    $password = '';

    class DB
    {
        private static $instance = NULl;
        public static function getInstance() {
            if (!isset(self::$instance)) {
                try {
                    self::$instance = new PDO('mysql:host=$host;dbname=$dbname', $username, $password);
                    self::$instance->exec("SET NAMES 'utf8'");
                } catch (PDOException $ex) {
                    die($ex->getMessage());
                }
            }
            return self::$instance;
        }
    }


    
