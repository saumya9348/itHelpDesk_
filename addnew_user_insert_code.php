<?php
include 'link.php';
$cmd2="insert into emp_details (departmentname,empname,emp_system_ip,system_name,mobno,mailid) values (?,?,?,?,?,?) ";
$connection->beginTransaction();
$qry2=$connection->prepare($cmd2);
$data2 = array($_POST['deptmnt'],$_POST['empnm'],$_POST['empsysid'],$_POST['sysnm'],$_POST['mbno'],$_POST['emlid']);
$insertEmpStatus=$qry2->execute($data2);
// var_dump($insertEmpStatus);
//  exit;
if($insertEmpStatus){
    $connection->commit();
    header('location:user_details.php');
}
else{
    $connection->rollback();
    echo "fail";
}