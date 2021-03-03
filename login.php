<?php
    require_once ('connect.php');

    $error = "";
    if(!empty($_POST)){
        $username = isset($_POST['username']) ? $_POST['username'] : "";
        $password = isset($_POST['pwd']) ? $_POST['pwd'] : "";
        $data = 0;

        $sql = "select * from student where username = '$username' and password = '$password'";
        $query = mysqli_query($conn,$sql);

        while($row = mysqli_fetch_array($query)){
            $data++;
        }

        if($data>0){
            header('location: welcome.php');
        }else{
            $error = "Nhập sai thông tin tài khoản";
        }
    }

?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<h1 class="text-center">Login</h1>
<h3 class="text-center" style="color: red;"><?php echo $error ?></h3>
<form action="" method="post">
    <div class="container">
        <div class="form-group">
            <label for="username">User name:</label>
            <input type="text" class="form-control" placeholder="Enter username" id="username" name="username">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input type="password" class="form-control" placeholder="Enter password" id="pwd" name="pwd">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </div>
</form>
</body>
</html>
