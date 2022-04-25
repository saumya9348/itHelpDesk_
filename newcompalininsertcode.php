<?php
include 'link.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
    <?php
        $cmd_departname="select did,dname from departmentname";
        $department_name= $connection->query($cmd_departname);

        $cmd_comp_name="select complainid,comptype from complain_type";
        $query1= $connection->query($cmd_comp_name);

        $cmd_comp_frwd="select teamid,tempname from it_team_details";
        $query2=$connection->query($cmd_comp_frwd);
    ?>
    <form action="" method="POST">
    <h3>Department Name</h3>
    <select name="dpt_id" id="dpt_id">
        <option value="">Select One</option>
        <?php foreach($department_name as $v1){ ?>
        <option value="<?php echo $v1['did']; ?>"><?php echo $v1['dname']; ?></option>
        <?php } ?>
    </select>
    <h3>Employee Name</h3>
    <select name="emp_id" id="emp_id">
        <option value="">Select Employee Name</option>
    </select>
    <h3>Employee Email Id</h3>
    <select name="emp_mail" id="emp_mail">
        <option value="">Select Employee Id</option>
    </select>
    <h3>Complain Name</h3>
    <select name="comp_id" id="comp_id">
        <option value="">Select Complain Name</option>
    <?php foreach($query1 as $v1){ ?>
        <option value="<?php echo $v1['complainid']; ?>"><?php echo $v1['comptype']; ?></option>
    <?php } ?>
    </select>
    <h3>Complain Description</h3>
    <select name="" id="comp_desc">
    <option value="">Select Complain Name</option>
    </select>
    <h3>Complain Forwaard To</h3>
    <select name="" id="">
        <option value="">Complain Forward To</option>
    <?php foreach($query2 as $v2){ ?>
        <option value="<?php echo $v2['teamid']; ?>"><?php echo $v2['tempname']; ?></option>
    <?php } ?>
    </select><br><br>
    <input type="submit"> &nbsp; <input type="reset">
    </form>
    <script>
        $(document).ready(function(){
            $("#dpt_id").on("change",function(){
                // alert(12);
                $.ajax({
                    url:"complain-add-fetch-code/view_employe_name.php",
                    method:"POST",
                    data:{dptid:$("#dpt_id").val()},
                    datatype:"html",
                    success:function($res){
                        $('#emp_id').empty().append($res);
                    }
                })
            });
            $("#emp_id").on("change",function(){
                $.ajax({
                    url:'complain-add-fetch-code/view_emp_email.php',
                    data:{empid:$("#emp_id").val()},
                    method:"post",
                    datatype:"html",
                    success:function(res){
                        $("#emp_mail").empty().append(res);
                    }
                })
            });
            $("#comp_id").on("change",function(){
                $.ajax({
                    url:'complain-add-fetch-code/view_comp_name.php',
                    data:{compid:$("#comp_id").val()},
                    method:"post",
                    datatype:"html",
                    success:function(res){
                        $("#comp_desc").empty().append(res);
                    }
                })
            });

        })
    </script>
</body>
</html>