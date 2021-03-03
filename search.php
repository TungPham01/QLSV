
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
<h1 class="text-center">SEARCH</h1>

<table class="table table-bordered table-hover ">
    <tr style="background-color: lightgreen; text-transform: uppercase; color:blue;" class="text-center">
        <th>id</th>
        <th>fullname</th>
        <th>username</th>
        <th>password</th>
        <th>email</th>
        <th>phone</th>
        <th style="width: 60px;"></th>
        <th style="width: 60px;"></th>
    </tr>

    <?php
    require_once ("connect.php");

    if(isset($_POST['search'])){
        $search = $_POST['search'] ;
//        echo $search;
//        die();
        $sql = "select * from student where fullname LIKE '%$search%'";
//        var_dump($sql);
        $query = mysqli_query($conn,$sql);
        $num = mysqli_num_rows($query);
        $id = 1;
        echo "Có " . $num . " kết quả phù hợp";
        if($num > 0){
            while($row = mysqli_fetch_array($query)){
                echo " <tr>
                                <th>".($id++)."</th>
                                <th>".$row['fullname']."</th>
                                <th>".$row['username']."</th>
                                <th>".$row['password']."</th>
                                <th>".$row['email']."</th>
                                <th>".$row['phone_number']."</th>
                                <th><a href='edit.php?id_edit=".$row['id']."' class='btn btn-warning'>Edit</a></th>
                                <th><a href='delete.php?id_delete=".$row['id']."' class='btn btn-danger'>Delete</a></th>
                            </tr>";
            }
        }
    }else{
        echo "<b style='color: red;'>Không có kết quả phù hợp</b>";
    }


    ?>
    <a href="welcome.php" class="btn btn-primary mb-2 ml-2">Quay lại</a>

</table>
<a href="index.php" class="btn btn-success ml-2">ADD</a>
</body>
</html>