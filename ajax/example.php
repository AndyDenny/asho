<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/functions.php";
use classes\Validator;

$sData = new Validator($_POST['dataInput'])->isValidInputString();
echo "<pre>";
var_dump($sData) ;
echo "</pre>";
