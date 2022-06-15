<?php

include 'Connection.php';

$connection = new Connection();
$teste = $connection->get_conn();

$connection->insert_in_db($teste);



?>