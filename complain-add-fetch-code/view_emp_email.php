<option value="">Select Email Id</option>
<?php
include '../link.php';
$cmd="select empid,mailid from emp_details where empid=".$_POST['empid'] ;
$query=$connection->query($cmd);
foreach($query as $v){
?>
<option value="<?php echo $v['empid']; ?>"><?php echo $v['mailid']; ?></option>
<?php } ?>