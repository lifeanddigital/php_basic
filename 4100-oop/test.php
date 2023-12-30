<?php
require 'DB.php';
$db = DB::connect('mysql://testuser:testpass@localhost/booksample');
var_dump($db);
