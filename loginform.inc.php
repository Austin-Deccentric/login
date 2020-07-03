<?php

if (isset($_POST['username']) && isset($_POST['password'])) {
    $_username = $_POST["username"];
    $_password = $_POST['password'];

    if (!empty($_username) && !empty($_password)) {
        
        $sql = "SELECT `id` FROM `users` WHERE `username` = '$_username' AND 'password' = '$_password'";
        
        if ($_result = mysqli_query($conn, $sql)) {
            $_result_rows = mysqli_num_rows($_result);
      
            if ($_result_rows == 0) {
                echo 'Invalid Username or Password'."</br>";
            }else if ($_result_rows == 1) {
                echo $user_id = mysqli_fetch_assoc($_result)['id']; 
                $_SESSION['user_id'] = $user_id;
                header('Location: index.php');
                // echo "Logged in"."</br>";
            }
        }
    
    }else {
        echo 'Provide a username or password';
    }
}
?>

<form action="<?php echo $current_file; ?>" method="POST">
Username: <input type="text" name="username" ></br>
Password: <input type="password" name="password"></br>
<input type="submit" value="Log in">
</form>