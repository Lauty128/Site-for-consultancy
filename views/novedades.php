<?php 
    require '../controllers/news.controller.php';
    
    $page = (isset($_GET['page']) && ($_GET['page'] >= 1)) ? (int)$_GET['page'] : 1;

    // $response = NewsController::getAll($page - 1);
    // $news = $response['data'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "./templates/head.php" ?>
    <title>Blog</title>
    <meta name="description" content="Explora nuestro blog para encontrar artículos informativos y consejos útiles relacionados con la industria, la manufactura, la logística y más. Mantente al día con las últimas noticias y tendencias en el mundo industrial.">
</head>
<body>
    <?php include_once "./templates/header.php" ?>

    <header class="Header Header--simple"> 
        <?php include_once "./templates/menu.php" ?>
        <h2 class="Header__title">BLOG</h2>
    </header>

    <section class="VacanciesList">
        
        <div class="VacanciesList__container VacanciesList__container--little" style="row-gap: 3em;">
            <div style="grid-column: 3 span; display:flex; justify-content:center; margin-top:3em">
                <img src="/public/assets/building.svg" width="280px" alt="">
            </div>
            <p style="grid-column: 3 span; text-align:center; font-size: 1.3em; margin-bottom:3em">Actualmente esta sección se encuentra en proceso de reestructuración y de cambios</p> 
        </div>

        
    </section>

    <?php include_once "./templates/footer.php" ?>

    <script src="/public/js/index.js"></script>
</body>
</html>