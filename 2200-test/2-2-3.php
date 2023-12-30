<?php

require 'MDB2.php';
$db = MDB2::connect('mysql://testuser:testpass@localhost/booksample');
$q = $db->query(
    'SELECT * FROM users LIMIT 3');
while( $row = $q->fetchRow() ) {
    print "$row[0] \t $row[1] \t $row[2]<br>";
}
