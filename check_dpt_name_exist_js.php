<?php
include 'link.php';
$cmd="select count(dname) as d from departmentname where dname='".$_POST['dpart_name']."' ";
$qry=$connection->query($cmd);
$cnt=0;
foreach($qry as $g){
    $cnt=$g['d'];
}
$_SESSION['cnt']=$cnt;
if($cnt>0){
    ?>
    <?php echo "Department Already Exist" ?>
    <?php } else{} ?>