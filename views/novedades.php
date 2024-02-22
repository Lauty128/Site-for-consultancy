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
    <title>Blog</title>
</head>
<body>
    <?php include_once "./templates/header.php" ?>

    <header class="Header Header--simple"> 
        <?php include_once "./templates/menu.php" ?>
        <h2 class="Header__title">BLOG</h2>
    </header>

    <section class="VacanciesList">
        <div class="VacanciesList__container" style="row-gap: 3em;">
            <?php foreach ($news as $key => $article) { ?>
                <div class="NewsCard">
                    <div style="width: 100%; height:300px; margin-bottom:15px">
                        <?= ($article['image'] == null) 
                                    ? '<img style="width:100%; height:100%" src="/admin/images/news/notfound.jpg" />' 
                                    : '<img style="width:100%; height:100%" src="/admin/images/news/'.$article['image'].'" />' ?>
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
        </div>

        <div class="VacanciesList__pagination">
            <?php if($page > 1){  ?>
                <a href="/novedades?page=<?= intval($page) - 1; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M48 256a208 208 0 1 1 416 0A208 208 0 1 1 48 256zm464 0A256 256 0 1 0 0 256a256 256 0 1 0 512 0zM217.4 376.9c4.2 4.5 10.1 7.1 16.3 7.1c12.3 0 22.3-10 22.3-22.3V304h96c17.7 0 32-14.3 32-32V240c0-17.7-14.3-32-32-32H256V150.3c0-12.3-10-22.3-22.3-22.3c-6.2 0-12.1 2.6-16.3 7.1L117.5 242.2c-3.5 3.8-5.5 8.7-5.5 13.8s2 10.1 5.5 13.8l99.9 107.1z"/></svg>
                </a>
            <?php }  ?>
            <?php for ($i=2; $i > 0; $i--) { 
                if(($page - $i) >= 1){
                    echo '<a href="/novedades?page='.(intval($page) - 1).'">'.($page - $i).'</a>';
                }
            }  ?>
            <span class="VacanciesList__pagination--select"><?= $page ?></span>
            <?php for ($i=0; $i < 2; $i++) { 
                if( (($page + $i) * 6) < $response['total']){
                    echo '<a href="/novedades?page='.(intval($page) + 1 + $i).'">'.($page + $i + 1).'</a>';
                }
            }  ?>
            <?php if((intval($page) * 6) < $response['total']){  ?>
                <a href="/novedades?page=<?= intval($page) + 1; ?>">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM294.6 135.1c-4.2-4.5-10.1-7.1-16.3-7.1C266 128 256 138 256 150.3V208H160c-17.7 0-32 14.3-32 32v32c0 17.7 14.3 32 32 32h96v57.7c0 12.3 10 22.3 22.3 22.3c6.2 0 12.1-2.6 16.3-7.1l99.9-107.1c3.5-3.8 5.5-8.7 5.5-13.8s-2-10.1-5.5-13.8L294.6 135.1z"/></svg>
                </a>
            <?php }  ?>
        </div>
    </section>

    <?php include_once "./templates/footer.php" ?>

    <script src="/public/js/index.js"></script>
</body>
</html>