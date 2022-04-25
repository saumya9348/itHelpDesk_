<option value="">Select Email Id</option>
<?php
include 'link.php';
$cmd2="select empid,mailid from emp_details where empid=".$_POST['emplid'];
$qry2=$connection->query($cmd2);
foreach($qry2 as $val2){
    ?>
    <option value="<?php echo $val2['empid']; ?>"><?php echo $val2['mailid']; ?></option>
    <?php
}
?>