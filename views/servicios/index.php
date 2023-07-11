<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "./templates/head.php" ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Servicios</title>
</head>
<body>
    <?php include_once "../templates/header.php" ?>

    <header class="Header Header--simple"> 
        <?php include_once "../templates/menu.php" ?>
        <h2 class="Header__title">SERVICIOS</h2>
    </header>

    <div class="ServicesContainer">
        <?php foreach ($services as $key => $service) {?>
            <a class="ServicesContainer__div" href="/servicios/<?php echo $service['url'] ?>">
                <img class="ServicesContainer__image" src="/public/assets/services/<?php echo $service['image'] ?>" alt="servicio">
                <h2 class="ServicesContainer__h2"><?php echo $service['name'] ?></h2>
            </a>
        <?php } ?>
    </div>

    <?php include_once "../templates/footer.php" ?>
    

    <script src="/public/js/index.js"></script>

    <!-- AOS LOADING -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>