<?php
include 'link.php';
if(isset($_SESSION['tmid'])){
    unset($_SESSION['tmid']);
    header('location:it_team_login.php');
}else{
    
}
