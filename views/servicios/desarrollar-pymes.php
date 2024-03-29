<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "../templates/head.php" ?>
    <title>Desarrollar Pymes</title>
</head>
<body>

    <?php include_once "../templates/header.php" ?>

    <header class="Header" style="height: fit-content; overflow:visible; background: none"> 
        <?php include_once "../templates/menu.php" ?>
    </header>

    <section class="Service">
    
        <article class="Service__mainData">
            <div>
                <h2 class="Service__h2">Desarrollar Pymes</h2>
                <p class="Service__mainDescription">
                Realizamos un <b>diagnóstico completo</b> de la empresa con el fin de detectar <b>oportunidades de mejora</b> en cada una de las áreas y niveles jerárquicos, presentamos un análisis  y <b>plan de trabajo</b> a la dirección de la empresa, estructurando la implantación de dicho plan mediante etapas y su correspondiente <b>seguimiento</b> de avances.
                </p>
                <a href="#contacto" class="Service__contactButton">Me interesa</a>
            </div>

            <img src="/public/assets/services/dp.jpg" alt="" class="Service__image">
        </article>

        <article class="Service__mainServicesSection">

            <p style="text-align:center; font-size:1.2em; color:#787878; max-width:800px; margin:auto auto 1.5em auto">El programa consiste en brindar soporte a las Pymes para su potenciamiento desde cuestiones estratégicas hasta cuestiones operativas.</p>

            <h3>Servicios</h3>
            <div class="Service__mainServices flex-center-center">
                <div class="Service__serviceCard Service__serviceCard--counter Service__serviceCard--blue flex-center-center">
                    <span style="text-align: center">Planeamiento estratégico</span>
                </div>
                <div class="Service__serviceCard Service__serviceCard--counter Service__serviceCard--blue flex-center-center">
                    <span style="text-align: center">Desarrollo de indicadores claves del negocio y tablero de control.</span>
                </div>
                <div class="Service__serviceCard Service__serviceCard--counter Service__serviceCard--blue flex-center-center">
                    <span style="text-align: center">Organización integral de la empresa</span>
                </div>
                <div class="Service__serviceCard Service__serviceCard--counter Service__serviceCard--blue flex-center-center">
                    <span style="text-align: center">Profesionalización de puestos de trabajo</span>
                </div>
                <div class="Service__serviceCard Service__serviceCard--counter Service__serviceCard--blue flex-center-center">
                    <span style="text-align: center">Capacitaciones a mandos medios en temas a necesidad del cliente.</span>
                </div>
                <div class="Service__serviceCard Service__serviceCard--counter Service__serviceCard--blue flex-center-center">
                    <span style="text-align: center">Soporte completo en implementación de proyectos de mejora continua</span>
                </div>
                <div class="Service__serviceCard Service__serviceCard--counter Service__serviceCard--blue flex-center-center">
                    <span style="text-align: center">Estandarización de procesos administrativos y operativos.</span>
                </div>
                <div class="Service__serviceCard Service__serviceCard--counter Service__serviceCard--blue flex-center-center">
                    <span style="text-align: center">Capacitaciones en temas de mejora continua.</span>
                </div>
                
            </div>

            <p class="ObjetivesSection__p ObjetivesSection__p--bottom">
            Trabajamos en conjunto con el cliente en cada una de las etapas presentadas en el plan de trabajo, dando el soporte necesario para alcanzar el éxito esperado.
            </p>

        </article>

        <article class="Service__benefits flex-center-start">
            <div class="Service__benefits-imageContainer">
                <img style="width: 100%; height:100%" 
                    src="/public/assets/objetivo-general.webp">
            </div>
            <div class="Service__benefits-info" style="margin-top: 20px;">
                <h4>Objetivos</h4>
                <p>Tenemos como objetivo principal transmitir a las empresas Pymes acerca de la importancia y necesidad de tomar un camino de cambio cultural y de profesionalización de sus áreas para poder aumentar su competitividad en el mercado, eficiencia operativa, productividad, disminución de la estructura de costos y como consecuencia mejorar su utilidad económica.</p>
                <p>Con este fin proponemos trabajar en los puntos mencionados anteriormente y en otros diferentes que puedan ser una necesidad del cliente.</p>
                <p>Debe entenderse que transitar un cambio cultural en la formas de trabajo y profesionalizarse no es un costo para las empresas, sino una inversión.</p>
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
                <p style="color:#787878">No es necesario especificar el servicio de interés. Al enviar el formulario desde aquí, sabremos que desea obtener más información de <b>Desarrollar Pymes</b></p>
            </div>
            <form class="ContactSection__form" method="post" action="/servicios/">
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
                <input type="hidden" name="service" value="r5641fg">
                <input type="submit" value="ENVIAR" class="ContactSection__submit">
            </form>
        </div>
    </section>


    <?php include_once "../templates/footer.php" ?>

    <script src="/public/js/index.js"></script>
</body>
</html>