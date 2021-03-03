<?php
if (!empty($_POST)) {
    $email = isset($_POST['email']) ? $_POST['email'] : "";
    $password = isset($_POST['pwd']) ? $_POST['pwd'] : "";
    $username = isset($_POST['username']) ? $_POST['username'] : "";
    $phone_number = isset($_POST['phone_number']) ? $_POST['phone_number'] : "";
    $fullname = isset($_POST['fullname']) ? $_POST['fullname'] : "";

    require_once('connect.php');

//        $sql = "insert into from student (email,password,username,fullname,phone_number)
//                values ('$email', '$password', '$username', '$fullname', '$phone_number')";
////        var_dump($sql);
////        die();
//        $query = mysqli_query($conn,$sql);
//
//        echo $num = mysqli_num_rows($query);
    $sql = "insert into student (password,phone_number,fullname,email,username) 
                    values  ('$password','$phone_number','$fullname','$email','$username')";
    $query = mysqli_query($conn, $sql);
    var_dump($query);
//        die();

    header('location: login.php');

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
<h1 class="text-center">Add Student</h1>
<form action="" method="post">
    <div class="container">
        <div class="form-group">
            <label for="fullname">Full name:</label>
            <input required="true" type="text" class="form-control" placeholder="Enter email" id="fullname"
                   name="fullname">
        </div>
        <div class="form-group">
            <label for="username">User name:</label>
            <input required="true" type="text" class="form-control" placeholder="Enter email" id="username"
                   name="username">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input required="true" type="password" class="form-control" placeholder="Enter password" id="pwd"
                   name="pwd">
        </div>

        <div class="form-group">
            <label for="phone_number">Phone number:</label>
            <input required="true" type="tel" class="form-control" placeholder="Enter email" id="phone_number"
                   name="phone_number">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input required="true" type="email" class="form-control" placeholder="Enter email" id="email" name="email">
        </div>
        <button type="submit" class="btn btn-primary">Register</button>
    </div>
</form>
</body>
</html>
