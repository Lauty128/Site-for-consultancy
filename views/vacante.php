<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/index.css">
    <title><?php echo $_GET['id']; ?></title>
</head>
<body>
<?php include "./templates/menu.php"; ?>

    <pre>
        <?php var_dump($_GET['id']); ?>
    </pre>
    <h2>En esta seccion se veran a fondo las vacantes</h2>

</body>
</html>