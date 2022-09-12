<?php include 'connect.php'; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <title>Crud Operation</title>
</head>

<body>
    <div class="container my-5 ">
        <table class="table">
            <thead>
                <tr class="table-dark">
                    <th scope="col">SI no</th>
                    <th scope="col">Name</th>
                    <th scope="col">email</th>
                    <th scope="col">mobile</th>
                    <th scope="col">Password</th>
                    <th scope="col">Operations</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql = "select * from `crud`";
                $result = mysqli_query($conn, $sql);
                if ($result) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $id = $row['id'];
                        $name = $row['name'];
                        $email = $row['email'];
                        $mobile = $row['mobile'];
                        $password = $row['password'];
                        echo    '<tr>
                                    <th class="table-info" scope="row">' . $id . '</th>
                                    <td class="table-secondary">' . $name . '</td>
                                    <td class="table-success">' . $email . '</td>
                                    <td class="table-danger">' . $mobile . '</td>
                                    <td class="table-warning">' . $password . '</td>
                                     <td class="table-light">
                                        <button class="btn btn-primary "><a class="text-light btn" href="update.php?updataid=' . $id . '">Update</a></button>
                                        <button class="btn btn-danger "><a class="text-light btn" href="delete.php?deleteid=' . $id . '">Delete</a></button>
                                    </td>
                                </tr>';
                    }
                }
                ?>

            </tbody>
        </table>
        <button class="btn btn-primary"><a href="user.php" class="text-light btn">Add user</a></button>

    </div>

</body>

</html>