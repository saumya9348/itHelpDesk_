<?php
include 'link.php';
$cmd4="select * from admin where admin_id=".$_SESSION['admid'];
$qry4=$connection->query($cmd4);
foreach($qry4 as $v4){
    $oldpw=$v4['admin_pw'];
}if($oldpw == $_POST['oldpw']){
    $cmd3="update admin set admin_pw = '".$_POST['newpw']."' where admin_id=".$_SESSION['admid'];
    $connection->beginTransaction();
    $qry3=$connection->prepare($cmd3);
    $res3=$qry3->execute();
    if($res3){
        $connection->commit();
        $_SESSION['adm_pw_updt_msg']="Update Sucessfully";
        session_write_close();
        header('location:admin_change_pw.php');
    }
    else{
        $connection->rollback();
        $_SESSION['adm_pw_updt_msg']="Your Old PW is Not Match";
        session_write_close();
        header('location:admin_change_pw.php');
    }
}
else{
    $_SESSION['adm_pw_updt_msg']="Your Old PW is Not Match";
        session_write_close();
        header('location:admin_change_pw.php');
}


