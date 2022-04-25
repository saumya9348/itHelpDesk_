<?php
include 'link.php';
// $cmd4="insert into user_complain_detail (resolve_dt,resolve_tm) values (?,?) where user_comp_id =".$_GET['cid'];
// $connection->beginTransaction();
// $qry4=$connection->prepare($cmd4);
// date_default_timezone_set('Asia/Kolkata');
// $dt=date("Y-m-d");
// $tm=date("h:i:sa");
// $data4=array($dt,$tm);
// $res4=$qry4->execute($data4);
// var_dump($qry4);
// exit;
// if($res4){
//     $connection->commit();
//     echo "d";
// }else{
//     $connection->rollback();
//     echo "f";
// }


$cmd3="update user_complain_detail set 	comp_status= ? ,resolve_dt = ?,resolve_tm = ? where user_comp_id =".$_GET['cid'];
$connection->beginTransaction();
$qry3=$connection->prepare($cmd3);
date_default_timezone_set('Asia/Kolkata');
$dt=date("Y-m-d");
$tm=date("h:i:sa");
$st="Resolve";
$data4=array($st,$dt,$tm);
$res3=$qry3->execute($data4);
if($res3){
    $connection->commit();
    header('location:complain_view.php');
    // echo "d";

}else{
    $connection->rollback();
    echo "fail";
}