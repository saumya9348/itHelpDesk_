<?php
include "link.php";
$cmd3="update complain_description set complainid1=?, descriptionname=? where descriptionid=".$_POST['id3'];
$connection->beginTransaction();
$qry3=$connection->prepare($cmd3);
$dat3=array($_POST['comptype'],$_POST['compdescrip']);
$sat3=$qry3->execute($dat3);
if($sat3){
    $connection->commit();
    echo "done";
}
else{
    $connection->rollback();
    echo "fail";
}