<?php
require_once "settings.php";

class Controller
{
    static function SubmitQuery($query)
    {
        $mysqli = new mysqli(host, user, pass, db);

        if ($mysqli->connect_errno) {
            echo "Не удалось подключиться к MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
        }
        if($query!="") {
            $res = $mysqli->query($query);
            if ($res) {
                $row = $res->fetch_all();
                return $row;
            }
        }
        return false;
    }
}