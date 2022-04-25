<?php
include 'link.php';
$cmd2="delete from complain_type where complainid=".$_GET['id'];
$connection->beginTransaction();
$qry2=$connection->prepare($cmd2);
$stats=$qry2->execute();
if($stats){
    $connection->commit();
    header('location:add_comp_type.php');
}
else{
    $connection->rollback();
    echo "fail";
}