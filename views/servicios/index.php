<?php 

    use Form\ServiceForm;
    use Validator\ValidatorForm;

    if(!empty($_POST)){
        require '../../config/validation.php';
        require '../../config/forms.php';

        //-------------------------------------- Validation of Form
        $validation = new ValidatorForm(
            $_POST,
            [
                'message'=>[
                    'type' => 'Length',
                    'validate' => [
                        'max'=>3000
                    ]
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
            ],
            [
                'avoid' => ['information','budget','service']
            ]
        );


        if(!$validation->execute()){
            //If the validation returns an error, then the mail will not be sent and an error message will be sent to the page
            $responseForm = ['status'=>false, 'message'=>'Completa los campos requeridos antes de enviar'];
        }
        else{
            $information = isset($_POST['information']) ? true : false;
            $budget = isset($_POST['budget']) ? true : false;

            //----------------------------- SENT MAIL VIA SMTP SERVER
            $Form = new ServiceForm($_POST['name'], $_POST['email'], $_POST['phone'], $_POST['message'], $_POST['service'], $information, $budget);
            //------ Server configuration
            $Form->SetOptions('smtp.hostinger.com', 587, 'consultas@soluciones-eficientes.com', '@5vnGsU3PzfG.76');
            //------ Mail configuration
            $Form->createEmail();
            //------ Send mail
            $responseForm = $Form->sendEmail();
        }

    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <?php include_once "../templates/head.php" ?>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Soluciones eficientes | Servicios</title>
    <meta name="description" content="Conoce nuestros servicios de consultoría industrial diseñados para ayudar a las empresas a mejorar su eficiencia y competitividad en el mercado argentino. Ofrecemos asesoramiento en manufactura, producción, logística, cadena de suministro y más.">
</head>
<body>
    <?php include_once "../templates/header.php" ?>

    <header class="Header Header--simple"> 
        <?php include_once "../templates/menu.php" ?>
        <h2 class="Header__title">SERVICIOS</h2>
    </header>

    <div class="ServicesContainer">
        <?php foreach ($services as $key => $service) {?>
            <a class="ServicesContainer__div" href="/servicios/<?php echo $service['url'] ?>">
                <img class="ServicesContainer__image" src="/public/assets/services/<?php echo $service['image'] ?>" alt="servicio">
                <h2 class="ServicesContainer__h2"><?php echo $service['name'] ?></h2>
            </a>
        <?php } ?>
    </div>

    <?php if(isset($responseForm)){ ?>
        <div class="MessageBox <?php if(!$responseForm['status']){ echo 'MessageBox--error'; } ?>">
            <svg width="35px" height="35px" stroke-width="1.7" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" color="#000000"><path d="M12 11.5v5M12 7.51l.01-.011M12 22c5.523 0 10-4.477 10-10S17.523 2 12 2 2 6.477 2 12s4.477 10 10 10z" stroke="#000000" stroke-width="1.7" stroke-linecap="round" stroke-linejoin="round"></path></svg>
            <p class="MessageBox__p"><?= $responseForm['message'] ?></p>
        </div>
    <?php }?>

    <?php include_once "../templates/footer.php" ?>
    

    <script src="/public/js/index.js"></script>

    <!-- AOS LOADING -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>

</body>
</html>