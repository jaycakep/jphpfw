<?php
require './libs/rb.php';

R::setup( 'mysql:host=localhost;dbname=dbname',
        'root', '' );

if(!R::testConnection()) die('No DB connection!');
?>
