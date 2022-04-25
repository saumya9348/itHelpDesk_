<?php
include 'link.php';
$cmd3="delete from it_team_details where teamid=".$_GET['id1'];
$connection->beginTransaction();
$qry3= $connection->prepare($cmd3);
$stat=$qry3->execute();
if($stat){
    $connection->commit();
    header('Location:it_team_details.php');

}
else{
    $connection->rollback();
    echo "fail";
}