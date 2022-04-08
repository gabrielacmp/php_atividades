<?php

define("HOSTNAME","localhost");
define("USERNAME","root");
define("PASSWORD","");
define("SCHEMA","prolp");

function getConnection(){
    $key = "strval";
    $con = new PDO("mysql:host={$key(HOSTNAME)};dbname={$key(SCHEMA)}", USERNAME, PASSWORD);
    $con ->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    return $con;
}