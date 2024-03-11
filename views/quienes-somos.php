<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "./templates/head.php" ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Consultora Industrial</title>
    <meta name="description" content="Descubre quiénes somos y nuestra misión como consultora industrial en Argentina. Conoce a nuestro equipo de expertos en ingeniería industrial y entérate de nuestra pasión por ayudar a las empresas a alcanzar su máximo potencial a través de soluciones industriales innovadoras y eficaces.">
</head>
<body>
    <?php include_once "./templates/header.php" ?>

    <header class="Header Header--simple"> 
        <?php include_once "./templates/menu.php" ?>
        <div class="Header__information">
            <h2 class="Header__title" style="font-size:1.4em; margin-bottom:20px">QUIENES SOMOS</h2>
            <p class="Header__p" style="font-size: 1.7em; width:80%; color:#fff; margin-bottom:4em">
            Somos profesionales con amplia trayectoria y formación en  gestión empresarial, desarrollada en organizaciones multinacionales y Pymes
            </p>
        </div>
    </header>

    <section class="ItemsAboutUs">
        <div class="ItemsAboutUs__div" data-aos='fade-right' data-aos-delay='80' data-aos-duration='1100' data-aos-once="true">
            <svg width="60px" height="60px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#FFFFFF"><path d="M20 11a8 8 0 10-16 0" stroke="#FFFFFF" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2 15.438v-1.876a2 2 0 011.515-1.94l1.74-.436a.6.6 0 01.745.582v5.463a.6.6 0 01-.746.583l-1.74-.435A2 2 0 012 15.439zM22 15.438v-1.876a2 2 0 00-1.515-1.94l-1.74-.436a.6.6 0 00-.745.582v5.463a.6.6 0 00.745.583l1.74-.435A2 2 0 0022 15.439zM20 18v.5a2 2 0 01-2 2h-3.5" stroke="#FFFFFF" stroke-width="1.7"></path><path d="M13.5 22h-3a1.5 1.5 0 010-3h3a1.5 1.5 0 010 3z" stroke="#FFFFFF" stroke-width="1.7"></path></svg>
            <h4 class="ItemsAboutUs__h4">SOPORTE EN TODO MOMENTO</h4>
        </div>
        <div class="ItemsAboutUs__div" data-aos='zoom-in' data-aos-delay='80' data-aos-duration='1100' data-aos-once="true">
            <svg width="60px" height="60px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#FFFFFF"><path d="M1 20v-1a7 7 0 017-7v0a7 7 0 017 7v1" stroke="#FFFFFF" stroke-width="1.7" stroke-linecap="round"></path><path d="M13 14v0a5 5 0 015-5v0a5 5 0 015 5v.5" stroke="#FFFFFF" stroke-width="1.7" stroke-linecap="round"></path><path d="M8 12a4 4 0 100-8 4 4 0 000 8zM18 9a3 3 0 100-6 3 3 0 000 6z" stroke="#FFFFFF" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            <h4 class="ItemsAboutUs__h4">PROFESIONALES CALIFICADOS</h4>
        </div>
        <div class="ItemsAboutUs__div" data-aos='fade-left' data-aos-delay='80' data-aos-duration='1100' data-aos-once="true">
            <svg width="60px" height="60px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#FFFFFF"><path d="M9 21h6m-6 0v-5m0 5H3.6a.6.6 0 01-.6-.6v-3.8a.6.6 0 01.6-.6H9m6 5V9m0 12h5.4a.6.6 0 00.6-.6V3.6a.6.6 0 00-.6-.6h-4.8a.6.6 0 00-.6.6V9m0 0H9.6a.6.6 0 00-.6.6V16" stroke="#FFFFFF" stroke-width="1.7"></path></svg>
            <h4 class="ItemsAboutUs__h4">GESTIÓN POR RESULTADOS</h4>
        </div>
    </section>
    
    <section class="DescriptionAboutUsSection"> 
        <!-- <h4 class="DescriptionAboutUsSection__h4">Somos profesionales con amplia trayectoria y formación en  gestión empresarial, desarrollada en organizaciones multinacionales</h4> -->
        <div class="DescriptionAboutUsSection__div">
            <p class="DescriptionAboutUsSection__p">
               Brindamos <b>soluciones</b> a empresas industriales y de servicios, tenemos una variada oferta de  alternativas y nos caracterizamos por adaptarlas a las <b>necesidades y particularidades de cada cliente</b>.
            </p>
        </div>
        <div class="DescriptionAboutUsSection__div">
            <p class="DescriptionAboutUsSection__p">
                Trabajamos durante años  en empresas multinacionales que nos permitieron  adquirir las experiencias y conocimientos necesarios para transformarnos en multiplicadores de soluciones hacia las organizaciones que nos contratan.
            </p>
        </div>
        <div class="DescriptionAboutUsSection__div">
            <p class="DescriptionAboutUsSection__p">
            Nuestro abanico de servicios es amplio, nos enfocamos en la resolución de necesidades referidas a la gestión de los <b>RRHH</b>, a la <b>mejora de procesos industriales o administrativos</b> , <b>capacitaciones</b>,  <b>implementación de sistemas de gestión a medida</b>,  acompañando a nuestros  clientes en cada una de las etapas de cada proyecto, con foco en la <b>mejora continua</b> y la <b>excelencia en la gestión</b>.
            </p>
        </div>
        <!-- <p class="DescriptionAboutUsSection__p"></p> -->
    </section> 

    <section class="OurServicesSection">
        <h2 class="OurServicesSection__h2 title--center-line">Servicios ofrecidos</h2>
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
            <svg width="35px" height="35px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF"><path d="M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" stroke="#3F72AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path><path d="M9 9c0-3.5 5.5-3.5 5.5 0 0 2.5-2.5 2-2.5 5M12 18.01l.01-.011" stroke="#3F72AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            <h3 class="OurHelpSection__h3">EN QUE PODEMOS <b>AYUDARTE</b> ?</h3>
            <p class="OurHelpSection__p">
                Consulte nuestros <b>servicios activos</b> para empresas y pónganse en <a href="/contacto">contacto</a> con nosotros.  
            </p>
            <div class="OurHelpSection__buttonsContainer">
                <a class="OurHelpSection__button" href="/servicios/">Ver servicios</a>
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