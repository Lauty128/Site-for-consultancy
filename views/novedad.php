<?php 
    require '../controllers/news.controller.php';

    $response = NewsController::getAll(0,3,"id_news <> '".$_GET['id']."'");
    $lastNews = $response['data'];

    $article = NewsController::getOne($_GET['id']);

    $title = (count($article) == 0) ? 'No existe' : $article[0]['title'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "./templates/head.php" ?>
    <title><?= $title ?></title>
</head>
<body>

<?php include_once "./templates/header.php" ?>
    <header class="Header" style="height: fit-content; overflow:visible; background: none">
        <?php include "./templates/menu.php"; ?>
    </header>

    <?php if(count($article) == 1) { ?>
        <section class="Article">
            <div class="Article__imageContainer">
                <img src="/images/news/<?= ($article[0]['image'] == null) ? 'notfound.jpg' : $article[0]['image'] ?>" alt="">
            </div>
            <h2 class="Article__h2"><?= $article[0]['title'] ?></h2>
            <span class="Article__date">
            <svg width="20px" height="20px" stroke-width="2.2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF"><path d="M15 4V2m0 2v2m0-2h-4.5M3 10v9a2 2 0 002 2h14a2 2 0 002-2v-9H3zM3 10V6a2 2 0 012-2h2M7 2v4M21 10V6a2 2 0 00-2-2h-.5" stroke="#3F72AF" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                <?php $date = date_create($article[0]['created_at']); echo date_format($date, 'd/m/Y') ?>
            </span>
            <div class="Article__content">
                <?= $article[0]['content'] ?>
            </div>
            <span class="Article__autor">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><style>svg{fill:#3f72af}</style><path d="M368.4 18.3L312.7 74.1 437.9 199.3l55.7-55.7c21.9-21.9 21.9-57.3 0-79.2L447.6 18.3c-21.9-21.9-57.3-21.9-79.2 0zM288 94.6l-9.2 2.8L134.7 140.6c-19.9 6-35.7 21.2-42.3 41L3.8 445.8c-3.8 11.3-1 23.9 7.3 32.4L164.7 324.7c-3-6.3-4.7-13.3-4.7-20.7c0-26.5 21.5-48 48-48s48 21.5 48 48s-21.5 48-48 48c-7.4 0-14.4-1.7-20.7-4.7L33.7 500.9c8.6 8.3 21.1 11.2 32.4 7.3l264.3-88.6c19.7-6.6 35-22.4 41-42.3l43.2-144.1 2.8-9.2L288 94.6z"/></svg>
                <?= $article[0]['autor'] ?>
            </span>
            <hr>
            <h3 style="font-size: 1.8em; margin-bottom: 1em;">Ultimos Articulos</h3>
            <div class="Article__lastNews">
                <?php foreach ($lastNews as $key => $news) { ?>
                    <div class="NewsCard">
                        <div style="width: 100%; height:300px; margin-bottom:15px">
                            <?= ($news['image'] == null) 
                                        ? '<img style="width:100%; height:100%" src="/images/news/notfound.jpg" />' 
                                        : '<img style="width:100%; height:100%" src="/images/news/'.$news['image'].'" />' ?>
                        </div>
                        <h3 class="NewsCard__h3" title="<?= $news['title'] ?>"><?= $news['title'] ?></h3>
                        <div class="flex-between-center">
                            <span class="NewsCard__span">
                                <svg style="vertical-align: bottom;" width="20px" height="20px" stroke-width="2.2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF"><path d="M15 4V2m0 2v2m0-2h-4.5M3 10v9a2 2 0 002 2h14a2 2 0 002-2v-9H3zM3 10V6a2 2 0 012-2h2M7 2v4M21 10V6a2 2 0 00-2-2h-.5" stroke="#3F72AF" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                <?php $date = date_create($news['created_at']); echo date_format($date, 'd/m/Y') ?>
                            </span>
                            <a href="/novedades/<?= $news['id_news'] ?>" style="text-decoration: underline; font-size:1.1em">
                                Leer mas
                            </a>
                        </div>
                    </div>    
                <?php } ?>    
            </div>
        </section>


    <?php } else{ ?>
        <div class="VacancyDataError">
            <svg width="50px" height="50px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF"><path d="M12 11.5v5M12 7.51l.01-.011M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" stroke="#3F72AF" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            <h2 class="VacancyDataError__h2">El articulo solicitado no existe</h2>
            <p class="VacancyDataError__p">Revisa la seccion de novedades</p>
            <a href="/novedades" class="VacancyDataError__a">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><style>svg{fill:#ffffff}</style><path d="M96 96c0-35.3 28.7-64 64-64H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H80c-44.2 0-80-35.8-80-80V128c0-17.7 14.3-32 32-32s32 14.3 32 32V400c0 8.8 7.2 16 16 16s16-7.2 16-16V96zm64 24v80c0 13.3 10.7 24 24 24H296c13.3 0 24-10.7 24-24V120c0-13.3-10.7-24-24-24H184c-13.3 0-24 10.7-24 24zm208-8c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zM160 304c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"/></svg>
                Ver novedades
            </a>
        </div>
    <?php } ?>


<?php include_once "./templates/footer.php" ?>
    

    <script src="/public/js/index.js"></script>
</body>
</html>