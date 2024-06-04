<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = "Notes";

$id = $_GET['id'];
$notes = $db->query('select * from notes where user_id = 3')->fetchAll();

require "view/notesView.php";
