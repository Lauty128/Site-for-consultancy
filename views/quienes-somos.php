<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/index.css">
    <link rel="shortcut icon" href="/public/assets/logo.png" type="image/png">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Consultora Industrial</title>
</head>
<body>
    <?php include_once "./templates/header.php" ?>

    <header class="Header Header--simple"> 
        <?php include_once "./templates/menu.php" ?>
        <h2 class="Header__title">QUIENES SOMOS</h2>
    </header>
    
    <section class="DescriptionAboutUsSection">
        <h2 class="DescriptionAboutUsSection__h2 title--center-line">SOLUCIONES EFICIENTES</h2>
        <p class="DescriptionAboutUsSection__p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis rem magni corporis molestias esse nisi asperiores. Accusantium repellat inventore earum quia consequatur beatae dicta. Deleniti non accusamus nihil veniam ut illo quia excepturi in aut provident expedita rem corporis quod laborum cupiditate nulla, rerum consequuntur libero perferendis. Dolores, saepe? Ex praesentium blanditiis nesciunt culpa veritatis cum hic quae perferendis quas beatae dolore deserunt, illo reiciendis iste consequuntur, ipsam quia quisquam facilis molestias officiis dignissimos consequatur, aliquam soluta. Facere repellendus est quasi aspernatur eveniet illo suscipit ab sequi cumque praesentium, quidem, impedit iure accusamus provident soluta nihil, itaque ut natus? Dolor, porro. Quo ex voluptatum reprehenderit tenetur hic ullam quos debitis accusantium ipsa quibusdam modi consectetur sint, mollitia temporibus nam nemo praesentium odio aliquam. Cumque deserunt mollitia sunt numquam? Natus veritatis ab id modi mollitia quisquam quo, dolorem incidunt voluptatibus maiores vero minima odio nemo esse doloribus magni laborum commodi deleniti maxime aspernatur praesentium. Quo animi optio aspernatur fuga eveniet quia cupiditate rerum atque quos provident dolorum laborum quasi officiis sequi facere esse magni ut ipsum repellendus amet nesciunt, ea eaque excepturi qui! Doloribus similique ratione placeat dolorem quasi. Tempora ipsa a dolore qui quibusdam. Necessitatibus sequi at maxime ducimus incidunt dolor laborum odit officiis tempore, vel expedita voluptatum in illo placeat temporibus veritatis id ullam nemo ut sapiente iusto aperiam numquam explicabo alias. Hic dolores accusamus soluta expedita magni corrupti, tempore tempora molestiae itaque recusandae illum, laborum, enim modi provident eius consequatur qui neque ea rem esse aut adipisci at?</p>
    </section> 

    <section class="ItemsAboutUs">
        <div class="ItemsAboutUs__div" data-aos='fade-right' data-aos-delay='80' data-aos-duration='1100'>
            <svg width="60px" height="60px" viewBox="0 0 24 24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF"><path d="M20.777 13.345l-7.297 8.027a2 2 0 01-2.96 0l-7.297-8.027a2 2 0 010-2.69l7.297-8.027a2 2 0 012.96 0l7.297 8.027a2 2 0 010 2.69z" stroke="#3F72AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            <h4 class="ItemsAboutUs__h4">Item numero 1</h4>
        </div>
        <div class="ItemsAboutUs__div" data-aos='fade-down' data-aos-delay='80' data-aos-duration='1100'>
            <svg width="60px" height="60px" viewBox="0 0 24 24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF"><path d="M20.777 13.345l-7.297 8.027a2 2 0 01-2.96 0l-7.297-8.027a2 2 0 010-2.69l7.297-8.027a2 2 0 012.96 0l7.297 8.027a2 2 0 010 2.69z" stroke="#3F72AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            <h4 class="ItemsAboutUs__h4">Item numero 2</h4>
        </div>
        <div class="ItemsAboutUs__div" data-aos='fade-left' data-aos-delay='80' data-aos-duration='1100'>
            <svg width="60px" height="60px" viewBox="0 0 24 24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF"><path d="M20.777 13.345l-7.297 8.027a2 2 0 01-2.96 0l-7.297-8.027a2 2 0 010-2.69l7.297-8.027a2 2 0 012.96 0l7.297 8.027a2 2 0 010 2.69z" stroke="#3F72AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            <h4 class="ItemsAboutUs__h4">Item numero 3</h4>
        </div>
    </section>

    <section class="OurServicesSection">
        <h2 class="OurServicesSection__h2 title--center-line">SERVICIOS</h2>
        <div class="OurServicesSection__container">
            <?php foreach ($services as $key => $service) {
                echo "<div class='OurServicesSection__service' data-aos='zoom-in' data-aos-delay='80' data-aos-duration='1100'>";
                echo $service['icon'];
                echo "<span class='OurServicesSection__serviceName'>".$service['name']."</span>";
                echo  "<p class='OurServicesSection__description'>".$service['description_mini']."</p>";
                echo "<a href='servicios/".$service['url']."' class='OurServicesSection__seeMore'>Ver mas</a>";
                echo "</div>";
            } ?>
        </div>
    </section>

    <section class="OurHelpSection">
        <div class="OurHelpSection__imageContainer">
            <img src="public/assets/charlesdeluvio-DgoyKNgPiFQ-unsplash.webp" alt="laptop computadora charles deluvio unsplash" class="OurHelpSection__image" data-aos="fade-up-left" data-aos-duration="1100" data-aos-once="true">
        </div>
        <div class="OurHelpSection__information">
            <h3 class="OurHelpSection__h3">EN QUE PODEMOS AYUDARTE?</h3>
            <p class="OurHelpSection__p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Esse dolor porro numquam quo beatae nemo illum facere reiciendis, cupiditate impedit eaque inventore iure necessitatibus reprehenderit incidunt dolores odit eos excepturi laudantium quibusdam sit. Accusamus nemo recusandae quis non libero atque obcaecati sed necessitatibus placeat. Ut aspernatur in nemo placeat corrupti.</p>
            <div class="OurHelpSection__buttonsContainer">
                <a class="OurHelpSection__button" href="/cursos">Cursos</a>
                <a class="OurHelpSection__button" href="/vacantes">Vacantes</a>
                <a class="OurHelpSection__button" href="/servicios/">Servicios</a>
            </div>
        </div>
        <!-- <span class="OurHelpSection__span">Para más información puedes comunicarte con nosotros dando <a href="/contacto">click aquí</a></span> -->
    </section>


    <?php include_once "./templates/footer.php" ?>

    <script src="/public/js/index.js"></script>

    <!-- AOS LOADING -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>