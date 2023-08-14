<?php
    //---------- Get data 
    require '../controllers/vacancies.controller.php';
    
    $page = (isset($_GET['page']) && ($_GET['page'] >= 1)) ? (int)$_GET['page'] : 1;

    $response = VacanciesController::getAll($page - 1);
    $vacancies = $response['data'];

    //---------- Validation
    use Form\VacancyForm;
    use Validator\ValidatorForm;

    if(!empty($_POST)){
        $fileTypes = ['application/pdf','image/jpeg','image/png'];
        $cv = $_FILES["cv"];
        
        // If the cv file is equal to 0 or greater than 1.8MB or this has a file type invalid then returns a error message 
        if(($cv['size'] == 0) || ($cv['size'] > 1800000) || !in_array($cv['type'], $fileTypes)){ $responseForm = ['status'=>false, 'message'=>'Sigue los pasos para enviar tu curriculum']; }
        else{
            require '../config/validation.php';
            $validation = new ValidatorForm(
                $_POST,
                [
                    'message'=>[
                        'type' => 'Length',
                        'validate' => [
                            'max'=>3000
                        ]
                    ],
                    'city'=>[
                        'type' => 'Regexp',
                        'validate' => "/^[0-9a-zA-Z ,._-]{3,60}$/"
                    ],
                    'name' => [
                        'type' => 'Regexp',
                        'validate' => "/^[a-zA-Z _-]{5,50}$/"
                    ],
                    'email' => [
                        'type' => 'Regexp',
                        'validate' => "/^[\w]+@{1}[\w]+\.[a-z]{2,3}$/"
                    ],
                    'phone' => [
                        'type' => 'Regexp',
                        'validate' => "/^[\d\s-]{6,20}$/"
                    ]
                ]
            );

            if($validation->execute()){
                $selected_vacancy = VacanciesController::getOne($_POST['vacancy'], 'id_vacancy, role');
                
                if(count($selected_vacancy) == 1){
                    require '../config/forms.php';
                    
                    $Form = new VacancyForm($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['city'], $_POST['message'], $selected_vacancy[0]);
                    //------ Server configuration
                    $Form->SetOptions('sandbox.smtp.mailtrap.io', 2525, '4d8c07b2582602', '1d2e35b47080af');
                    //------ Mail configuration
                    $Form->addFile($cv["tmp_name"], "Curriculum - ".$_POST["name"].".".explode('.', $cv['name'])[1]);
                    $Form->createEmail();
                    
                    //------ Send mail
                    $response = $Form->sendEmail();
                    if(!$response) {
                        echo "Error al enviar el mensaje: ".$Form->viewError();
                        $responseForm = ['status'=>false, 'message'=>'Ocurrió un error al enviar el mail.<br />Intentalo más tarde'];
                    } else {
                        $responseForm = ['status'=>true, 'message'=>'Postulación enviada con éxito!!'];
                    }
                }
                else{ $responseForm = ['status'=>false, 'message'=>'Debes seleccionar una vacante']; }
            }
            else{
                $responseForm = ['status'=>false, 'message'=>'Ocurrió un problema al validar los campos. Por favor revisa los datos'];
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "./templates/head.php" ?>
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
        
        <?php if( ($response['total'] > 0) && (count($vacancies) > 0) ){ ?>
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

    <section class="ContactSection ContactSection--background">
        <h2 class="ContactSection__title title--center-line">CONTACTANOS</h2>
        <p class="ContactSection__p">Selecciona la vacante de interes y envianos tus datos para poder postularte</p>
        
        <form action="/vacantes" method="post" enctype="multipart/form-data" class="ContactSection__form" style="border: none; margin:2em auto 0 auto; max-width:1000px">
            <input type="text" name="name" id="name-input" placeholder="Nombre" class="ContactSection__input">
            <input type="text" name="email" id="email-input" placeholder="Email" class="ContactSection__input">
            <input type="text" name="phone" id="phone-input" placeholder="Telefono" class="ContactSection__input">
            <input type="text" name="city" id="city-input" placeholder="Ciudad" class="ContactSection__input">
            <?php if( ($response['total'] > 0) && (count($vacancies) > 0) ){ ?>
                <select class="ContactSection__input" name="vacancy">
                    <option value="">Vacante</option>
                    <?php foreach ($vacancies as $key => $vacancy) { ?> 
                        <option value="<?php echo $vacancy['id_vacancy'] ?>">
                            <?php echo $vacancy['role'] ?>
                        </option>
                    <?php } ?>
                </select>
            <?php } ?>
            <textarea name="message" rows="10" placeholder="Mensaje" id="message-input" class="ContactSection__input"></textarea>
            
            <div>
                <label for="cv-input" class="ContactSection__fileButton">Adjuntar CV</label>
                <span style="color: #a6a6a6;">* pdf - jpg - png | peso max. de 1.8mb</span>
            </div>
            <input type="file" name="cv" id="cv-input" style="display: none;" accept="image/png,image/jpeg,application/pdf">
            
            <input type="submit" value="ENVIAR" class="ContactSection__submit">
        </form>
        
    </section>

    <?php if(isset($responseForm)){ ?>
        <div class="MessageBox <?php if(!$responseForm['status']){ echo 'MessageBox--error'; } ?>">
            <svg width="35px" height="35px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000"><path d="M12 11.5v5M12 7.51l.01-.011M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" stroke="#000000" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            <p class="MessageBox__p"><?= $responseForm['message'] ?></p>
        </div>
    <?php }?>


    <?php include_once "./templates/footer.php" ?>

    <script src="/public/js/index.js"></script>
</body>
</html>