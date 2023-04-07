  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="js/bootstrap.min.js">
  <link rel="stylesheet" type="text/css" href="js/bootstrap.bundle.min.js">
<!-- Admin -->
<?php
session_start();
require 'connection.php';
if (isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query="Select * from `users` where `username`='$username'and `password`='$password' and role ='Admin'and status='Active'";
    $result = mysqli_query($con,$query);
    $row_admin = mysqli_fetch_array($result);

    if(mysqli_num_rows($result)===1){
      $_SESSION['id'] = $row_admin['id'];
        echo"<script>window.location.href='admin/record.php'</script>";

    }elseif (isset($_POST['login'])){

    $username = $_POST['username'];
    $password = $_POST['password'];

    $query="Select * from `users` where `username`='$username'and `password`='$password' and role ='Client'and status='Active'";
    $result = mysqli_query($con,$query);
    $row_client = mysqli_fetch_array($result);

        $_SESSION['id'] = $row_client['id'];
        echo"<script>window.location.href='client/clienthome.php'</script>";
    }

    else{
        $_SESSION['error']="invalid username or password.";
    }
}
?>
<!-- End Admin -->


<!-- alert message -->
<?php if (isset($_SESSION['error'])) {?>
    <div class="container alert alert-danger" role ="alert">
    <button onclick="window.location.href='index.php'" type="button" class="Close"><span arial-hidden="true">&times;</span></button>

    <?php echo $_SESSION['error'];
        session_unset();
        session_destroy();
    }?>
    </div>
<!-- alert message -->
<div style="margin-left: 30%; margin-right: 30%;margin-top:10px ; border: solid gray; padding: 10px; border-radius: 5px;">


<h2>Login Page</h2>

<form action="index.php" class="was-validated" method="POST">
    <div class="form-group">
        <label for="uname">Username:</label>
        <input type="text" class="form-control" placeholder="Enter Username" name="username" required>
    </div>

    <div class="form-group">
        <label for="password">Password:</label>
        <input type="text" class="form-control" placeholder="Enter Password" name="password" required>
    </div>

    <button type="submit" name="login" class="btn btn-primary">Submit</button>
</form>
</div>
</body>
</html>