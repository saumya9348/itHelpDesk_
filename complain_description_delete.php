<?php
include 'link.php';
$cmd3="delete from complain_description where descriptionid=".$_GET['dltid'];
$connection->beginTransaction();
$qry3=$connection->prepare($cmd3);
$stat3=$qry3->execute();
var_dump($stat3);exit;

if($stat3){
    $connection->commit();
    header('location:complain_description_insert.php');
}
else{
    $connection->rollback();
    echo "fail";
}