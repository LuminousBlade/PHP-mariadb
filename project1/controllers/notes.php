<?php

$config = require('config.php');
$db = new Database($config['database']);

$heading = "Notes";

$notes = [];
dd($db);

require "view/notesView.php";
