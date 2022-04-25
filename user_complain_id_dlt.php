<?php
include 'link.php';
$cmd2="delete from user_complain_detail where user_comp_id =".$_GET['cid'];
$connection->beginTransaction();
$qry2=$connection->prepare($cmd2);
$result=$qry2->execute();
if($result){
    $connection->commit();
    header('location:user_complain_view.php');
    echo "done";
}else{
    $connection->rollback();
    echo "fail";
}