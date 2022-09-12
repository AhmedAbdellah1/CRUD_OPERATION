<?php include 'connect.php';

$id = $_GET['updataid'];

//this code to appears data of $id in form
$sql = "select * from `crud` where id=$id";

$result = mysqli_query($conn, $sql);

$row = mysqli_fetch_assoc($result);

$name = $row['name'];
$email = $row['email'];
$mobile = $row['mobile'];
$password = $row['password'];
//=============================

//this cod to update date information for user and stor ham to database
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $password = $_POST['password'];

    $sql = "update`crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password'where id=$id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location:display.php');
        // echo "update successfully";
    } else {
        die(mysqli_error($conn));
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>curd operation</title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
</head>

<body>

    <div class="container my-5">
        <form method="post">
            <div class="form-group">
                <label>Name</label>
                <input type="text" class="form-control" placeholder="Enter your Name" autocomplete="off" value=<?= $name ?> name="name">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" placeholder="Enter your Email" autocomplete="off" value=<?= $email ?> name="email">
            </div>
            <div class="form-group">
                <label>Mobile</label>
                <input type="text" class="form-control" placeholder="Enter your Mobile Number" autocomplete="off" value=<?= $mobile ?> name="mobile">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" class="form-control" placeholder="Enter your Passwprd" value=<?= $password ?> name="password">
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Update</button>
            <button class="btn btn-danger "><a style="text-decoration: none;" class="text-light " href="display.php">Back</a></button>

        </form>

    </div>

</body>

</html>