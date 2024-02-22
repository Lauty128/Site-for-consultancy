<?php 
    require '../controllers/vacancies.controller.php';
    
    $vacancy = VacanciesController::getOne($_GET['id']);
    $contract = [1=> 'Permanente', 2=> 'Tiempo parcial', 3=> 'Pasantia']
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "./templates/head.php" ?>
    <title>
        <?php if($vacancy){ echo $vacancy[0]['role']; } else echo 'No existe'; ?>
    </title>
</head>
<body>
    <?php include_once "./templates/header.php" ?>

    <header class="Header" style="height: fit-content; overflow:visible; background: none">
        <?php include_once "./templates/menu.php" ?>
    </header>

    <?php if(count($vacancy) == 1){ ?>
        <div class="VacancyData">
            <div class="VacancyData__data">
                <span class="VacancyData__span">
                    <svg width="20px" height="20px" stroke-width="2.2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF"><path d="M15 4V2m0 2v2m0-2h-4.5M3 10v9a2 2 0 002 2h14a2 2 0 002-2v-9H3zM3 10V6a2 2 0 012-2h2M7 2v4M21 10V6a2 2 0 00-2-2h-.5" stroke="#3F72AF" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    <?php $date = date_create($vacancy[0]['created_at']); echo date_format($date, 'd/m/Y') ?>
                </span>
                <span class="VacancyData__span">
                    <svg width="20px" height="20px" stroke-width="2.2" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF"><path d="M20 10c0 4.418-8 12-8 12s-8-7.582-8-12a8 8 0 1116 0z" stroke="#3F72AF" stroke-width="2.2"></path><path d="M12 11a1 1 0 100-2 1 1 0 000 2z" fill="#3F72AF" stroke="#3F72AF" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path></svg>
                    <?php echo $vacancy[0]['ubication'] ?>
                </span>

            </div>
            <h2 class="VacancyData__h2"> <?php echo $vacancy[0]["role"] ?> </h2>
            <h3 class="VacancyData__company"> <?php echo $vacancy[0]["company"] ?> </h3>

            <p class="VacancyData__p"><?php echo str_replace("\n", "<br />" ,$vacancy[0]['company_description']) ?></p>
            
            <div class="VacancyData__separator"></div>

            <p class="VacancyData__p"><?php echo str_replace("\n", "<br />" ,$vacancy[0]['description']) ?></p>
            
            <div class="VacancyData__div">
                <h4 class="VacancyData__h4">Funciones</h4>
                <ul class="VacancyData__ul">
                    <?php foreach (explode("\n", $vacancy[0]['functions']) as $key => $function) {
                        echo "<li class='VacancyData__li'>".$function."</li>";
                    } ?>
                </ul>
            </div>

            <div class="VacancyData__div">
                <h4 class="VacancyData__h4">Requisitos</h4>
                <ul class="VacancyData__ul">
                    <?php foreach (explode("\n", $vacancy[0]['requirements']) as $key => $requirement) {
                        echo "<li class='VacancyData__li'>".$requirement."</li>";
                    } ?>
                </ul>
            </div>

            <div class="VacancyData__separator"></div>

            <span class="VacancyData__span" style="font-weight: 400;">
                Tipo de contrato: <b><?php echo $contract[$vacancy[0]['contract_type']] ?></b>
            </span>

        </div>

        <section class="ContactSection ContactSection--background">
            <h2 class="ContactSection__title title--center-line">CONTACTANOS</h2>
            <p class="ContactSection__p">Rellene los campos vacíos y envía tu curriculum para postularte a la vacante</p>
            
            <form action="/vacantes" method="post" enctype="multipart/form-data" class="ContactSection__form" style="border: none; margin:2em auto 0 auto; max-width:1000px">
                <input type="text" id="name-input" name="name" placeholder="Nombre" class="ContactSection__input">
                <input type="text" id="email-input" name="email" placeholder="Email" class="ContactSection__input">
                <input type="text" id="phone-input" name="phone" placeholder="Telefono" class="ContactSection__input">
                <input type="text" name="city" id="city-input" placeholder="Localidad" class="ContactSection__input">
                <input type="hidden" name="vacancy" value="<?php echo $vacancy[0]['id_vacancy']; ?>">
                <textarea name="message" id="message-input" rows="10" placeholder="Mensaje" class="ContactSection__input"></textarea>
                
                <div>
                    <label for="cv-input" class="ContactSection__fileButton">Adjuntar CV</label>
                    <span style="color: #a6a6a6;">* pdf - jpg - png | peso max. de 1.8mb</span>
                </div>
                <input type="file" name="cv" id="cv-input" style="display: none;" accept="image/png, image/jpeg, application/pdf    ">
                
                <input type="submit" value="ENVIAR" class="ContactSection__submit">
            </form>
        </section>


    <?php } else{  ?>
        <div class="VacancyDataError">
            <svg width="50px" height="50px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#3F72AF"><path d="M12 11.5v5M12 7.51l.01-.011M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" stroke="#3F72AF" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            <h2 class="VacancyDataError__h2">La vacante solicitada no existe</h2>
            <p class="VacancyDataError__p">Revisa la lista de vacantes</p>
            <a href="/vacantes" class="VacancyDataError__a">
                <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><style>svg{fill:#ffffff}</style><path d="M96 96c0-35.3 28.7-64 64-64H448c35.3 0 64 28.7 64 64V416c0 35.3-28.7 64-64 64H80c-44.2 0-80-35.8-80-80V128c0-17.7 14.3-32 32-32s32 14.3 32 32V400c0 8.8 7.2 16 16 16s16-7.2 16-16V96zm64 24v80c0 13.3 10.7 24 24 24H296c13.3 0 24-10.7 24-24V120c0-13.3-10.7-24-24-24H184c-13.3 0-24 10.7-24 24zm208-8c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16h48c8.8 0 16-7.2 16-16s-7.2-16-16-16H384c-8.8 0-16 7.2-16 16zM160 304c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16zm0 96c0 8.8 7.2 16 16 16H432c8.8 0 16-7.2 16-16s-7.2-16-16-16H176c-8.8 0-16 7.2-16 16z"/></svg>
                Vacantes disponibles
            </a>
        </div>
    <?php } ?>
    
    <?php include_once "./templates/footer.php" ?>

    <script src="/public/js/index.js"></script>
</body>
</html>