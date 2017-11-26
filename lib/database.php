<?php
/**
 * Created by PhpStorm.
 * User: pdutie94
 * Date: 25/11/2017
 * Time: 20:09
 */

include('../config.php');

class Database
{
    private static $sql;
    public static $conn;
    private static $cursor;
    public static function connection()
    {
        try {
            self::$conn = new PDO("mysql:host=".DBHOST.";dbname=".DBNAME, DBUSER, DBPASSWORD);
            self::$conn->query('set names "utf8"');
        } catch(PDOException $e) {
            print "Error!: " . $e->getMessage() . "<br/>";
            die();
        }
    }

    public static function getAllRows($table) {
        self::$sql = "SELECT * FROM $table";
        self::$cursor = self::$conn->prepare(self::$sql);
        self::$cursor->execute();
        $result = self::$cursor->fetchAll(PDO::FETCH_ASSOC);
        self::$cursor->closeCursor();
        return $result;
    }

    public static function deleteRow($table, $column, $value) {
        self::$sql = "DELETE FROM $table WHERE $column = :value";
        self::$cursor = self::$conn->prepare(self::$sql);
        self::$cursor->bindParam(':value', $value);
        self::$cursor->execute();
        self::$cursor->closeCursor();
    }

    public static function editRow($table, $options= array(), $column, $value) {
        $i = 0;
        self::$sql = "UPDATE post SET (";
        foreach($options as $option) {
            foreach($option as $column => $value) {
                if(++$i === count($option)) {
                    self::$sql .= $column . '=' . $value;
                } else {
                    self::$sql .= $column . '=' . $value.',';
                }
            }
        }
        self::$sql .= ") WHERE $column = $value";
        self::$cursor = self::$conn->prepare(self::$sql);
        self::$cursor->execute();
        self::$cursor->closeCursor();
    }

    public static function getRowData($table, $column, $value) {
        self::$sql = "SELECT * FROM $table WHERE $column = $value";
        self::$cursor = self::$conn->prepare(self::$sql);
        self::$cursor->execute();
        $result = self::$cursor->fetch(PDO::FETCH_ASSOC);
        self::$cursor->closeCursor();
        return $result;
    }
}