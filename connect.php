<?php

$conn = new mysqli('localhost', 'root', '', 'expandxdb1');

if($conn->connect_error){
    echo("error");
} 
?>