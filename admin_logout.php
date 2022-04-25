<?php
include 'link.php';
if(isset($_SESSION['admid'])){
    unset($_SESSION['admid']);
    header('location:admin_login.php');
}else{
    
}