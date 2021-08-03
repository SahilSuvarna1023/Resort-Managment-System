<?php
$con = mysqli_connect('localhost', 'root', '');

mysqli_select_db($con, 'resort_management');

?>

<html lang="en">
<head>
    <title>Admin login</title>
    <link rel="stylesheet" type="text/css" href="CSS/adminstyle.css">
</head>



<div class="form-div">
    <br>
    <h2>Admin Login</h2>
    <br>
        <form action="" method="post">
            <input type="text" name="user" placeholder="Username">
            <br><br>
            <input type="password" name="password" placeholder="Password">
            <br><br>
            <input type="submit" name="submit" value="Login">
        </form>
</div>
<?php
        if(isset($_POST['submit'])){
        $username_form = $_POST['user'];
        $password_form = $_POST['password'];

        $q1 = "select * from admin where username = '$username_form' && password = '$password_form'";
        $run = mysqli_query($con, $q1);
        $num = mysqli_num_rows($run);

        if($num == 1){
            header('location:Admin.php');
        }else{
            echo '<script language="javascript">';
            echo 'alert("Incorrect username or password")';
            echo '</script>';
        }
    }
?>
            
</body>
</html>