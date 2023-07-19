<?php

namespace controllers\Form;

$RegularExp = [ 
    'name' => "/^[a-zA-Z _-]{5,30}$/",
    'email' => "/^[\w]+@{1}[\w]+\.[a-z]{2,3}$/",
    'phone' => "/^[\d\s-_]{7,20}$/"
];

class GeneralContact{
    private string $name;
    private string $email;
    private string $phone;
    private string $subject;
    private string $message;   

    function __construct(string $name, string $email, $phone = 'Sin especificar', string $subject, $message = 'Sin especificar') {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->subject = $subject;
        $this->message = $message;
    }

    public function submitData(){
        $curl = curl_init('');
        curl_setopt($curl, CURLOPT_HEADER, 0);
        curl_setopt($curl, CURLOPT_POST, true);/** Autorizamos enviar datos*/
        curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-Type:application/json'));
        curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode('hello') );/** Datos para enviar*/
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($curl); /** Ejecutamos petición*/
        curl_close($curl);

        echo '<pre>';
        var_dump($result);
        echo '</pre>';
    }

    public function validate(){  // After it's private
        return(
            (preg_match("/^[a-zA-Z _-]{5,30}$/", $this->name) == 1) &&
            (preg_match("/^[\w]+@{1}[\w]+\.[a-z]{2,3}$/", $this->email) == 1) &&
            (preg_match("/^[\d\s_-]{7,20}$/", $this->phone) == 1) &&
            ((strlen($this->subject) == 0) || (strlen($this->subject) > 10))
        );
    }

    function generateMessage(){
        echo $this->name.'<br />';
        echo $this->email.'<br />';
        echo $this->phone.'<br />';
        echo $this->subject.'<br />';
        echo $this->message;
    }

}

class VacancyContact{
    private string $name;
    private string $email;
    private string $phone;
    private string $vacancy;
    private string $message;
    private $cv;

}

class ServiceContact{
    private string $name;
    private string $email;
    private string $phone;
    private string $message;
    private string $service;
    private bool $information;
    private bool $budget;
}

class CourseContact{
    private string $name;
    private string $email;
    private string $phone;
    private string $message;
    private string $course;
    private bool $information;
    private bool $budget;
}