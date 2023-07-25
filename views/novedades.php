<?php 
    require '../controllers/news.controller.php';
    
    $page = (isset($_GET['page']) && ($_GET['page'] >= 1)) ? (int)$_GET['page'] : 1;

    $response = NewsController::getAll($page - 1);
    $news = $response['data'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "./templates/head.php" ?>
    <title>Novedades</title>
</head>
<body>
    <?php include_once "./templates/header.php" ?>

    <header class="Header Header--simple"> 
        <?php include_once "./templates/menu.php" ?>
        <h2 class="Header__title">NOVEDADES</h2>
    </header>

    <section class="VacanciesList">
        <div class="VacanciesList__container" style="row-gap: 3em;">
            <?php foreach ($news as $key => $article) { ?>
                <div class="NewsCard">
                    <div style="width: 100%; height:300px; margin-bottom:15px">
                        <?= ($article['image'] == null) 
                                    ? '<img style="width:100%; height:100%" src="/images/news/notfound.jpg" />' 
                                    : '<img style="width:100%; height:100%" src="/images/news/'.$article['image'].'" />' ?>
                    </div>
                    <h3 class="NewsCard__h3" title="<?= $article['title'] ?>"><?= $article['title'] ?></h3>
                    <div class="flex-between-center">
                        <span class="NewsCard__span">
                            <svg style="vertical-align: bottom;" width="20px" height="20px" stroke-width="2.2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF"><path d="M15 4V2m0 2v2m0-2h-4.5M3 10v9a2 2 0 002 2h14a2 2 0 002-2v-9H3zM3 10V6a2 2 0 012-2h2M7 2v4M21 10V6a2 2 0 00-2-2h-.5" stroke="#3F72AF" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            <?php $date = date_create($article['created_at']); echo date_format($date, 'd/m/Y') ?>
                        </span>
                        <a href="/novedades/<?= $article['id_news'] ?>" style="text-decoration: underline; font-size:1.1em">
                            Leer mas
                        </a>
                    </div>
                </div>    
            <?php } ?>    
        <div></div>
        </div>
    </section>

    <?php include_once "./templates/footer.php" ?>

    <script src="/public/js/index.js"></script>
</body>
</html>