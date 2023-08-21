<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "../templates/head.php" ?>
    <title>Capital Humano</title>
</head>
<body>

    <?php include_once "../templates/header.php" ?>

    <header class="Header" style="height: fit-content; overflow:visible; background: none"> 
        <?php include_once "../templates/menu.php" ?>
    </header>

    <section class="Service">
    
    <article class="Service__mainData">
            <div>
                <h2 class="Service__h2">Capital Humano</h2>
                <p class="Service__mainDescription">
                    Trabajar en la mejora de la <b>gestión del capital humano</b> es una inversión estratégica que genera un <b>gran impacto</b> en las organizaciones. 
                </p>
                <a href="#contacto" class="Service__contactButton">Me interesa</a>
            </div>
            <!-- <div class="Service__imageContainer"> -->
                <img src="/admin/images/services/rrhh.jpg" alt="" class="Service__image">
            <!-- </div> -->
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
                <p style="color:#787878">No es necesario especificar el servicio de interés. Al enviar el formulario desde aquí, sabremos que desea obtener más información de <b>Capital humano</b></p>

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
                <input type="hidden" name="service" value="8966Mi6">
                <input type="submit" value="ENVIAR" class="ContactSection__submit">
            </form>
        </div>
    </section>

    <?php include_once "../templates/footer.php" ?>

    <script src="/public/js/index.js"></script>
</body>
</html>