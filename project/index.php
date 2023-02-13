<?php 

    session_start();

    if (isset($_SESSION['admin_login'])) {
        header("location: admin/admin_home.php");
    }


    if (isset($_SESSION['user_login'])) {
        header("location: user/user_home.php");
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" type="text/css" href="style.css">

</head>
<body>
        <center>
            <img  src="asset/logo_atc.png" >
        </center>
        <div class="header">
            <h2>Login</h2>
        </div>
        
        <form action="login_db.php" method="post" class="form-horizontal my-5">
       <div class="input-group">
       <?php if(isset($_SESSION['success'])) : ?>
            <div class="success">
                <h3>
                    <?php 
                        echo $_SESSION['success'];
                        unset($_SESSION['success']);
                    ?>
                </h3>
            </div>
        <?php endif ?>

        <?php if(isset($_SESSION['error'])) : ?>
            <div class="error">
                <h3>
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </h3>
            </div>
        <?php endif ?>
            <label for="email" >Name</label>
            <div >
                <input type="text" name="txt_email"  required placeholder="Enter name">
            </div>
        </div>
        
        <div class="input-group">
            <label for="password" >Password</label>
            <div>
                <input type="password" name="txt_password" required placeholder="Enter password">
            </div>
        </div>
        <div class="form-group">
            <label for="type">Select Type</label>
            <div >
                <select name="txt_role" >
                    <option value="" selected="selected">- Select Role -</option>
                    <option value="admin">Admin</option>
                    <option value="user">User</option>
                </select>
            </div>
        </div>

        <div class="input-group">
            <div>
                <button type="submit" name="btn_login" class="btn "  value="Login">Login</button>

            </div>
        </div>

        <div class="form-group text-center">
            <div >
                You don't have a account register here? 
                <p><a href="register.php">Register Account</a></p>
            </div>
        </div>

        </form>
    


</body>
</html>