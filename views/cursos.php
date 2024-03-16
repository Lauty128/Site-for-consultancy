<?php 
    require '../controllers/courses.controller.php';
    
    $page = (isset($_GET['page']) && ($_GET['page'] >= 1)) ? (int)$_GET['page'] : 1;
    $type = [1=>'Presencial', 2=>'Virtual', 3=>'Hibrido'];

    $response = CoursesController::getAll($page - 1, 20);
    $courses = $response['data'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "./templates/head.php" ?>
    <title>Soluciones eficientes | Cursos</title>
</head>
<body>
    <?php include_once "./templates/header.php" ?>

    <header class="Header Header--simple"> 
        <?php include_once "./templates/menu.php" ?>
        <h2 class="Header__title">CURSOS</h2>
    </header>
    <section class="CoursesContainer">
        <?php if( ($response['total'] > 0) && (count($courses) > 0) ){ ?>
            <?php foreach ($courses as $key => $course) { ?> 
                <div class="CourseCard">
                    <div class="CourseCard__imageContainer">
                        <img src="/admin/images/courses/<?php echo $course['image'] ?>" alt="" class="CourseCard__image">
                    </div>
                    <div class="CourseCard__div">
                        <span class="CourseCard__date">Ultima actualizacion: <?php $date = date_create($course['updated_at']); echo date_format($date, 'd/m/Y') ?></span>
                        <h3 class="CourseCard__name"><?php echo $course['title'] ?></h3>
                        <p class="CourseCard__description"><?php echo str_replace("\n", "<br />" ,$course['description']) ?></p>
                        <div class="CourseCard__bottomInfo">
                            <span>
                                <svg width="18px" height="18px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF"><path d="M3.2 14.222V4a2 2 0 012-2h13.6a2 2 0 012 2v10.222m-17.6 0h17.6m-17.6 0l-1.48 5.234A2 2 0 003.644 22h16.712a2 2 0 001.924-2.544l-1.48-5.234" stroke="#3F72AF" stroke-width="1.7"></path><path d="M11 19h2" stroke="#3F72AF" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                <?php echo $type[$course['type']] ?>
                            </span>
                            <a href="/cursos/<?= $course['id_course'] ?>" class="CourseCard__button">Ver más</a>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php }else{ ?>
        
            <div class="VacanciesList__container VacanciesList__container--little" style="row-gap: 1em; margin-top:5em; grid-template-columns: 1fr">
                <div style="display:flex; justify-content:center;">
                    <img src="/public/assets/empty.svg" width="230px" alt="">
                </div>
                <p style="text-align:center; font-size: 1.3em;margin-bottom:0; margin-top:2em">No se encontró ningún elemento en esta página.</p>
                <div style="width: 100%; display:flex; justify-content:center">
                    <a href="/cursos" style="padding:3px 6px; background-color:#3f72af; color:#fff">Reiniciar pagina</a> 
                </div>
            </div>
        <?php } ?>
    </section>
    

    <?php include_once "./templates/footer.php" ?>
    
    <script src="/public/js/index.js"></script>
</body>
</html>