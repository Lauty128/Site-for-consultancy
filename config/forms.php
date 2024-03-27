<?php
    namespace Form;

    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    if(file_exists('../vendor/phpmailer/PHPMailer.php')){
        require_once '../vendor/phpmailer/Exception.php';
        require_once '../vendor/phpmailer/PHPMailer.php';
        require_once '../vendor/phpmailer/SMTP.php';
    }
    else{
        require_once '../../vendor/phpmailer/Exception.php';
        require_once '../../vendor/phpmailer/PHPMailer.php';
        require_once '../../vendor/phpmailer/SMTP.php';
    }


    //--------- Global Class. This class allows configure the SMTP with the data provided
    class HandlerForm{
        //---- Data for sending
        public $mail;
        public string $subject;
        public string $body;
        public array $state = [
            'status' => true,
            'message' => 'Mensaje enviado correctamente!!'
        ];

        //---- Data to manipulate 
        protected string $name;
        protected string $email;
        protected string $phone;
        protected string $message;


        function __construct(string $name, string $email, string $phone, string $message)
        {
            $this->name = $name;
            $this->email = $email;
            $this->phone = $phone;
            $this->message = $message;
        }
        
        //----- Instance PHPMAILER and configure it
        function SetOptions(string $host, int $port, string $username, string $password)
        {
            $this->mail = new PHPMailer(true);
            $this->mail->CharSet = "UTF-8";
            $this->mail->isHTML();
            // En addAddress Iria el Mail de soluciones eficientes, ya que este la recibiria

            //----- SMTP Config
            $this->mail->IsSMTP();
            $this->mail->SMTPDebug    =   0;
            $this->mail->Host         =   $host;
            $this->mail->SMTPAuth     =   true;
            $this->mail->Port         =   $port;
            $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $this->mail->Username     =   $username;
            $this->mail->Password     =   $password; 
            
            $logo = realpath('./public/assets/statics/Banner.png') ? realpath('./public/assets/statics/Banner.png') : realpath('../public/assets/statics/Banner.png');
            $this->mail->addEmbeddedImage($logo, 'logo');
        }

        function addFile(string $file, string $name = 'archivo'){
            $this->mail->addAttachment($file, $name);
        }

        function sendEmail()
        {
            $this->mail->SetFrom($this->mail->Username);
            $this->mail->addAddress($this->mail->Username);
            $this->mail->Subject    = $this->subject;

            $this->mail->AltBody = "Cuerpo alternativo del mensaje";
            $this->mail->Body    = $this->body;

            try {
                $this->mail->send();
            } catch (Exception $e) {
                $this->state = [
                    'status' => false,
                    'message' => 'Ocurrió un error al enviar el mail.<br />Intentalo más tarde'
                ];
            }
            
            return $this->state;
        }

        function viewError(){ return $this->mail->ErrorInfo; }

        function generateError(string $message = 'Ocurrió un error mientras se validaban los datos'){
            $this->state = [
                'status' => false,
                'message' => $message
            ];
        }
    }


    //---------- These inherited classes have their owner style, because there are more then one form.
    //---------- Some classes require connection with a database

    //---------------------------------------------------------------------------------------------------
    //--------------------------------------- GENERAL ---------------------------------------------------
    //---------------------------------------------------------------------------------------------------
    class GeneralForm extends HandlerForm{
        private string $personalSubject;

        function __construct(string $name, string $email, string $phone, string $message, string $personalSubject = '')
        {
            parent::__construct($name, $email, $phone, $message);
            $this->personalSubject = $personalSubject;
        }

        function createEmail(){
            $this->subject = ($this->personalSubject == '') ? 'Consulta general sin asunto' : $this->personalSubject;
            $this->phone = ($this->phone == '') ? 'Sin especificar' : $this->phone;
            $this->body = ' 
            <!DOCTYPE html>
            <html lang="es">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Consulta general</title>
                </head>
                <body>
                    <header>
                        <img src="cid:logo" alt="logo" style="width: 260px">
                    </header>
                    <h2>'.$this->subject.'</h2>
                    <span><b>Nombre:</b> '.$this->name.'</span>
                    <span><b>Email:</b> '.$this->email.'</span>
                    <span><b>Telefono:</b> '.$this->phone.'</span>
                    <p>
                        <b style="display: block; margin-top: 20px";margin-bottom:10px;>Mensaje:</b>
                        '.str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $this->message).'
                    </p>
                    <style>
                        body{padding: 0; margin: 15px}
                        header{ background-color: #ffff; padding-bottom: 90px; margin-bottom:2em ; border-bottom: 1px solid black; display: flex; justify-content: center; align-items: center }
                        h2, span, p{ font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif; margin-left:5px ; margin-right:5px }
                        h2{ color: #3F72AF; margin-top: 30px }
                        span{ margin-top: 5px; display: block; font-size: 1.1em; color: #414141 }
                        p{ color: #414141; font-size: 1.1em; line-height: 120% }
                        p > b{ color: #000000; font-size: .8em }
                    </style>
                </body>
            </html>
            ';
        }
    }
    //---------------------------------------------------------------------------------------------------
    //--------------------------------------- SERVICES --------------------------------------------------
    //---------------------------------------------------------------------------------------------------
    class ServiceForm extends HandlerForm{
        private string $serviceId;
        private bool $information;
        private bool $budget;

        function __construct(string $name, string $email, string $phone, string $message, string $serviceId, bool $information, bool $budget)
        {
            parent::__construct($name, $email, $phone, $message);
            $this->serviceId = $serviceId;
            $this->information = $information;
            $this->budget = $budget;
        }

        function createEmail(){
            $service = $this->get_service();
            if($service !== null){

                $information_response = $this->information ? 'Se requiere' : 'No se requiere';
                $budget_response = $this->budget ? 'Se requiere' : 'No se requiere';
    
                $this->subject = "Consulta sobre servicios";
                $this->phone = ($this->phone == '') ? 'Sin especificar' : $this->phone;
                $this->body = '
                <!DOCTYPE html>
                <html lang="es">
                    <body>
                        <header>
                            <img src="cid:logo" alt="logo" style="width: 250px">
                        </header>
                        <h2>'.$this->subject.'</h2>
                        <span class="vacancy">Servicio: <b>'.$service['name'].'</b></span>
                        <hr>
                        <span><b>Nombre:</b> '.$this->name.'</span>
                        <span><b>Email:</b> '.$this->email.'</span>
                        <span><b>Telefono:</b> '.$this->phone.'</span>
                        <span>
                            <b>Presupuesto:  </b>
                            '.$budget_response.'
                        </span>
                        <span>
                            <b>Información:  </b>
                            '.$information_response.'
                        </span>
                        <p>
                            <b style="display: block; margin-top: 20px;margin-bottom:10px;">Mensaje:</b>
                            '.str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $this->message).'
                        </p>
                        <style>
                            body{padding: 0; margin: 15px}
                            header{ background-color: #ffff; padding-bottom: 5px; border-bottom: 1px solid black; display: flex; justify-content: space-between; align-items: center }
                            .network{ margin-right: 10px }
                            .check > svg{ vertical-align: bottom; }
                            @media screen and (max-width:500px){ .network{ display:none } }
                            h2, span, p{ font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif; margin-left:5px ; margin-right:5px }
                            h2{ color: #3F72AF; margin-top: 8px }
                            span{ margin-top: 5px; display: block; font-size: 1.1em; color: #414141 }
                            p{ color: #414141; font-size: 1.1em; line-height: 120% }
                            p > b{ color: #000000; font-size: .8em }
                            .vacancy > b{ font-weight: 800 }
                    </style>
                    </body>
                </html>
                ';
            }
        }

        function get_service(){
            //----- Validate ID of service
            $services_file = file_get_contents('../../data/services.json');
            $services = json_decode($services_file, true);
            if(in_array($this->serviceId, array_column($services, 'id'))){
                $index = array_search($this->serviceId, array_column($services,'id'));
                return $services[$index];
            }
            else{
                return $this->generateError('El servicio solicitado es invalido');
                return null;
            }
        }
    }

    //---------------------------------------------------------------------------------------------------
    //--------------------------------------- VACANCIES -------------------------------------------------
    //---------------------------------------------------------------------------------------------------
    class VacancyForm extends HandlerForm{
        private array $vacancy;
        private string $city;

        function __construct(string $name, string $email, string $phone, string $city ,string $message, array $vacancy)
        {
            parent::__construct($name, $email, $phone, $message);
            $this->city = $city;
            $this->vacancy = $vacancy;
        }

        function createEmail(){
            $this->subject = "Postulacion a vacante de trabajo";
            $this->phone = ($this->phone == '') ? 'Sin especificar' : $this->phone;
            $this->body = '
            <!DOCTYPE html>
            <html lang="es">
                <body>
                    <header>
                        <img src="cid:logo" alt="logo" style="width: 250px">
                    </header>
                    <h2>'.$this->subject.'</h2>
                    <span class="vacancy"><b>'.$this->vacancy["role"].'</b> ('.$this->vacancy["id_vacancy"].')</span>
                    <hr>
                    <span><b>Nombre:</b> '.$this->name.'</span>
                    <span><b>Email:</b> '.$this->email.'</span>
                    <span><b>Telefono:</b> '.$this->phone.'</span>
                    <span><b>Ciudad:</b> '.$this->city.'</span>
                    <p>
                        <b style="display: block; margin-top: 20px;margin-bottom:10px;">Mensaje:</b>
                        '.str_replace(array("\r\n", "\n\r", "\r", "\n"), "<br />", $this->message).'
                    </p>
                    <style>
                        body{padding: 0; margin: 15px}
                        header{ background-color: #ffff; padding-bottom: 5px; border-bottom: 1px solid black; display: flex; justify-content: space-between; align-items: center }
                        .network{ margin-right: 10px }
                        @media screen and (max-width:500px){ .network{ display:none } }
                        h2, span, p{ font-family: "Segoe UI", Tahoma, Geneva, Verdana, sans-serif; margin-left:5px ; margin-right:5px }
                        h2{ color: #3F72AF; margin-top: 8px }
                        span{ margin-top: 5px; display: block; font-size: 1.1em; color: #414141 }
                        p{ color: #414141; font-size: 1.1em; line-height: 120% }
                        p > b{ color: #000000; font-size: .8em }
                        .vacancy > b{ font-weight: 800 }
                </style>
                </body>
            </html>
            ';
        }
    }

    //---------------------------------------------------------------------------------------------------
    //--------------------------------------- COURSE ----------------------------------------------------
    //---------------------------------------------------------------------------------------------------
    class CourseForm extends HandlerForm{
        private string $courseId;
        private bool $information;
        private bool $budget;

        function __construct(string $name, string $email, string $phone, string $message, string $courseId, bool $information, bool $budget)
        {
            //parent::__construct($email);
            $this->courseId = $courseId;
            $this->information = $information;
            $this->budget = $budget;
        }
    
        function createEmail(){
            
        }
    }