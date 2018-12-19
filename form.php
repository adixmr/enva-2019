<?php

$event = $_POST['event']; // event name
$json = json_decode(file_get_contents('./db.json'),1); // decodes the exisiting JSON file into an array
$json[$event][count($json[$event])] = $_POST; // adds the POST data to $json->eventName->(n+1) where n = exisiting participants of an event
file_put_contents('./db.json',json_encode($json)); // writes JSON back to the file

?>
