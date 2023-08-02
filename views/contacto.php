<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "./templates/head.php" ?>
    <title>Contacto</title>
</head>
<body>
    <?php include_once "./templates/header.php" ?>

    <header class="Header Header--simple" style="height: fit-content; overflow:visible; background: none"> 
        <?php include_once "./templates/menu.php" ?>
        <!-- <h2 class="Header__title">CONTACTANOS</h2> -->
    </header>

    <section class="ContactSection ContactSection--background" style="padding-top: 100px;">
        

        <div class="ContactSection__contactsSection"  data-aos="fade-up" data-aos-delay="100" data-aos-duration="1300" data-aos-once="true">
            <div class="ContactSection__cardsContainer">
            <h3 class="ContactSection__h3 title--right-line">CONSULTAS GENERALES</h3>
                <div class="ContactSection__card">
                    <svg width="26px" height="26px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#FFFF"><path d="M7 9l5 3.5L17 9" stroke="#FFFF" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path><path d="M2 17V7a2 2 0 012-2h16a2 2 0 012 2v10a2 2 0 01-2 2H4a2 2 0 01-2-2z" stroke="#FFFF" stroke-width="1.7"></path></svg>
                    consultas@dominio.com
                </div>
                <div class="ContactSection__card">
                    <svg width="26px" height="26px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#FFFF"><path d="M18.118 14.702L14 15.5c-2.782-1.396-4.5-3-5.5-5.5l.77-4.13L7.815 2H4.064c-1.128 0-2.016.932-1.847 2.047.42 2.783 1.66 7.83 5.283 11.453 3.805 3.805 9.286 5.456 12.302 6.113 1.165.253 2.198-.655 2.198-1.848v-3.584l-3.882-1.479z" stroke="#FFFF" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    2284 - 000000
                </div>
                <div class="ContactSection__cityCard flex-center-center">
                    <svg width="32px" height="32px" stroke-width="2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#FFFF"><path d="M20 10c0 4.418-8 12-8 12s-8-7.582-8-12a8 8 0 1116 0z" stroke="#FFFF" stroke-width="2"></path><path d="M12 11a1 1 0 100-2 1 1 0 000 2z" fill="#FFFF" stroke="#FFFF" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    <span>Olavarria, Buenos Aires</span>
                </div>
            </div>
            <form class="ContactSection__form" method="post" action="/">
                <input type="text" id="name-input" name="name" placeholder="Nombre" class="ContactSection__input">
                <input type="text" id="email-input" name="email" placeholder="Email" class="ContactSection__input">
                <input type="text" id="phone-input" name="phone" placeholder="Telefono" class="ContactSection__input">
                <input type="text" id="subject-input" name="subject" placeholder="Asunto" class="ContactSection__input">
                <textarea id="message-input" name="message" rows="10" placeholder="Mensaje" class="ContactSection__input"></textarea>
                <input type="submit" value="ENVIAR" class="ContactSection__submit">
            </form>
        </div>
    </section>

    <section class="ContactSection ContactSection--darkMode" style="background: none; background-color:#052142">
        <div class="ContactSection__contactsSection ContactSection__contactsSection--revert" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1300" data-aos-once="true">
            <form class="ContactSection__form" method="post" action="/" style="padding: 0; border:none;">
                <input type="text" name="name" placeholder="Nombre" class="ContactSection__input">
                <input type="text" name="email" placeholder="Email" class="ContactSection__input">
                <input type="text" name="phone" placeholder="Telefono" class="ContactSection__input">
                <select name="service" class="ContactSection__input">
                    <option value="">Servicio</option>
                    <?php foreach ($services as $key => $service){ ?>
                        <option value="<?php echo $service['id'] ?>"><?php echo $service['name'] ?></option>
                    <?php } ?>
                </select>
                <textarea name="message" rows="10" placeholder="Mensaje" class="ContactSection__input"></textarea>
                <div>
                    <input type="checkbox" name="information" id="information-input">
                    <label for="information-input" style="margin-right: 30px; user-select:none">Información</label>
                    <input type="checkbox" name="budget" id="budget-input">
                    <label for="budget-input" style="user-select:none">Presupuesto</label>
                </div>
                <input type="submit" value="ENVIAR" class="ContactSection__submit">
            </form>

            <div class="ContactSection__cardsContainer">
                <h3 class="ContactSection__h3 title--right-line">SERVICIOS</h3>
                <p style="margin-bottom: 40px; font-size: 1.2em;">Consulte sobre nuestros servicios disponibles para empresas, completando el formulario y especificando los detalles que considere necesarios.</p>
                <a class="ContactSection__fileButton" href="/servicios" >Ver servicios</a>
                <p style="font-size: 1.2em;">Puedes ver mas Información sobre los servicios que ofrecemos dando click en el boton</p>
            </div>
        </div>
    </section>

    <?php include_once "./templates/footer.php" ?>
    
    <script src="/public/js/index.js"></script>
</body>
</html>