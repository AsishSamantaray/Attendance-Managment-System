<?php

    include("header.php");
    include("db.php");
    $flag = 0;
    if(isset($_POST['submit'])) {

        $regno = $_POST['regno'];
        $password = $_POST['password'];
        
        $sql = "SELECT reg_no, pass FROM attendance";
        $result = mysqli_query($con, $sql);

        if($result) {
            $flag = 1;
        }
    }

?>
<?php if($flag == 1) { ?>
<div class="alert alert-success">
    <strong>Success!</strong> Rrecord Inserted Successfully...
</div>
<?php } ?>

<div class="panel panel-default">
  <div class="panel-heading">
      <h2>
        <a href="login.php"class="btn btn-success">Login Student</a>
        <a href="register.php"class="btn btn-success">Register Student</a>
        <a href="index.php" class="btn btn-info pull-right">Back</a>
      </h2>    
    </div>

    <div class="panel-body">
        <form action="register.php" method="post">
            <div class="form-group">
                <label for="name">Student Name</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for="regno">Registration Number</label>
                <input type="text" name="regno" class="form-control">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" name="password" class="form-control">
            </div>
            <div class="form-group">
                <input type="submit" name="submit" class="btn btn-primary" value="Submit">
                <input type="reset" class="btn btn-danger" value="Cancel">
            </div>
        </form>
    </div>
</div>