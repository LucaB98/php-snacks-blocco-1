<?php
$name = $_GET['name'] ?? '';
$age = $_GET['age'] ?? '';
$email = $_GET['email'] ?? '';

if(strlen($name) <= 4 || stripos($email,'. @') !== false || is_nan($age)){
    echo 'Accesso eseguito';
}else{
    echo 'Accesso negato';
}