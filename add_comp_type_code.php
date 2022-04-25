<?php
include 'link.php';
$cmd2="insert into complain_type (comptype) values(?)";
$connection->beginTransaction();
$qry2=$connection->prepare($cmd2);
$data2=array($_POST['newcomp']);
$statusInsert=$qry2->execute($data2);
if($statusInsert){
    $connection->commit();
    header('Location:add_comp_type.php');
}
else{
    $connection->rollback();
    echo "fail";
}