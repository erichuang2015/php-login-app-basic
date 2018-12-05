<?php
/* Database connection settings */
$host = '127.0.0.1';
$user = 'fandressouza';
$pass = '';
$db = 'account';
$mysqli = new mysqli($host,$user,$pass,$db) or die($mysqli->error);
