<?php

session_start();

$conn = mysqli_connect (
    'localhost',
    'root',
    '',
    'php_mysql_crud'
);
/* Para ver si esta conectado a la base de datos
if(isset($conn)){
    echo 'DB esta conectada';
}*/
?>