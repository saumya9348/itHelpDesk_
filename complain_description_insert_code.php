<?php
include 'link.php';
$cmd3="insert into complain_description (complainid1,descriptionname) values (?,?)";
$connection->beginTransaction();
$qry3=$connection->prepare($cmd3);
$data3=array($_POST['complaintypeid'],$_POST['descp']);


$stats3=$qry3->execute($data3);
// var_dump($stats3);
// exit;
if($stats3){
    $connection->commit();
    header('location:complain_description_insert.php');
}
else{
    $connection->rollback();
    echo "fail";
}