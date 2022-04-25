<?php
include 'link.php';
if(isset($_SESSION['admid'])){

}else{
    header('location:admin_login.php');
}