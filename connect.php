<?php
$conn = new mysqli('localhost', 'root', '', 'crudoperatoin');
if (!$conn) {
    die(mysqli_error($conn));
}
