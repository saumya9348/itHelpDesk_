<?php
include 'link.php';
$cmd3="update it_team_details set tempname=? , tusername=?,tmobno=?,tmailid=?,status=? where teamid=".$_POST['tmid'];
$connection->beginTransaction();
$qry3=$connection->prepare($cmd3);
$data3=array($_POST['empnm'],$_POST['usernm'],$_POST['mobno'],$_POST['emlid'],$_POST['teamstatus']);
$status3=$qry3->execute($data3);
if($status3){
    $connection->commit();
    header('location:it_team_details.php');
}
else{
    $connection->rollback();
    echo "fail";
}