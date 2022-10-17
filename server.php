<?php
$_POST = json_decode(file_get_contents("php://input"), true); //PHP код получает JSON
echo var_dump($_POST);