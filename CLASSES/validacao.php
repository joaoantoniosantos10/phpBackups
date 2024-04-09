<?php


class Validacao{

    private $name;
    private $password;

public function __construct($name, $password){
    $this->name = $name;
    $this->password = $password;
}

public function session($name){
  session_start();
  if(($_SESSION["name"] = "marata123")||$_SESSION["password"] = "marata123"){
    $_SESSION["login"] = "sim";
}}



}
?>