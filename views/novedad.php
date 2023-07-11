<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "./templates/head.php" ?>
    <title><?php echo $_GET['id']; ?></title>
</head>
<body>
<?php include "./templates/menu.php"; ?>

    <pre>
        <?php var_dump($_GET['id']); ?>
    </pre>
    <h2>En esta seccion se veran a fondo las novedades</h2>

    <script src="/public/js/index.js"></script>
</body>
</html>