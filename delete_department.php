<?php
include 'link.php';
$cmd="delete from departmentname where did=".$_GET['id'];
$connection->beginTransaction();
$qry=$connection->prepare($cmd);
$st=$qry->execute();
// var_dump($st);
// exit;
if($st){
    $connection->commit();
    header("Location:department_name.php");
}
else{
    $connection->rollback();
    echo "Failed";
}