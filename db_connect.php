<?php
$servername= "localhost";
$username = "root";
$password = "1234";
$db_name = "sistemalogin";

$connect = mysqli_connect($servername, $username, $password, $db_name);

if(mysqli_connect_error()):
    echo "Falha na conexão com  o Banco de dados :" .mysqli_connect_error();
endif;