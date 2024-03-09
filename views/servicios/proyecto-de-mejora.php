<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "../templates/head.php" ?>
    <title>Proyectos de Mejora</title>
</head>
<body>

    <?php include_once "../templates/header.php" ?>

    <header class="Header" style="height: fit-content; overflow:visible; background: none"> 
        <?php include_once "../templates/menu.php" ?>
    </header>

    <section class="Service">
    
        <article class="Service__mainData">
            <div>
                <h2 class="Service__h2">Proyectos de Mejora</h2>
                <p class="Service__mainDescription">
                    Nos basamos en los <b>principios y herramientas</b> de ciertas metodologías como <b>Lean manufacturing</b> y <b>Kaizen</b> para inducir a nuestros clientes en dichos conceptos y los apliquen dentro de sus proyectos. Acompañamos al cliente en cada una de las etapas de ejecución de cada proyecto
                </p>
                <a href="#contacto" class="Service__contactButton">Me interesa</a>
            </div>

            <img src="/public/assets/services/pdm.jpg" alt="" class="Service__image">
        </article>

        <article class="Service__mainServicesSection">
            <h3>Servicios principales</h3>
            <div class="Service__mainServices flex-center-center">
                <div class="Service__serviceCard Service__serviceCard--counter Service__serviceCard--blue flex-center-center">
                    <span style="text-align: center">Reuniones con nuestros clientes para definir la cartera de proyectos potenciales</span>
                </div>
                <div class="Service__serviceCard Service__serviceCard--counter Service__serviceCard--blue flex-center-center">
                    <span style="text-align: center">Priorización de proyectos a implementar estableciendo criterios <br> (junto con la dirección de la empresa cliente)</span>
                </div>
                <div class="Service__serviceCard Service__serviceCard--counter Service__serviceCard--blue flex-center-center">
                    <span style="text-align: center">Definición de equipos de trabajo para cada proyecto<br>(involucrando personal de la empresa cliente)</span>
                </div>
                <div class="Service__serviceCard Service__serviceCard--counter Service__serviceCard--blue flex-center-center">
                    <span style="text-align: center">Cálculo de ganancia estimada<br>(proyectos seleccionados)</span>
                </div>
                <div class="Service__serviceCard Service__serviceCard--counter Service__serviceCard--blue flex-center-center">
                    <span style="text-align: center">Establecimiento de objetivos por proyecto</span>
                </div>
                <div class="Service__serviceCard Service__serviceCard--counter Service__serviceCard--blue flex-center-center">
                    <span style="text-align: center">Capacitación a los integrantes de cada proyecto<br>(metodologías de mejora continua)</span>
                </div>
                <div class="Service__serviceCard Service__serviceCard--counter Service__serviceCard--blue flex-center-center">
                    <span style="text-align: center">Acompañamiento<br>(durante la implementación)</span>
                </div>
                <div class="Service__serviceCard Service__serviceCard--counter Service__serviceCard--blue flex-center-center">
                    <span style="text-align: center">Reuniones<br>(asesoramiento y seguimiento con cada equipo)</span>
                </div>
            </div>
        </article>

        <article class="Service__benefits flex-center-start">
            <div class="Service__benefits-imageContainer">
                <img style="width: 100%; height:100%" 
                    src="https://images.unsplash.com/photo-1574073763042-9dbe6ae03853?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MjB8fGJlbmVmaWNpb3N8ZW58MHx8MHx8fDA%3D&auto=format&fit=crop&w=500&q=60">
            </div>
            <div class="Service__benefits-info" style="margin-top: 20px;">
                <h4>¿Que beneficios proporciona el servicio a la empresa?</h4>
                <ul>
                    <li class="VacancyData__li" style="padding:5px 0 5px 5px;">Objetivos asociados al plan estratégico de la compañía</li>
                    <li class="VacancyData__li" style="padding:5px 0 5px 5px;">Disminución de pérdidas a través de soluciones encontradas en los proyectos implementados</li>
                    <li class="VacancyData__li" style="padding:5px 0 5px 5px;">Participación del personal en todos los niveles de la organización</li>
                    <li class="VacancyData__li" style="padding:5px 0 5px 5px;">Transformación cultural enfocada en “cero pérdida”</li>
                    <li class="VacancyData__li" style="padding:5px 0 5px 5px;">Generación de planes de mejora sustentables y de alto impacto</li>
                    <li class="VacancyData__li" style="padding:5px 0 5px 5px;">Estandarización de los procesos y puestos de trabajo</li>
                    <li class="VacancyData__li" style="padding:5px 0 5px 5px;">Mejora considerable de la cuenta de resultados de la compañía</li>
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
                    2284 - 000000
                </div>
                <p style="color:#787878">No es necesario especificar el servicio de interés. Al enviar el formulario desde aquí, sabremos que desea obtener más información de <b>Proyecto de mejora</b></p>
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
                <input type="hidden" name="service" value="oM641BB">
                <input type="submit" value="Enviar" class="ContactSection__submit">
            </form>
        </div>
    </section>


    <?php include_once "../templates/footer.php" ?>

    <script src="/public/js/index.js"></script>
</body>
</html>