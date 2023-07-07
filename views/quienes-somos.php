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
        <h4 class="DescriptionAboutUsSection__h4">Somos profesionales con amplia trayectoria y formación en  gestión empresarial, desarrollada en organizaciones multinacionales</h4>
        <div class="DescriptionAboutUsSection__div">
            <p class="DescriptionAboutUsSection__p">
               Brindamos <b>soluciones</b> a empresas industriales y de servicios, tenemos una variada oferta de  alternativas y nos caracterizamos por adaptarlas a las <b>necesidades y particularidades de cada cliente</b>.
            </p>
        </div>
        <div class="DescriptionAboutUsSection__div">
            <p class="DescriptionAboutUsSection__p">
                Tuvimos la oportunidad de trabajar durante años  en empresas multinacionales que nos permitieron  adquirir las experiencias y conocimientos necesarios para transformarnos en multiplicadores de soluciones hacia las organizaciones que nos contratan.
            </p>
        </div>
        <div class="DescriptionAboutUsSection__div">
            <p class="DescriptionAboutUsSection__p">
            Nuestro abanico de servicios es amplio , nos enfocarnos en la resolución de necesidades referidas a la gestión de los <b>RRHH</b>, a la <b>mejora de procesos industriales o administrativos</b> , <b>capacitaciones</b>,  <b>implementación de sistemas de gestión a medida</b>,  acompañando a nuestros  clientes en cada una de las etapas de cada proyecto, con foco en la <b>mejora continua</b> y la <b>excelencia en la gestión</b>.
            </p>
        </div>
        <!-- <p class="DescriptionAboutUsSection__p"></p> -->
    </section> 

    <section class="ItemsAboutUs">
        <div class="ItemsAboutUs__div" data-aos='fade-right' data-aos-delay='80' data-aos-duration='1100'>
            <svg width="60px" height="60px" viewBox="0 0 24 24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF"><path d="M20.777 13.345l-7.297 8.027a2 2 0 01-2.96 0l-7.297-8.027a2 2 0 010-2.69l7.297-8.027a2 2 0 012.96 0l7.297 8.027a2 2 0 010 2.69z" stroke="#3F72AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            <h4 class="ItemsAboutUs__h4">SOPORTE EN TODO MOMENTO</h4>
        </div>
        <div class="ItemsAboutUs__div" data-aos='fade-down' data-aos-delay='80' data-aos-duration='1100'>
            <svg width="60px" height="60px" viewBox="0 0 24 24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF"><path d="M20.777 13.345l-7.297 8.027a2 2 0 01-2.96 0l-7.297-8.027a2 2 0 010-2.69l7.297-8.027a2 2 0 012.96 0l7.297 8.027a2 2 0 010 2.69z" stroke="#3F72AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            <h4 class="ItemsAboutUs__h4">PROFESIONALES CALIFICADOS</h4>
        </div>
        <div class="ItemsAboutUs__div" data-aos='fade-left' data-aos-delay='80' data-aos-duration='1100'>
            <svg width="60px" height="60px" viewBox="0 0 24 24" stroke-width="1.5" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF"><path d="M20.777 13.345l-7.297 8.027a2 2 0 01-2.96 0l-7.297-8.027a2 2 0 010-2.69l7.297-8.027a2 2 0 012.96 0l7.297 8.027a2 2 0 010 2.69z" stroke="#3F72AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            <h4 class="ItemsAboutUs__h4">GESTIÓN POR RESULTADOS</h4>
        </div>
    </section>

    <section class="OurServicesSection">
        <h2 class="OurServicesSection__h2 title--center-line">SERVICIOS</h2>
        <div class="OurServicesSection__container">
            <?php foreach ($services as $key => $service) {
                echo "<div class='OurServicesSection__service' data-aos='zoom-in' data-aos-delay='80' data-aos-duration='1100'>";
                echo $service['icon'];
                echo "<span class='OurServicesSection__serviceName'>".$service['name']."</span>";
                echo  "<p class='OurServicesSection__description'>".$service['description']."</p>";
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
            <h3 class="OurHelpSection__h3">¿EN QUE PODEMOS AYUDARTE?</h3>
            <p class="OurHelpSection__p">
                Consulte nuestros servicios activos para empresas y pónganse en contacto con nosotros.  
            </p>
            <p class="OurHelpSection__p">
                Postulesé a las vacantes laborales que considera encuadrar con su perfil y lo audaremos a encontrar su lugar de trabajo.
            </p>
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