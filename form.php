<?php 
session_start();
if(isset($_GET['logout'])){
    session_destroy();
    unset($_SESSION['loggedin']);
}
?>
<html lang="en">
<head>
    <title>Form Login</title>
</head>
<body>
    <?php
        if(!isset($_SESSION['loggedin'])){
    ?>
        <form action="form.php" method="post">
            Username: <input type="text" name="user" /> <br> <br>
            Password: <input type="password" name="password" /> <br> <br>
            <button type="submit" name="submit">Submit</button>
        </form>
    <?php
        }else{
    ?>
            <h2>Hello Sarwar, You are Logged in</h2>
    <?php 
        }
        if(isset($_POST['submit'])){
            if('sarwar' == $_POST['user'] && 'hello' == $_POST['password']){
                $_SESSION['loggedin'] = 1;
                echo "Successful";
            }
        }
    ?>
</body>
</html>

