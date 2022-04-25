<?php
session_start();
$x="mysql:dbname=it_support_desk;hostname=localhost";
$user="root";
$pwd="";
$connection=new PDO($x,$user,$pwd,array(PDO::ATTR_AUTOCOMMIT=>false));