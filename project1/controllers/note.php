<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = "Note";

$notes = $db->query("select * from notes where user_id= :id",['id' => $_GET['id']])->fetchAll();

require "view/notesView.php";
