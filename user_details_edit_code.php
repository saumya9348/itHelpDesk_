<?php
include 'link.php';
$cmd2="update emp_details set departmentname=? , empname=? , emp_system_ip=? , system_name=?, mobno=? ,mailid=? where empid=".$_POST['emplid'];
$connection->beginTransaction();
$qry2=$connection->prepare($cmd2);
$data=array($_POST['departmentnm'],$_POST['empname'],$_POST['empsystmip'],$_POST['empsys'],$_POST['empmob'],$_POST['empemail']);
$statusExecution=$qry2->execute($data);
if($statusExecution){
    $connection->commit();
    echo "updated sucsessfully";
}
else{
    $connection->rollback();
    echo "failed sucsessfully";
}