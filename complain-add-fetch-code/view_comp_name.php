<option value="">Select Complain Name</option>
<?php
include '../link.php';
$cmd="select descriptionid ,descriptionname from complain_description where complainid1 =".$_POST['compid'] ;
$query=$connection->query($cmd);
foreach($query as $v){
?>
<option value="<?php echo $v['descriptionid']; ?>"><?php echo $v['descriptionname']; ?></option>
<?php } ?>