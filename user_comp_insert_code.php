<?php
include 'link.php';
$cmd2="insert into user_complain_detail (deptid,empid,comptypeid,comp_desc_id,it_team_id,comp_dt,comp_tm) values(?,?,?,?,?,?,?)";
$connection->beginTransaction();
$qry2=$connection->prepare($cmd2);
date_default_timezone_set('Asia/Kolkata');
$dtnow= date("Y-m-d");
$tmnow= date("h:i:sa");
$data2=array($_POST['department'],$_POST['empp'],$_POST['comptyp'],$_POST['compdes'],$_POST['compfrwd'],$dtnow,$tmnow);
$insertStatus=$qry2->execute($data2);
// print_r($data2);
// exit;
if($insertStatus){
    $connection->commit();
    header('location:user_complain_view.php');
}
else{
    $connection->rollback();
    echo "fail";
}