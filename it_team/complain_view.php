<?php
include 'link.php';
if(isset($_SESSION['tmid'])){

}else{
    header('location:it_team_login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div id="topbar">
        <div class="container-fluid">
            <div class="row ">
                <div class="col-md-3 bg-dark web-adm t1">
                    <div class="topbarname">
                        <h3>Website Admin</h3>
                    </div>
                    
                </div>
                <div class="col-md-7 bg-dark">
                    <div class="topbarname float-left">
                        <h3>Department Details</h3>
                        
                    </div>
                </div>
                <div class="col-md-2 bg-dark">
                        <div class="logoutbtn float-right">
                            <form action="it_team_logout_code.php">
                            <input  type="submit" value="Logout" id="logoutbtn1">
                            </form>
                           
                        </div>
                </div>
            </div>
            <div class="row"></div>
        </div>
    </div>
    <?php $comnd="select tempname from it_team_details where teamid = ".$_SESSION['tmid'];
                                $qry1=$connection->query($comnd);
                                foreach($qry1 as $v1){
                                }
                        ?>
    <div id="top2ndbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 admin-icon-bar s">
                    <div class="adminicon">
                        <i class="fa fa-user">&nbsp; <span><b><?php echo $v1['tempname']; ?></b></span></i>
                    </div>
                    
                </div>
                <div class="col-md-9 admin-icon-bar s">
                    <div class="barnavigation">
                        <b>Manage User</b>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bodysection">
        <div class="row">
            <div class="col-md-3 sidemenu">
                    <div class="hor-line1">
                        <hr>
                    </div>
                <div class="sidemenulink">
                
                        
                        <ul>
                            <li><i class="fa fa-file-text" aria-hidden="true"></i><a href="complain_view.php">Complain Details</a></li>
                            <li><i class="fa fa-pencil" aria-hidden="true"></i><a href="edit_profile.php">Edit Profile</a></li>
                            <li><i class="fa fa-key" aria-hidden="true"></i><a href="chang_pw.php">Change Password</a></li>
                            <li><i class="fa fa-sign-out" aria-hidden="true"></i><a href="it_team_logout_code.php">Logout</a></li>
                        </ul>
                </div>
                    <div class="hor-line2">
                        <hr>
                    </div>
                
                <div class="copyright">
                    <b>IT Support Desk</b>- &copy; 2021, <br> <p>All rights reserved</p>
                </div>
            </div>
            <div class="col-md-9">
                <div class="info-msg">
                <p><i class="fa fa-info-circle" aria-hidden="true"></i> &nbsp;&nbsp;Welcome to the admin panel ,this could an informative message.</p>
                </div>
                <div class="ittm_cmp_tbl">
                <table class="table">
                        <thead>
                            <th scope="col"><input type="checkbox"></th>
                            <th scope="col">Sl No</th>
                            <th scope="col">Dept Name</th>
                            <th scope="col">Emp Name</th>
                            <th scope="col">Comp Type</th>
                            <th scope="col">Description</th>
                            <th scope="col">Complain Date</th>
                            <th scope="col">Comp Time</th>
                            
                            <th scope="col">Status</th>
                            <th scope="col">Resolve Date</th>
                            <th scope="col">Resolve Time</th>
                            <th scope="col">Action</th>
                            

                            </thead>
                            <tbody>
                            <?php
                                    $cmd2="SELECT * FROM user_complain_detail ucd INNER JOIN departmentname  ct ON ucd.deptid = ct.did 
                                    inner join complain_description cdsp on ucd.comp_desc_id = cdsp.descriptionid 
                                    inner join emp_details empd on ucd.empid = empd.empid 
                                    inner join complain_type cmptp on ucd.comptypeid = cmptp.complainid 
                                    inner join it_team_details itmd on ucd.it_team_id = itmd.teamid where it_team_id ='".$_SESSION['tmid']."' ";
                                    $qry2=$connection->query($cmd2);
                                    $sl=1;
                                    // var_dump($qry2);
                                    foreach($qry2 as $v2){
                            ?>
                                <tr scope="row">
                                    <td scope="col"><input type="checkbox"></td>
                                    <td scope="col"><?php echo $sl++; ?></td>
                                    <td scope="col"><?php echo $v2['dname']; ?></td>
                                    <td scope="col"><?php echo $v2['empname']; ?></td>
                                    <td scope="col"><?php echo $v2['comptype']; ?></td>
                                    <td scope="col"><?php echo $v2['descriptionname']; ?></td>
                                    <td scope="col"><?php echo $v2['comp_dt']; ?></td>
                                    <td scope="col"><?php echo $v2['comp_tm']; ?></td>
                                    <td scope="col"><?php echo $v2['comp_status']; ?></td>
                                    <td scope="col"><?php echo $v2['resolve_dt']; ?></td>
                                    <td scope="col"><?php echo $v2['resolve_tm']; ?></td>
                                   <?php if($v2['comp_status'] == 'Pending'){ ?>
                                    <td scope="col" ><a href="complain_resolve_code.php?cid=<?php echo $v2['user_comp_id']; ?> " ><i class="fa fa-check" aria-hidden="true"></i></a></td>
                                   <?php } else{ ?>
                                    <td scope="col"></td>
                                    <?php } ?>
                                </tr>
                               <?php } ?>
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>

    
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.6.0/dist/umd/popper.min.js" integrity="sha384-KsvD1yqQ1/1+IA7gi3P0tyJcT3vR+NdBTt13hSJ2lnve8agRGXTTyNaBYmCR/Nwi" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.min.js" integrity="sha384-nsg8ua9HAw1y0W1btsyWgBklPnCUAFLuTMS2G72MMONqmOymq585AcH49TLBQObG" crossorigin="anonymous"></script>
</body>
</html>