<?php

$heading = "Note";
$currentUserId = 3;

$note = $db->query("select * from notes where id = :id", [
  'id' => $_GET['id']
])->findOrFail();

authorize($note['user_id'] === $currentUserId);

require "view/notesView/showView.php";
