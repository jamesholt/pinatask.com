<?php
//We start sessions
session_start();

/******************************************************
------------------Required Configuration---------------
Please edit the following variables so the members area
can work correctly.
******************************************************/

//We log into the database
$mysql = new PDO('mysql:host=pdb3.awardspace.net;port=3306;dbname=2010064_4fac', $user='2010064_4fac', $password='Thincli1nt1');

//Webmaster Email
$mail_webmaster = 'info@pinatask.com';

//Top site root URL
$url_root = 'http://www.pinatask.com/';

/******************************************************
-----------------Optional Configuration----------------
******************************************************/

//Home page file name
$url_home = 'index.php';

//Design Name
$design = 'default';
?>