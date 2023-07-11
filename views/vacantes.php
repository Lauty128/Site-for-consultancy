<?php 

    require '../config/dataBase.php';
    
    $db_class = new Database();
    $PDO = $db_class->connect_to_database();
    $error = false;

    if(get_class($PDO) == 'PDOException'){ $error = true; }
    else{
        $query = $PDO->prepare("SELECT id_vacancy,role,company,description,ubication,created_at FROM vacancy WHERE state = 1 ORDER BY created_at asc LIMIT 10 OFFSET 0");
        $query->execute();
        $vacancies = $query->fetchAll(PDO::FETCH_ASSOC);

        $totalVacancies = $PDO->prepare("SELECT COUNT(*) FROM vacancy WHERE state = 1");
        $totalVacancies->execute();
        $totalVacancies = $totalVacancies->fetchAll(PDO::FETCH_COLUMN)[0];
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/index.css">
    <link rel="shortcut icon" href="/public/assets/Logo.png" type="image/png">
    <title>Vacantes</title>
</head>
<body>
    <?php include_once "./templates/header.php" ?>

    <header class="Header Header--simple"> 
        <?php include_once "./templates/menu.php" ?>
        <h2 class="Header__title">VACANTES</h2>
    </header>

    <section class="VacanciesList">
        <p class="VacanciesList__text">
        Consulte nuestras vacantes actuales y postulesé completando el formulario y adjuntando su CV en formato PDF
        </p>
        
        <?php if(!$error && ($totalVacancies > 0)){ ?>
            <div class="VacanciesList__container">
                <?php foreach ($vacancies as $key => $vacancy) { ?> 
                    <div class="VacancyCard">
                        <h4 class="VacancyCard__role"><?php echo $vacancy['role'] ?></h4>
                        <span class="VacancyCard__company"><?php echo $vacancy['company'] ?></span>
                        <p class="VacancyCard__description"><?php echo $vacancy['description'] ?></p>
                        <div class="VacancyCard__separator"></div>
                        <div class="VacancyCard__dataContainer">
                            <span class="VacancyCard__data">
                                <svg width="20px" height="20px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF"><path d="M20 10c0 4.418-8 12-8 12s-8-7.582-8-12a8 8 0 1116 0z" stroke="#3F72AF" stroke-width="1.5"></path><path d="M12 11a1 1 0 100-2 1 1 0 000 2z" fill="#3F72AF" stroke="#3F72AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                <?php $date = date_create($vacancy['created_at']); echo date_format($date, 'd/m/Y') ?>
                            </span>
                            <span class="VacancyCard__data">
                                <svg width="20px" height="20px" stroke-width="1.5" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF"><path d="M15 4V2m0 2v2m0-2h-4.5M3 10v9a2 2 0 002 2h14a2 2 0 002-2v-9H3zM3 10V6a2 2 0 012-2h2M7 2v4M21 10V6a2 2 0 00-2-2h-.5" stroke="#3F72AF" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                                <?php echo $vacancy['ubication'] ?>
                            </span>
                        </div>
                        <a href="<?php echo '/vacantes/'.$vacancy['id_vacancy'] ?>" class="VacancyCard__seeMore">VER MÁS</a>
                    </div>
                <?php } ?>
            </div>
        <?php } else{ ?>
        
            <div class="VacanciesList__error">
                <svg width="50px" height="50px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF"><path d="M12 11.5v5M12 7.51l.01-.011M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" stroke="#3F72AF" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                <span>NO SE ENCONTRÓ NINGUNA VACANTE POR EL MOMENTO.<br />VUELVE MÁS TARDE </span>
            </div>
        
        <?php } ?>
    
    </section>

    <section class="ContactSection">
        <h2 class="ContactSection__title title--center-line">CONTACTANOS</h2>
        <p class="ContactSection__p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cumque dolorem consequatur odit eligendi aliquid. Veniam nostrum eaque voluptas ut aut soluta cupiditate similique voluptates cumque omnis!</p>

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
            </div>
            <form class="ContactSection__form">
                <input type="text" name="name" placeholder="Nombre" class="ContactSection__input">
                <input type="text" name="email" placeholder="Email" class="ContactSection__input">
                <input type="text" name="phone" placeholder="Telefono" class="ContactSection__input">
                <?php if(!$error && ($totalVacancies > 0)){ ?>
                    <select class="ContactSection__input" name="vacancy">
                        <option value="">Vacante</option>
                        <?php foreach ($vacancies as $key => $vacancy) { ?> 
                            <option value="<?php echo $vacancy['id_vacancy'] ?>">
                                <?php echo $vacancy['role'] ?>
                            </option>
                        <?php } ?>
                    </select>
                <?php } else{ ?>
                    <input type="text" name="subject" placeholder="Asunto" class="ContactSection__input">
                <?php } ?>
                <textarea name="message" rows="10" placeholder="Mensaje" class="ContactSection__input"></textarea>
                
                <div>
                    <label for="cv-input" class="ContactSection__fileButton">Adjuntar CV</label>
                    <span style="color: #a6a6a6;">* pdf - jpg - png - docx</span>
                </div>
                <input type="file" name="cv" id="cv-input" style="display: none;" accept="image/png,image/jpg,.pdf,.docx">
                
                <input type="submit" value="ENVIAR" class="ContactSection__submit">
            </form>
        </div>
    </section>


    <?php include_once "./templates/footer.php" ?>

    <script src="/public/js/index.js"></script>
</body>
</html>