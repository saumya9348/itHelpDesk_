<?php
include 'link.php';
include 'admin_login_verification.php';
$cmd2="update departmentname set dname=? ,status=? where did =".$_POST['dptid'];
$connection->beginTransaction();
$qry2=$connection->prepare($cmd2);
$updatedata=array($_POST['nm'],$_POST['stat']);
$updtstatus=$qry2->execute($updatedata);
if($updtstatus){
    $connection->commit();
    $_SESSION['update']="Sucessfuly Updated";
    session_write_close();
    header("Location:editdpt.php?id=".$_POST['dptid']);
}
else{
    $connection->rollback();
    echo "Failed";
}