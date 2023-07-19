<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "./templates/head.php" ?>
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
                Trabajamos durante años  en empresas multinacionales que nos permitieron  adquirir las experiencias y conocimientos necesarios para transformarnos en multiplicadores de soluciones hacia las organizaciones que nos contratan.
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
            <svg width="60px" height="60px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#FFFFFF"><path d="M20 11a8 8 0 10-16 0" stroke="#FFFFFF" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2 15.438v-1.876a2 2 0 011.515-1.94l1.74-.436a.6.6 0 01.745.582v5.463a.6.6 0 01-.746.583l-1.74-.435A2 2 0 012 15.439zM22 15.438v-1.876a2 2 0 00-1.515-1.94l-1.74-.436a.6.6 0 00-.745.582v5.463a.6.6 0 00.745.583l1.74-.435A2 2 0 0022 15.439zM20 18v.5a2 2 0 01-2 2h-3.5" stroke="#FFFFFF" stroke-width="1.7"></path><path d="M13.5 22h-3a1.5 1.5 0 010-3h3a1.5 1.5 0 010 3z" stroke="#FFFFFF" stroke-width="1.7"></path></svg>
            <h4 class="ItemsAboutUs__h4">SOPORTE EN TODO MOMENTO</h4>
        </div>
        <div class="ItemsAboutUs__div" data-aos='fade-down' data-aos-delay='80' data-aos-duration='1100'>
            <svg width="60px" height="60px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#FFFFFF"><path d="M1 20v-1a7 7 0 017-7v0a7 7 0 017 7v1" stroke="#FFFFFF" stroke-width="1.7" stroke-linecap="round"></path><path d="M13 14v0a5 5 0 015-5v0a5 5 0 015 5v.5" stroke="#FFFFFF" stroke-width="1.7" stroke-linecap="round"></path><path d="M8 12a4 4 0 100-8 4 4 0 000 8zM18 9a3 3 0 100-6 3 3 0 000 6z" stroke="#FFFFFF" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            <h4 class="ItemsAboutUs__h4">PROFESIONALES CALIFICADOS</h4>
        </div>
        <div class="ItemsAboutUs__div" data-aos='fade-left' data-aos-delay='80' data-aos-duration='1100'>
            <svg width="60px" height="60px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#FFFFFF"><path d="M9 21h6m-6 0v-5m0 5H3.6a.6.6 0 01-.6-.6v-3.8a.6.6 0 01.6-.6H9m6 5V9m0 12h5.4a.6.6 0 00.6-.6V3.6a.6.6 0 00-.6-.6h-4.8a.6.6 0 00-.6.6V9m0 0H9.6a.6.6 0 00-.6.6V16" stroke="#FFFFFF" stroke-width="1.7"></path></svg>
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
            <div class="OurHelpSection__buttonsContainer">
                <a class="OurHelpSection__button" href="/servicios/">Servicios</a>
            </div>
        </div>
        <!-- <span class="OurHelpSection__span">Para más información puedes comunicarte con nosotros dando <a href="/contacto">click aquí</a></span> -->
    </section>


    <section class="ContactSection">
        <h2 class="ContactSection__title title--center-line">CONTACTANOS</h2>
        <p class="ContactSection__p">
            Consultanos lo que consideres necesario completando el siguiente formulario o a través de Whatsapp al número de telefono y le responderemos a la brevedad. Su consulta no molesta.
        </p>

        <div class="ContactSection__contactsSection"  data-aos="fade-up" data-aos-delay="100" data-aos-duration="1300" data-aos-once="true">
            <div class="ContactSection__cardsContainer">
                <div class="ContactSection__card">
                    <svg width="26px" height="26px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#FFFF"><path d="M7 9l5 3.5L17 9" stroke="#FFFF" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2 17V7a2 2 0 012-2h16a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2z" stroke="#FFFF" stroke-width="1.7"></path></svg>
                    consultas@dominio.com
                </div>
                <div class="ContactSection__card">
                    <svg width="26px" height="26px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#FFFF"><path d="M18.118 14.702L14 15.5c-2.782-1.396-4.5-3-5.5-5.5l.77-4.13L7.815 2H4.064c-1.128 0-2.016.932-1.847 2.047.42 2.783 1.66 7.83 5.283 11.453 3.805 3.805 9.286 5.456 12.302 6.113 1.165.253 2.198-.655 2.198-1.848v-3.584l-3.882-1.479z" stroke="#FFFF" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    2284 - 000000
                </div>
                <div class="ContactSection__card">
                    <svg width="26px" height="26px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#FFFF"><path d="M20 10c0 4.418-8 12-8 12s-8-7.582-8-12a8 8 0 1116 0z" stroke="#FFFF" stroke-width="1.5"></path><path d="M12 11a1 1 0 100-2 1 1 0 000 2z" fill="#FFFF" stroke="#FFFF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    Olavarria, Buenos Aires
                </div>
            </div>
            <form class="ContactSection__form" method="post" action="/">
                <input type="text" name="name" placeholder="Nombre completo" class="ContactSection__input">
                <input type="text" name="email" placeholder="Email" class="ContactSection__input">
                <input type="text" name="phone" placeholder="Telefono" class="ContactSection__input">
                <input type="text" name="subject" placeholder="Asunto" class="ContactSection__input">
                <textarea name="message" rows="10" placeholder="Mensaje" class="ContactSection__input"></textarea>
                <input type="submit" value="ENVIAR" class="ContactSection__submit">
            </form>
        </div>
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