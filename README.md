# SOLUCIONES EFICIENTES

 Sitio web para una consultora, con conexion a una base de datos para obtener datos de Cursos, Vacantes de trabajo y articulos para una   seccion de novedades.   
 Aqui se encuentra toda la documentación de este sitio web. Con esta documentación podras utilizar este sitio web como template y crear  otro sitio.

## Dependencies used

 The code of these Dependencies was implemented in the project folder for not using Composer.  
 3 dependencies were used for working on this project:

#### Flight PHP
 This dependencie allows the correct operation of the [API](#api).   
 You can use Composer to import it or download the file from the site
 > [Link to the page](https://flightphp.com)

#### PHPMailer
 PHPMailer is the most populare dependencie for handling mails. Iqual that [Flight PHP](#flight-php), you can download the files from the site or implement it with Composer.
 > [Link to the page](https://github.com/PHPMailer/PHPMailer)

#### TinyMCE
 TinyMCE is a rich-text editor that allows users to create formatted content within a user-friendly interface.
 This dependencie is used for writing articles for the news sections. This text-editor is in administrative panel, wich can only be entered by the owner of the site.
 > [Link to the page](https://www.tiny.cloud/)

---

## Indice
* [Pages](#pages)
  * [Templates](#format)
  * [Styles](#styles)
    * [Components]()
    * [Effects]()
    * [Mixins]()
  * [Forms](#forms)
  * [Courses page](#courses-page)
* [API](#api)
  * [Controllers](#controllers) 
  * [Services](#services) 

## Pages
Each page has its own format and SASS is used for the styles.   
Here are explained the parts of a page

### Templates  
There are 4(four) partials that are used on all pages.  

**Head**  
This only contains the labels of the `<head>` wich are used in all pages 
``` php
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="/public/css/index.css">
<link rel="shortcut icon" href="/public/assets/statics/Logo.png" type="image/png">
``` 

**Header**  
Information about the consulting firm at the top of the site
``` php
<div class="Top-information">
    <img src="/public/assets/statics/Banner.png" alt="logo empresa" class="Top-information__image">
    <div class="Top-information__div">
            //--- Icon in SVG format
            2284 - 000000
        </span>
        <span class="Top-information__span">
            //--- Icon in SVG format
            consultas@dominio.com
        </span>
    </div>
</div>
``` 

**Menu**  
The menu has a little more logic. You can use this Menu as template to create your own menu.

In the path *./views/templates/menu.php* you will see the php code, wich it gets information about services from a JSON file (nothing complicated).

In the file *./minify/scss/config/components.scss* you will see the styles that it contains, as there are styles for desktop and mobile devices. it's easy to understand, not very complex.

The menu functionalities can be found in *./views/public/js/index.js*
``` php
const Header = document.querySelector(".Header") || document.querySelector(".ServicesHeader")

Header.addEventListener('click', e=>{
    const { target } = e
    const subMenu = (target.nextElementSibling && target.nextElementSibling.classList.contains('Menu__subMenu')) ? target.nextElementSibling : null

    if(target.classList.contains('Menu__a') && subMenu !== null){
        subMenu.classList.toggle('Menu__subMenu--active')
        target.classList.toggle('Menu__a--active')
        return
    }

    //------- If you don't click on the over the Menu, then the subMenus are hidden
    const subMenus = document.querySelectorAll('.Menu__subMenu--active');
    if(subMenus.length > 0){
        //console.log('Removing submenu');
        document.querySelectorAll('.Menu__a--active').forEach(element => element.classList.remove('Menu__a--active'))
        subMenus.forEach(subMenu=> subMenu.classList.remove('Menu__subMenu--active'))
    }
})

document.querySelector('.Menu__exitButton').addEventListener('click', ()=> document.querySelector('.Menu').classList.remove('Menu--active') )
document.querySelector('.MenuMobile__button').addEventListener('click', ()=>{ 
    document.querySelector('.Menu').classList.add('Menu--active')
})
``` 

> this code is for handling the submenu and open/close the menu in mobile format.

**Footer**  
Footer of the site
```php
<section class="Slogan">
    <h2 class="Slogan__h2" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1100">
        IMPULSA TU NEGOCIO CON AYUDA DE PROFESIONALES
    </h2>
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
        © 2023 | Consultoría en el área industrial y de servicios
        </span>
    </div>
</footer>
<div class="Footer__redirect flex-center-center">
    <a href="https://lautarosilverii.tech/">Realizado por Lautaro Silverii</a>
</div>
```

**[⬆ Volver a índice](#indice)**

---

### Styles

#### Components file

#### Effects file

#### Mixins file


---

### Forms


---

### Courses page

---

## API

### Controllers

### Services
