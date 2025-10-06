<?php
session_start();
if (!isset($_SESSION['username'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Bienvenido</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background: linear-gradient(135deg, #667eea, #764ba2);
            margin: 0;
            padding: 0;
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .container {
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0px 4px 20px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 400px;
            animation: fadeIn 1s ease-in-out;
        }
        h2 { color: #333; }
        p { margin: 10px 0; color: #555; }
        a {
            display: inline-block;
            margin-top: 15px;
            color: #667eea;
            text-decoration: none;
            font-weight: bold;
            transition: 0.3s;
        }
        a:hover { color: #764ba2; text-decoration: underline; }
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(-20px); }
            to { opacity: 1; transform: translateY(0); }
        }
         .navbar-object {
            width: 100%;
            height: 60px;
            border: none;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Bienvenido, <?php echo $_SESSION['username']; ?> 🎉</h2>
        <p>Tu rol es: <strong><?php echo $_SESSION['role']; ?></strong></p>

        <?php if ($_SESSION['id_role'] == 1): ?>
            <p>Tienes privilegios de administrador 🛠️</p>
        <?php else: ?>
            <p>Has iniciado sesión como invitado 👤</p>
        <?php endif; ?>

        <a href="logout.php">Cerrar Sesión</a>
    </div>
    <object
    data="navbar.html"
    type="text/html"
    title="Barra de navegación"
    class="navbar-object">
  </object>
</body>
</html>