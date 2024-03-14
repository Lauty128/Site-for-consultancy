<?php 
    require '../controllers/courses.controller.php';
    
    $courses = CoursesController::getOne($_GET['id']);
    $type = [1=>'Presencial', 2=>'Virtual', 3=>'Hibrido'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "./templates/head.php" ?>
    <title>
        <?php if($courses){ echo $courses[0]['title']; } else echo 'No existe'; ?>
    </title>
</head>
<body>
    <?php include_once "./templates/header.php" ?>

    <header class="Header" style="height: fit-content; overflow:visible; background: none">
        <?php include_once "./templates/menu.php" ?>
    </header>

    <?php if((count($courses) == 1) && $courses[0]['state']){ ?>
        <div class="VacancyData">
            <img src="/admin/images/courses/<?= ($courses[0]['image'] == null) ? 'notfound.jpg' : $courses[0]['image'] ?>"
                style="max-width: 400px; height:auto; aspect-ratio: 4/3; margin-bottom:2em">
           
            <div class="VacancyData__data">
                <span class="VacancyData__span">
                    <svg width="20px" height="20px" stroke-width="2.2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF"><path d="M15 4V2m0 2v2m0-2h-4.5M3 10v9a2 2 0 002 2h14a2 2 0 002-2v-9H3zM3 10V6a2 2 0 012-2h2M7 2v4M21 10V6a2 2 0 00-2-2h-.5" stroke="#3F72AF" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    <?php $date = date_create($courses[0]['created_at']); echo date_format($date, 'd/m/Y') ?>
                </span>
            </div>

            <h2 class="VacancyData__h2"> <?php echo $courses[0]["title"] ?> </h2>
            
            <?php if($courses[0]['directed_to']){ ?>
                <div class="VacancyData__div" style="margin-top: 2em;">
                    <h4 class="VacancyData__h4">Objetivos</h4>
                    <p class="VacancyData__p"><?php echo str_replace("\n", "<br />" ,$courses[0]['objetives']) ?></p>
                </div>
            <?php } ?>

            <div class="VacancyData__div"  style="margin-top: 2em;">
                <h4 class="VacancyData__h4">Descripción</h4>
                <p class="VacancyData__p"><?php echo str_replace("\n", "<br />" ,$courses[0]['description']) ?></p>
            </div>

            <?php if($courses[0]['directed_to']){ ?>
                <div class="VacancyData__div" style="margin-top: 2em;">
                    <h4 class="VacancyData__h4">Dirigido a</h4>
                    <ul class="VacancyData__ul">
                        <?php foreach (explode("\n", $courses[0]['directed_to'] ?? "") as $key => $item) {
                            echo "<li class='VacancyData__li'>".$item."</li>";
                        } ?>
                    </ul>
                </div>
            <?php } ?>

            <div class="VacancyData__separator"></div>

            <span class="VacancyData__span" style="font-weight: 400;">
                Tipo de curso: <b><?php echo $type[$courses[0]['type']] ?></b>
            </span>
            <span class="VacancyData__span" style="font-weight: 400; display:block; margin-top:10px">
                Ultima actualización: <b><?php $date = date_create($courses[0]['updated_at']); echo date_format($date, 'd/m/Y') ?></b>
            </span>

            <div class="CourseBox">
                <h3 class="CourseBox__h3 title--right-line">Obtener temario y presupuesto</h3>
                <p class="CourseBox__p">Solo debes escribir tu correo electronico y darle click a pedir. <br>
                    Nosotros nos comunicaremos con usted para enviarle la informacion.</p>
                <form action="/cursos" method="post">
                    <input class="CourseBox__input" placeholder="Correo electronico" type="email" name="email" id="email-input">
                    <input type="hidden" name="course" id="course-input" value="<?php echo $courses[0]["id_course"] ?>">
                    <input class="CourseBox__submit" type="submit" value="Pedir">
                </form>
            </div>
        </div>
        
        </section>


    <?php } else{  ?>
        <div class="VacancyDataError">
            <svg width="50px" height="50px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF"><path d="M12 11.5v5M12 7.51l.01-.011M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" stroke="#3F72AF" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            <h2 class="VacancyDataError__h2">El curso solicitado no existe</h2>
            <p class="VacancyDataError__p">Revisa la lista de cursos</p>
            <a href="/cursos" class="VacancyDataError__a">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><style>svg{fill:#ffffff}</style><path d="M96 96c0-35.3 28.7-64 64-64H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H80c-44.2 0-80-35.8-80-80V128c0-17.7 14.3-32 32-32s32 14.3 32 32V400c0 8.8 7.2 16 16 16s16-7.2 16-16V96zm64 24v80c0 13.3 10.7 24 24 24H296c13.3 0 24-10.7 24-24V120c0-13.3-10.7-24-24-24H184c-13.3 0-24 10.7-24 24zm208-8c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zM160 304c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"/></svg>
                Cursos disponibles
            </a>
        </div>
    <?php } ?>
    
    <?php include_once "./templates/footer.php" ?>

    <script src="/public/js/index.js"></script>
</body>
</html>