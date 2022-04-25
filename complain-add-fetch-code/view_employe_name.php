<option value="">Select Employee Name</option>

<script>
//  alert(121);
// <span>span</span>
//$('#emp_id').empty().append('<span>span</span>');
</script>
<?php
include '../link.php';

$cmd="select empid,empname from emp_details where departmentname= '".$_POST['dptid']."' ";
$query=$connection->query($cmd);
foreach($query as $v2){
?>
    <option value="<?php echo $v2['empid']; ?>"><?php echo $v2['empname']; ?></option> 
<?php } ?>

