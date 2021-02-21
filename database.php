<?php

class Database
{

    protected $db;

    public function __construct()
    {
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=bildirisistem;charset=utf8', 'bildirisistem', 'Fat3591441');
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->db->setAttribute(PDO::MYSQL_ATTR_INIT_COMMAND, "SET NAMES 'utf8',SET CHARSET 'utf8'"); 
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

}