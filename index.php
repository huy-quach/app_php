<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>App Form Sign-Up</title>
</head>
<body> 
    <form id="form-login" name="form-login" method="POST">
    <div class="container">
        <h1>
            Sign-Up Form App <br>
            by PHP
        </h1>
        <br>
        <div class="form-control">
            <input id="username" name="username" type="text" placeholder="Username">
            <input id="password" name="password" type="password" placeholder="Password">
            <input id="password2" name="password2" type="password" placeholder="Password Again">
            <input id="email" name="email" type="email" placeholder="Email">
            <button name="btn-submit" type="submit">Sign Up</button>
        </div>
    </div>
    </form>


    <?php


        include('connect.php');

        date_default_timezone_set('Asia/Ho_Chi_Minh');


        if(isset($_POST['btn-submit'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];
            $password2 = $_POST['password2'];
            $email = $_POST['email'];
            $today = date('Y-m-d H:i:s');

            $sql = "INSERT INTO `users` (`username`, `password` , `email`, `register`) VALUES ('". $username ."', '". $password ."', '". $email ."', '". $today ."')";
            if($connect->query($sql) == TRUE && $password == $password2) {
                echo ' Đăng ký thành công!';
            }else {
                echo ' Đăng ký thất bại!';
            }
        }

    ?>



</body>
</html>