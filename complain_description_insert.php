<?php
include "link.php";
if(isset($_SESSION['admid'])){

}else{
    header('location:admin_login.php');
}?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
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
                        <form action="admin_logout.php">
                                <input  type="submit" value="Logout" id="logoutbtn1">
                            </form>
                        </div>
                </div>
            </div>
            <div class="row"></div>
        </div>
    </div>

    <div id="top2ndbar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 admin-icon-bar s">
                    <div class="adminicon">
                        <i class="fa fa-user">&nbsp; <span><b>Admin</b></span></i>
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
                
                        <span class="x">MANAGE USERS</span> <button>Hide</button>
                        <ul>
                            <li><i class="fa fa-align-justify" aria-hidden="true"></i><a href="department_name.php">Department Details</a></li>
                            <li><i class="fa fa-pencil" aria-hidden="true"></i><a href="user_details.php">User Details</a></li>
                            <li><i class="fa fa-users" aria-hidden="true"></i><a href="it_team_details.php">IT Team</a></li>
                            <li><i class="fa fa-bookmark-o" aria-hidden="true"></i><a href="add_comp_type.php">Complain Type Details</a></li>
                            <li><i class="fa fa-bookmark-o" aria-hidden="true"></i><a href="complain_description_insert.php">Complain Description</a></li>
                        </ul>
                        <span>MANAGE COMPLAIN</span> <button>Hide</button>
                        <ul>
                            <li>
                                <i class="fa fa-file-text-o" aria-hidden="true"></i><a href="user_complain_view.php">User Complain</a>
                            </li>
                            <li>
                                <i class="fa fa-file-text-o" aria-hidden="true"></i><a href="user_complain_reports.php">Complain Reports</a>
                            </li>
                        </ul>
                        <span>My Setting</span> <button>Hide</button>
                        <ul>
                            <li><i class="fa fa-key" aria-hidden="true"></i><a href="">Change Password</a></li>
                            <li><i class="fa fa-key" aria-hidden="true"></i><a href="">Logout</a></li>
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
                <div class="comp_descrp">
                    <h3>Add Complain Description</h3><br>
                    <form action="complain_description_insert_code.php" method="post">
                        <?php
                          $cmd4="select * from complain_type";
                        //   ctp inner join complain_description cdsp on ctp.complainid=cdsp.complainid
                          $qry4=$connection->query($cmd4);

                        ?>
                        <h4>Complain Type</h4>
                        <select name="complaintypeid" id="">
                            <option value="">Select</option>
                            <?php foreach($qry4 as $v4){ ?>
                            <option value="<?php echo $v4['complainid']; ?>"><?php echo $v4['comptype'] ; ?></option>
                            <?php } ?>
                        </select><br>
                        <br><h4>Complain Description</h4>
                        <input type="text" name="descp" id="">
                        <br><br>
                        <input type="submit" value="Save"> &nbsp; <input type="reset" value="Reset">
                    </form>
                </div>
                <!-- table satrt -->
                <div class="compl_descp">
                        <table class="table">
                                <thead>
                                    <th scope="col"><input type="checkbox"></th>
                                    <th scope="col">Sl no</th>
                                    <th scope="col">Complain Type</th>
                                    <th scope="col">Complain Description</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </thead>
                                <tbody>
                                    <?php 
                                        $comand1="select * from complain_type ctype inner join complain_description cdsp on ctype.complainid = cdsp.complainid1";
                                        $query1=$connection->query($comand1);
                                        $sno1=1;
                                        foreach($query1 as $val1){
                                    ?>
                                    <tr>
                                        <td><input type="checkbox" name="" id=""></td>
                                        <td><?php echo $sno1++ ; ?></td>
                                        <td><?php echo $val1['comptype']; ?></td>
                                        <td><?php echo $val1['descriptionname']; ?></td>
                                        <td><?php echo $val1['descriptionstatus']; ?></td>
                                        <td><a href="complain_description_edit.php?id1=<?php echo $val1['descriptionid']; ?>"><i class="fa fa-pencil"></i></a> &nbsp; <a href="complain_description_delete.php?dltid=<?php echo $val1['descriptionid']; ?>"><i class="fa fa-trash"></i></a></td>
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