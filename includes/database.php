<?php

$db = mysqli_connect('localhost','root','root','eventos');

if(!$db) {
    echo "Hubo un error";
    exit;
}