<?php
include 'link.php';
$cmd2="select teamid from it_team_details where tusername = '".$_POST['lginunme']."' and tpassword = '".$_POST['loginpw']."' ";
$qry2=$connection->query($cmd2);
$tmid=0;
foreach($qry2 as $v2){
    $tmid=$v2['teamid'];
}
if($tmid > 0){
    $_SESSION['tmid']=$tmid ;
    session_write_close();
    header('location:complain_view.php');
}else{
    $_SESSION['msg']="You Enterd Wrong Id and Password";
    header('location:it_team_login.php');
}