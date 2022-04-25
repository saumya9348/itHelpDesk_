<?php
include 'link.php';
$cmd2="delete from emp_details where empid=".$_GET['empid1'];
$connection->beginTransaction();
$qry2=$connection->prepare($cmd2);
$statusExecution=$qry2->execute();
if($statusExecution){
    $connection->commit();
    header('location:user_details.php');
}
else{
    $connection->rollback();
    echo "fail";
}