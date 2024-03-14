<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "../templates/head.php" ?>
    <title>Excelencia Operacional</title>
    <meta name="description" content="Sabemos la importancia que amerita que nuestros clientes adquieran un sistema de gestión sólido para poder administrar correctamente las diferentes áreas de la organización.">
</head>
<body>

    <?php include_once "../templates/header.php" ?>

    <header class="Header" style="height: fit-content; overflow:visible; background: none"> 
        <?php include_once "../templates/menu.php" ?>
    </header>

    <section class="Service">

        <article class="Service__mainData">
            <div>
                <h2 class="Service__h2">Excelencia Operacional</h2>
                <p class="Service__mainDescription">
                    Sabemos la importancia que amerita que nuestros clientes adquieran un <b>sistema de gestión sólido</b> para poder <b>administrar correctamente las diferentes áreas de la organización</b>. 
                </p>
                <a href="#contacto" class="Service__contactButton">Me interesa</a>
            </div>
            <!-- <div class="Service__imageContainer"> -->
                <img src="/public/assets/services/eo.png" alt="" class="Service__image">
            <!-- </div> -->
        </article>

        <article class="Service__mainServicesSection">
            <h3>Servicios principales</h3>
            <div class="Service__mainServices flex-center-center">
                <div class="Service__serviceCard flex-center-center">
                    <span class="title--center-line">Sistemas de mejora</span>
                    <p>Desarrollamos sistemas de mejora continua a la medida de cada cliente, bajo la aplicación de metodologías eficientes como: Lean Manufacturing, TPM, mantenimiento autónomo, Kaizen, 5s. </p>
                </div>
                <div class="Service__serviceCard flex-center-center">
                    <span class="title--center-line">Gestión de calidad</span>
                    <p>Desarrollamos el sistema de gestión de calidad a medida de cada cliente, aplicando herramientas y metodologías apropiadas y de acuerdo a los requisitos establecidos en la norma ISO9001. <br> Acompañamos a cada cliente en la preparación previa para atravesar un proceso de auditoria externa de acuerdo a la norma ISO9001</p>
                </div>
                <div class="Service__serviceCard flex-center-center">
                    <span class="title--center-line">Gestión documental</span>
                    <p>
                        Desarrollamos una base de documentos adaptables a las características y estructura de cada empresa cliente. Dicha documentación permite organizar y controlar el funcionamiento de cada proceso y área funcional. <br> Ejemplo: manuales, procedimientos, instructivos, formularios, etc.
                    </p>
                </div>
            </div>
        </article>

        <article class="Service__benefits flex-center-start">
            <div class="Service__benefits-imageContainer">
                <img style="width: 100%; height:100%"
                src="https://images.unsplash.com/photo-1616628188506-4ad99d65640e?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8c2lzdGVtYXN8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60" alt="">
            </div>
            <div class="Service__benefits-info">
                <h4>¿Que beneficios proporciona el servicio a la empresa?</h4>
                <p>La mejora de los procesos y su estandarización permite además de certificar los requisitos de una norma determinada como por ejemplo la ISO9001, implementar los métodos de trabajo a ejecutar en cada puesto y las variables de cada proceso que deben cumplirse para lograr los resultados esperados en toda la organización, por ejemplo:</p>
                <ul>
                    <li class="VacancyData__li">Reducción de los tiempos de cada tarea</li>
                    <li class="VacancyData__li">Reducción de costos</li>
                    <li class="VacancyData__li">Mejora de la productividad</li>
                    <li class="VacancyData__li">Mejora en la capacitación de las personas</li>
                    <li class="VacancyData__li">Disminución de las paradas de máquina</li>
                    <li class="VacancyData__li">Mejora de la calidad de los productos</li>
                    <li class="VacancyData__li">Mejora en la eficiencia de los procesos</li>
                    <li class="VacancyData__li">Mejora de las utilidades económicas</li>
                </ul>
            </div>
        </article>

    </section>


    <section class="ContactSection ContactSection--background" id="contacto">
        <h2 class="ContactSection__title title--center-line">Consulta más información</h2>

        <div class="ContactSection__contactsSection"  data-aos="fade-up" data-aos-delay="100" data-aos-duration="1300" data-aos-once="true">
            <div class="ContactSection__cardsContainer">
                <div class="ContactSection__cityCard flex-center-center">
                    <svg width="32px" height="32px" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#FFFF"><path d="M20 10c0 4.418-8 12-8 12s-8-7.582-8-12a8 8 0 1116 0z" stroke="#FFFF" stroke-width="2"></path><path d="M12 11a1 1 0 100-2 1 1 0 000 2z" fill="#FFFF" stroke="#FFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    <span>Olavarria, Buenos Aires</span>
                </div>
                <div class="ContactSection__card">
                    <svg width="26px" height="26px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#FFFF"><path d="M18.118 14.702L14 15.5c-2.782-1.396-4.5-3-5.5-5.5l.77-4.13L7.815 2H4.064c-1.128 0-2.016.932-1.847 2.047.42 2.783 1.66 7.83 5.283 11.453 3.805 3.805 9.286 5.456 12.302 6.113 1.165.253 2.198-.655 2.198-1.848v-3.584l-3.882-1.479z" stroke="#FFFF" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    <?= App::$phone ?>
                </div>
                <p style="color:#787878">No es necesario especificar el servicio de interés. Al enviar el formulario desde aquí, sabremos que desea obtener más información de <b>Excelencia operacional</b></p>
            </div>
            <form class="ContactSection__form" method="post" action="/servicios/" onsubmit="sendMail(event)">
                <input type="text" name="name" id="name-input" placeholder="Nombre completo" class="ContactSection__input">
                <input type="text" name="email" id="email-input" placeholder="Email" class="ContactSection__input">
                <input type="text" name="phone" id="phone-input" placeholder="Telefono" class="ContactSection__input">
                <textarea name="message" rows="10" id="message-input" placeholder="Mensaje" class="ContactSection__input"></textarea>
                <div>
                    <input type="checkbox" name="information" id="information-input">
                    <label for="information-input" style="margin-right: 30px; user-select:none">Información</label>
                    <input type="checkbox" name="budget" id="budget-input">
                    <label for="budget-input" style="user-select:none">Presupuesto</label>
                </div>
                <!-- INPUT INVISIBLE SOBRE EL SERVICIO -->
                <input type="hidden" name="service" value="kQ694sT">
                <input type="submit" value="Enviar" class="ContactSection__submit">
            </form>
        </div>
    </section>

    <?php include_once "../templates/footer.php" ?>

    <script src="/public/js/index.js"></script>
</body>
</html>