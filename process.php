<?php

$query = $_POST['query'];
$response = 'No te he entendido';

if ($query === 'hola') {
  $response = 'Hola caracola';
}

echo $response;