<?php
session_start();
include("db.php");

$username = $_POST['username'];
$password = md5($_POST['password']); // Encriptamos para comparar

$sql = "SELECT u.username, u.id_role, t.role 
        FROM users u
        INNER JOIN type t ON u.id_role = t.id
        WHERE u.username='$username' AND u.password='$password'";

$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 1) {
    $row = mysqli_fetch_assoc($result);

    // Guardamos en la sesión
    $_SESSION['username'] = $row['username'];
    $_SESSION['id_role'] = $row['id_role'];
    $_SESSION['role']    = $row['role'];  // 👈 usamos role en vez de role_name

    header("Location: welcome.php");
    exit();
} else {
    header("Location: login.php?error=1");
    exit();
}
?>