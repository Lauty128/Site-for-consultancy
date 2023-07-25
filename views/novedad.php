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
            <div class="Article__content">
                <?= $article[0]['content'] ?>
            </div>
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

    <?php } ?>


<?php include_once "./templates/footer.php" ?>
    

    <script src="/public/js/index.js"></script>
</body>
</html>