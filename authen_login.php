<?php  
 require('db_connect.php');

if (isset($_POST['uname']) && isset($_POST['psw'])){
	
    // Assigning POST values to variables.
    $username = $_POST['uname'];
    $password = $_POST['psw'];

    // CHECK FOR THE RECORD FROM TABLE
    $query = "SELECT * FROM `user_login` WHERE username='$username' and password='$password'";
    $query1 = "SELECT Permission FROM `user_login` WHERE username='$username' and password='$password'";

    $result = mysqli_query($connection, $query) or die(mysqli_error($connection));
    $count = mysqli_num_rows($result);

    $permission = mysqli_query($connection, $query1) or die(mysqli($connection));
    $pResult = mysqli_fetch_array($permission);

    if ($count == 1) {
        echo "<script> window.location.href = 'all.php'</script>";
        setcookie("user", $username);
        setcookie("permission", $pResult['Permission']);
    } else {
        echo "<script type='text/javascript'>alert('Invalid Login Credentials')</script>";
        echo "<script> window.location.href = 'index.html'</script>";
    }
}
?>