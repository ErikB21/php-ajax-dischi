<?php

include __DIR__ . '/../database.php';//includo il file php in cui si trova il mio oggetto

header("Content-Type: application/json");//cambio l'intestazione dell'header per passare il file come json

echo json_encode($database);

?>