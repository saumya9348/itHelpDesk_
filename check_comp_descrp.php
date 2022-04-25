<option value="">Select Complain Description</option>
<?php
include 'link.php';
$cmd3="select * from complain_description where complainid1=".$_POST['comptp'];
$qry3=$connection->query($cmd3);
foreach($qry3 as $val3){
    ?>
    <option value="<?php echo $val3['descriptionid']; ?>"><?php echo $val3['descriptionname']; ?></option>
    <?php
}
?>