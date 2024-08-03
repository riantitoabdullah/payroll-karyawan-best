<?php

$host = 'localhost';
$user = 'root';
$password = '';
$database = 'Four_Best_Synergy';

$connection = mysqli_connect($host, $user, $password);
if ($connection) {
    $open = mysqli_select_db($connection, $database);
    // echo "Database Connection";
    if (!$open) {
        echo "Sorry Database not Connected";
    }
} else {
    echo "Mysql not Connected";
}
