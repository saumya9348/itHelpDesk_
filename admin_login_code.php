<?php
include 'link.php';
$cmd2="select * from admin where admin_username = '".$_POST['lginunme']."' and admin_pw = '".$_POST['loginpw']."' ";
$qry2=$connection->query($cmd2);
$id=0;
foreach($qry2 as $v2){
    $id=$v2['admin_id'];
}
if($id > 0){
    $_SESSION['admid']=$id;
    header('location:department_name.php');
}else{
    header('location:admin_login.php');
    $_SESSION['msg']="Please enter correct id and pw";
    session_write_close();
}