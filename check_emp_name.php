<option value="">Select Employee Name</option>
<?php
include 'link.php';
$cmd3="select * from emp_details where departmentname=".$_POST['deptid'];
$qry3=$connection->query($cmd3);

foreach($qry3 as $var3){
    ?>
    <option value="<?php echo $var3['empid']; ?>"><?php echo $var3['empname']; ?></option>
    <?php
}
?>