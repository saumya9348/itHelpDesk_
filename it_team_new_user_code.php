<?php
include 'link.php';
$cmd2="insert into it_team_details (tempname,tusername,tpassword,tmobno,tmailid) values (?,?,?,?,?)";
$connection->beginTransaction();
$qry2=$connection->prepare($cmd2);
$data2=array($_POST['empnm'],$_POST['usernm'],$_POST['pwd'],$_POST['mobno'],$_POST['emlid']);
$status=$qry2->execute($data2);
if($status){
    $connection->commit();
    header('location:it_team_details.php');
    // echo "done";
}
else{
    $connection->rollback();
    echo "fail";
}