<?php
include 'link.php';
$cmd2="update it_team_details set tempname =? , tusername=?, tmobno=?, tmailid=? where teamid=".$_SESSION['tmid'] ;
$connection->beginTransaction();
$qry2=$connection->prepare($cmd2);
$data=array($_POST['empnm'],$_POST['usernm'],$_POST['mobno'],$_POST['emlid']);
$res2=$qry2->execute($data);
if($res2){
    $connection->commit();
    header('location:complain_view.php');
}else{
    $connection->rollback();
    echo  "fail";
}