<?php 
    if(!isset($services)){
        if(file_exists('../data/services.json')){
            $servicesFile = file_get_contents('../data/services.json');
        }
        else $servicesFile = file_get_contents('../../data/services.json');
        $services = json_decode($servicesFile, true);
    }
?>

<nav class="Menu">
    <ul class="Menu__container">
        <li class="Menu__li">
            <a href="/" class="Menu__a Menu__a--simple">INICIO</a>
        </li>
        <li class="Menu__li">
            <a href="/quienes-somos" class="Menu__a Menu__a--simple">QUIENES SOMOS</a>
        </li>
        <li class="Menu__li">
            <span class="Menu__a Menu__a--simple">
                SERVICIOS 
                <svg width="24px" height="24px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#FFFF"><path d="M6 9l6 6 6-6" stroke="#FFFF" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            </span>
            <ul class="Menu__subMenu">
                <?php 
                    foreach ($services as $key => $service){
                        echo "<li><a href='/servicios/".$service['url']."'>".$service['name']."</a></li>";
                    }
                ?>
            </ul>
        </li>
        <li class="Menu__li">
            <a href="/vacantes" class="Menu__a Menu__a--simple">VACANTES</a>
        </li>
        <!-- <li class="Menu__li">
            <a href="/cursos" class="Menu__a Menu__a--simple">CURSOS</a>
        </li> -->
        <li class="Menu__li">
            <a href="/novedades" class="Menu__a Menu__a--simple">NOVEDADES</a>
        </li>
        <li class="Menu__li">
            <a href="/contacto" class="Menu__a Menu__a--contact">CONTACTO</a>
        </li>
    </ul>
    <span class="Menu__exitButton">
        OCULTAR
        <svg width="24px" height="24px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF    "><path d="M9 6l6 6-6 6" stroke="#3F72AF    " stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
    </span>
</nav>

<nav class="MenuMobile">
    <span class="MenuMobile__span">MENU</span>
    <div class="MenuMobile__button">
        <svg width="40px" height="40px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#FFFF"><path d="M3 5h8M3 12h13M3 19h18" stroke="#FFFF" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
    </div>
</nav>