<?php 
    require '../controllers/courses.controller.php';
    
    $page = (isset($_GET['page']) && ($_GET['page'] >= 1)) ? (int)$_GET['page'] : 1;

    $response = CoursesController::getAll($page - 1, 20);
    $courses = $response['data'];
    
    $type = [1=>'Presencial', 2=>'Virtual', 3=>'Hibrido']
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "./templates/head.php" ?>
    <title>Cursos</title>
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
                    <span class="CourseCard__date">Ultima actualizacion: <?php $date = date_create($course['updated_at']); echo date_format($date, 'd/m/Y') ?></span>
                    <h3 class="CourseCard__name"><?php echo $course['title'] ?></h3>
                    <div class="CourseCard__bottomInfo">
                        <span>
                            <svg width="18px" height="18px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF"><path d="M3.2 14.222V4a2 2 0 012-2h13.6a2 2 0 012 2v10.222m-17.6 0h17.6m-17.6 0l-1.48 5.234A2 2 0 003.644 22h16.712a2 2 0 001.924-2.544l-1.48-5.234" stroke="#3F72AF" stroke-width="1.7"></path><path d="M11 19h2" stroke="#3F72AF" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                            <?php echo $type[$course['type']] ?>
                        </span>
                        <button class="CourseCard__button" data-id="<?php echo $course['id_course'] ?>">Ver mas</button>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </section>

    <div class="BoxContainer">
        <div class="CourseBox">
            <svg class="CourseBox__exit" width="30px" height="30px" stroke-width="2.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF"><path d="M6.758 17.243L12.001 12m5.243-5.243L12 12m0 0L6.758 6.757M12.001 12l5.243 5.243" stroke="#3F72AF" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            <div class="CourseBox__header">
                <div class="CourseBox__imageContainer">
                    <img src="" alt="" class="CourseBox__image">
                </div>
                <div class="CourseBox__headerInfo">
                    <span class="CourseBox__date">
                        <svg width="20px" height="20px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF"><path d="M15 4V2m0 2v2m0-2h-4.5M3 10v9a2 2 0 002 2h14a2 2 0 002-2v-9H3zM3 10V6a2 2 0 012-2h2M7 2v4M21 10V6a2 2 0 00-2-2h-.5" stroke="#3F72AF" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        00/00/0000
                    </span>
                    <span class="CourseBox__type">
                        <svg width="18px" height="18px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF"><path d="M3.2 14.222V4a2 2 0 012-2h13.6a2 2 0 012 2v10.222m-17.6 0h17.6m-17.6 0l-1.48 5.234A2 2 0 003.644 22h16.712a2 2 0 001.924-2.544l-1.48-5.234" stroke="#3F72AF" stroke-width="1.7"></path><path d="M11 19h2" stroke="#3F72AF" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                        Virtual
                    </span>
                    <h3 class="CourseBox__name"></h3>
                </div>
            </div>
            <span class="CourseBox__lastDate">Ultima actualizacion: 00/00/0000</span>
            <span class="CourseBox__lastDate" style="display: block; font-weight:700; margin-top:1em">Descripcion del curso</span>
            <p class="CourseBox__description">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque rem laboriosam eaque voluptatem consequatur in? Veritatis necessitatibus commodi ad iusto deserunt consectetur, adipisci laborum et beatae nesciunt deleniti explicabo, inventore architecto quibusdam aperiam nostrum quo, quidem vitae ullam eaque! Quibusdam dolorem voluptas, iste repudiandae, excepturi assumenda odit unde laboriosam doloribus voluptates delectus tempore labore qui quia quidem autem porro commodi quam fuga temporibus dignissimos dolor, voluptatum corrupti repellendus? Id iusto nihil eveniet! Ea aperiam veniam velit excepturi sequi asperiores modi nesciunt dolorem distinctio eos, suscipit id ex consectetur eius voluptate reiciendis sit debitis quam eum nemo consequuntur. Labore, officia! Vel est odit excepturi distinctio facilis quasi, voluptatem voluptas? Ea dolor dolorem facilis iusto neque nisi blanditiis, impedit nostrum! Eos, cupiditate.
            </p>
            <hr style="margin: 20px 0">
            <h3 class="CourseBox__h3 title--right-line">Obtener temario y presupuesto</h3>
            <p class="CourseBox__p">Solo debes escribir tu correo electronico y darle click a pedir. <br>
                Nosotros nos comunicaremos con usted para enviarle la informacion.</p>
            <form action="/cursos" method="post">
                <input class="CourseBox__input" placeholder="Correo electronico" type="email" name="email" id="email-input">
                <input type="hidden" name="course" id="course-input" value="">
                <input class="CourseBox__submit" type="submit" value="Pedir">
            </form>
        </div>
    </div>

    <script src="/public/js/courses.js"></script>

    <?php include_once "./templates/footer.php" ?>
    
    <script src="/public/js/index.js"></script>
</body>
</html>