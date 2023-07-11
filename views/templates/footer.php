<section class="Slogan">
        <h2 class="Slogan__h2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1100">IMPULSA TU NEGOCIO CON AYUDA DE PROFESIONALES</h2>
    </section>

<footer class="Footer">
    <div class="Footer__mapsContainer">
        <img src="/public/assets/statics/Logo.png" alt="logo empresa" class="Footer__image">
        <div class="Footer__map">
            <span class="Footer__span">Servicios</span>
            <?php 
                foreach ($services as $key => $service) {
                    echo "<a href='/servicios/".$service['url']."' class='Footer__a'>";
                    echo "<svg width='15px' height='15px' stroke-width='1.7' viewBox='0 0 24 24' fill='none' xmlns='http://www.w3.org/2000/svg' color='#4e4e4e'><path d='M9 6l6 6-6 6' stroke='#4e4e4e' stroke-width='1.7' stroke-linecap='round' stroke-linejoin='round'></path></svg>";
                    echo $service['name'];
                    echo "</a>";
                }
            ?>
        </div>
        <div class="Footer__map">
            <span class="Footer__span">Mapa del sitio</span>
            <a href="/" class="Footer__a">Inicio</a>
            <a href="/quienes-somos" class="Footer__a">Quienes somos</a>
            <a href="/servicios/" class="Footer__a">Servicios</a>
            <a href="/cursos" class="Footer__a">Cursos</a>
            <a href="/vacantes" class="Footer__a">Vacantes</a>
            <a href="/novedades" class="Footer__a">Novedades</a>
            <a href="/contacto" class="Footer__a">Contacto</a>
        </div>
    </div>

    <div class="Footer__bottomInfoContainer">
        <span class="Footer__bottomInfo">
        © 2023 | Consultoría en el área industrial y servicios
        </span>
    </div>
</footer>