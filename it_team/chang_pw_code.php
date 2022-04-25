<?php
include 'link.php';
$cmd2="select tpassword from it_team_details where teamid = ".$_SESSION['tmid'];
$qry2=$connection->query($cmd2);
foreach($qry2 as $v2){
    $pwd=$v2['tpassword'];
}if($pwd == $_POST['oldpw']){

    $cmd3="update it_team_details set it_team_details= ? where teamid = ".$_SESSION['tmid'];
    $connection->beginTransaction();
    $qry3=$connection->prepare($cmd3);
    $data3=array($_POST['newpw']);
    $res3=$qry3->execute($data3);
    if($res3){
        $connection->commit();
        $_SESSION['pw_match']="Password Update Sucessfully";
        header('location:chang_pw.php');
    }
    else{

    }

}
else{
    $_SESSION['pw_match']="Your Old Password Is Not Matching";
    session_write_close();
    header('location:chang_pw.php');
}