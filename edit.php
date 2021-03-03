<?php
require_once ('connect.php');
if(isset($_GET['id_edit'])){
    $id = $_GET['id_edit'];

    $sql = "select * from student where id = '$id'";
    $query = mysqli_query($conn,$sql);
    $row = mysqli_fetch_array($query);
}

if(!empty($_POST)){
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['pwd'];
    $phone_number = $_POST['phone_number'];
    $fullname = $_POST['fullname'];

    $sql = "update student set email = '$email',username ='$username',password = '$password',phone_number = '$phone_number',
            fullname = '$fullname' where id='$id'";
   $query = mysqli_query($conn,$sql);

   header('location: welcome.php');
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
<h1 class="text-center">Update</h1>
<form action="" method="post">
    <div class="container">
        <div class="form-group">
            <label for="fullname">Full name:</label>
            <input required="true" type="text" class="form-control" placeholder="Enter email" id="fullname" name="fullname" value="<?php echo $row['email']?>">
        </div>
        <div class="form-group">
            <label for="username">User name:</label>
            <input required="true" type="text" class="form-control" placeholder="Enter email" id="username" name="username" value="<?php echo $row['username']?>">
        </div>
        <div class="form-group">
            <label for="pwd">Password:</label>
            <input required="true" type="password" class="form-control" placeholder="Enter password" id="pwd" name="pwd" value="<?php echo $row['email']?>">
        </div>

        <div class="form-group">
            <label for="phone_number">Phone number:</label>
            <input required="true" type="tel" class="form-control" placeholder="Enter email" id="phone_number" name="phone_number" value="<?php echo $row['email']?>">
        </div>
        <div class="form-group">
            <label for="email">Email:</label>
            <input required="true" type="email" class="form-control" placeholder="Enter email" id="email" name="email" value="<?php echo $row['email']?>">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </div>
</form>
</body>
</html>
