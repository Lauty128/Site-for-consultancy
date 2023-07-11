<!DOCTYPE html>
<html lang="es">

<head>
    <?php include_once "./templates/head.php" ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Consultora Industrial</title>
</head>

<body>
    <?php include_once "./templates/header.php" ?>

    <header class="Header">
        <?php include_once "./templates/menu.php" ?>
        <div class="Header__information">
            <h2 class="Header__name">SOLUCIONES EFICIENTES</h2>
            <p class="Header__p">
                Somos una empresa Argentina que surgió en la ciudad de Olavarría, provincia de Buenos Aires, con el fin de brindar servicios de consultoria a PyMEs y grandes organizaciones, permitiendo mejorar su ventaja competitiva en el mercado.   <br>
            </p>
            <p class="Header__p">
                Trabajamos resolviendo problemas bajo un enfoque integral, es decir analizando situaciones desde diferentes perspectivas y adaptando a los clientes las alternativas que tengan un impacto relevante en la operación y gestión del negocio. <br>
            </p>
            <!-- <p class="Header__p">
                Los servicios que brindamos se sustentan en la mejora de los procesos, implementación de sistemas de gestión a medida, gestión del capital humano y desarrollo de proyectos de mejora continua en conjunto con nuestros clientes. 
            </p> -->
            <button class="Header__button">
                <a href="/contacto">CONTACTANOS</a>
            </button>
        </div>
    </header>

    <section class="MainMessage">
        <div class="MainMessage__div" data-aos="zoom-in" data-aos-once="true">
            <svg width="60px" height="60px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#FFFFFF" data-aos="zoom-in">
                <path d="M7 9.01l.01-.011M11 9.01l.01-.011M7 13.01l.01-.011M11 13.01l.01-.011M7 17.01l.01-.011M11 17.01l.01-.011M15 21H3.6a.6.6 0 01-.6-.6V5.6a.6.6 0 01.6-.6H9V3.6a.6.6 0 01.6-.6h4.8a.6.6 0 01.6.6V9m0 12h5.4a.6.6 0 00.6-.6V9.6a.6.6 0 00-.6-.6H15m0 12v-4m0-8v4m0 0h2m-2 0v4m0 0h2" stroke="#FFFFFF" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <span class="MainMessage__span" id="MainMessage--works">
                + 0 Empresas
            </span>
            <p class="MainMessage__p">Confiaron en nuestras propuestas</p>
        </div>
        <div class="MainMessage__div" data-aos="zoom-in" data-aos-once="true">
            <svg width="60px" height="60px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#FFFFFF">
                <path d="M15 4V2m0 2v2m0-2h-4.5M3 10v9a2 2 0 002 2h14a2 2 0 002-2v-9H3zM3 10V6a2 2 0 012-2h2M7 2v4M21 10V6a2 2 0 00-2-2h-.5" stroke="#FFFFFF" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <span class="MainMessage__span" id="MainMessage--experience">
                + 0 Años
            </span>
            <p class="MainMessage__p">Equipo formado por profesionales capacitados</p>
        </div>
    </section>

    <section class="ObjetivesSection">
        <article class="ObjetivesSection__article" data-aos="fade-left" data-aos-delay="100" data-aos-duration="1300" data-aos-once="true">
            <div class="ObjetivesSection__imageContainer">
                <img src="public/assets/Objetive3.jpg" alt="" class="ObjetivesSection__image">
            </div>
            <div class="ObjetivesSection__info">
                <h4 class="ObjetivesSection__h4">
                    <svg width="24px" height="24px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF">
                        <path d="M6.745 4h10.568s-.88 13.257-5.284 13.257c-2.15 0-3.461-3.164-4.239-6.4C6.976 7.468 6.745 4 6.745 4z" stroke="#3F72AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M17.313 4s.921-.983 1.687-1c1.5-.034 1.777 1 1.777 1 .294.61.529 2.194-.88 3.657-1.41 1.463-2.987 2.743-3.629 3.2M6.745 4S5.785 3.006 5 3c-1.5-.012-1.777 1-1.777 1-.294.61-.529 2.194.88 3.657a29.896 29.896 0 003.687 3.2M8.507 20c0-1.829 3.522-2.743 3.522-2.743s3.523.914 3.523 2.743H8.507z" stroke="#3F72AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    MISIÓN
                </h4>
                <p class="ObjetivesSection__p">Nuestra razon de ser es brindar a nuestros clientes soluciones en gestión empresarial, logrando su satisfacción a través del alcance de los resultados esperados en cada uno de los proyectos ejecutados.</p>
            </div>
        </article>
        <article class="ObjetivesSection__article" data-aos="fade-right" data-aos-delay="100" data-aos-duration="1300" data-aos-once="true">
            <div class="ObjetivesSection__info">
                <h4 class="ObjetivesSection__h4">
                    <svg width="24px" height="24px" viewBox="0 0 24 24" stroke-width="1.7" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF">
                        <path d="M12 2L7 6.643S10.042 7 12 7c1.958 0 5-.357 5-.357L12 2zM8.5 7L5 10.94S7.625 12 12 12s7-1.06 7-1.06L15.5 7" stroke="#3F72AF" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path>
                        <path d="M6.5 11.5L3 15.523S5.7 18 12 18s9-2.477 9-2.477L17.5 11.5M12 22v-3" stroke="#3F72AF" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path>
                    </svg>
                    PILARES DE TRABAJO
                </h4>
                <p class="ObjetivesSection__p">Consideramos los siguientes 4 pilares al momento de diseñar soluciones correspondientes a una determinada problemática, tomando como base la mejora continua:</p>
                <ul class="ObjetivesSection__ul">
                    <li class="ObjetivesSection__li">Excelencia operacional</li>
                    <li class="ObjetivesSection__li">Desarrollo de personas</li>
                    <li class="ObjetivesSection__li">Visión estratégica</li>
                    <li class="ObjetivesSection__li">Satisfacción de los clientes</li>
                </ul>
            </div>
            <div class="ObjetivesSection__imageContainer">
                <img src="public/assets/Objetive2.jpg" alt="" class="ObjetivesSection__image">
            </div>
        </article>

        <p class="ObjetivesSection__p ObjetivesSection__p--bottom">
            Los servicios que brindamos se sustentan en la mejora de los procesos, implementación de sistemas de gestión a medida, gestión del capital humano y desarrollo de proyectos de mejora continua en conjunto con nuestros clientes. 
        </p>
    </section>

    <section class="CommitmentSection">
        <div class="CommitmentSection__information">
            <h2 class="CommitmentSection__title title--right-line">COMPROMISO</h2>
            <p class="CommitmentSection__text">
                Somos una empresa comprometida con nuestros clientes para que alcancen los objetivos deseados y mejoren los resultados de su negocio. 
            </p>
            <p class="CommitmentSection__text">
                Brindamos soporte y asesoria desde el análisis de problemáticas, diseño de soluciones su implementación y control. Nos comprometemos que en cada una de las etapas se alcancen los objetivos esperados y tomamos acciones correctivas y preventivas cuando se genera algun desvío respecto a lo esperado, siempre con foco en la satisfacción de nuestros clientes que depositan confianza en nosotros.
            </p>
            <p class="CommitmentSection__text">
                Poseemos  las herramientas, conocimientos y experiencia para ayudar a las organizaciones que desean encaminarse hacia la excelencia y por ende comenzar a transitar un camino de cambio cultural.
            </p>
            <a href="/quienes-somos" class="CommitmentSection__button">QUIENES SOMOS</a>
        </div>
        <img src="public/assets/undraw_businessman_re_mlee.svg" alt="man bussines illustration" class="CommitmentSection__image">
    </section>

    <section class="PointsSectionHome">
        <div class="PointsSectionHome__div">
            <svg width="65px" height="65px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ffff">
                <path d="M21 2l-1 1M3 2l1 1M21 16l-1-1M3 16l1-1M9 18h6M10 21h4M12 3C8 3 5.952 4.95 6 8c.023 1.487.5 2.5 1.5 3.5S9 13 9 15h6c0-2 .5-2.5 1.5-3.5h0c1-1 1.477-2.013 1.5-3.5.048-3.05-2-5-6-5z" stroke="#ffff" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <h4 class="PointsSectionHome__name">INNOVACIÓN</h4>
        </div>
        <div class="PointsSectionHome__separator"></div>
        <div class="PointsSectionHome__div">
            <svg width="65px" height="65px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ffff">
                <path d="M20 20H4V4" stroke="#ffff" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M4 16.5L12 9l3 3 4.5-4.5" stroke="#ffff" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <h4 class="PointsSectionHome__name">CRECIMIENTO</h4>
        </div>
        <div class="PointsSectionHome__separator"></div>
        <div class="PointsSectionHome__div">
            <svg width="65px" height="65px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#ffff">
                <path d="M10 9.01l.01-.011M14 9.01l.01-.011M10 13.01l.01-.011M14 13.01l.01-.011M10 17.01l.01-.011M14 17.01l.01-.011M6 20.4V5.6a.6.6 0 01.6-.6H12V3.6a.6.6 0 01.6-.6h4.8a.6.6 0 01.6.6v16.8a.6.6 0 01-.6.6H6.6a.6.6 0 01-.6-.6z" stroke="#ffff" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path>
            </svg>
            <h4 class="PointsSectionHome__name">TRANSFORMACIÓN</h4>
        </div>
    </section>

    <?php include_once './templates/contactSection.php' ?>


    <?php include_once "./templates/footer.php" ?>

    <script type="module" src="/public/js/index.js"></script>
    <script>
        // This script enables the number increaser effect
        function sumarNumeros(span, quantity, text) {
            let index = 0;
            const interval = setInterval(() => {
                span.textContent = '+ ' + index + ' ' + text;
                index++

                if (index == (quantity + 1)) {
                    clearInterval(interval)
                }
            }, 90)
        }

        let executeSumarNumeros = true
        const commitmentImage = document.querySelector('.CommitmentSection__image')
        const commitmentInfo = document.querySelector('.CommitmentSection__information')
        // Si la seccion de MainMessage esta en la pantalla grafica ejecutar estos script
        window.addEventListener('scroll', () => {
            const Y = document.querySelector('.MainMessage').getBoundingClientRect().y;

            if ((Y < 450 && Y > 0) && executeSumarNumeros) {
                sumarNumeros(document.getElementById('MainMessage--experience'), 15, 'Años')
                sumarNumeros(document.getElementById('MainMessage--works'), 10, 'Empresas')
                executeSumarNumeros = false
            }

            if ((Y < -385) && (Y > -880) && (window.innerWidth > 820)){
                const incrementor = Y*(-1) - 900;
                commitmentInfo.style.transform = `translateX(${incrementor * .3}px)`
                commitmentImage.style.transform = `translateX(${incrementor * -.3}px)`
            }

        })
    </script>

    <!-- AOS LOADING -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>

</html>