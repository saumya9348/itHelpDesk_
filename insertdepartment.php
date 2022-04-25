<?php
include 'link.php';
$cmd="insert into departmentname (dname) values(?)";
$connection->beginTransaction();
$qry=$connection->prepare($cmd);
$dptname=array($_POST['dptnm']);
$insertdptStatus=$qry->execute($dptname);
if($insertdptStatus){
    $connection->commit();
    echo("done");
    header("Location:department_name.php");
}
else{
    $connection->rollback();
    echo "fail";
}