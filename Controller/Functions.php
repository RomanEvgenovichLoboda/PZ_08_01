<?php
include '../Model/Note.php';

function SellectAll(){
    $conn = new mysqli("localhost","root","","mydb1");
    if($conn->connect_error){
        echo 'Error';
    }
    else{
        echo 'Ok';
    }
    $sql_code = "SELECT * FROM noets";
    $results = $conn->query($sql_code);
    return $results;
}