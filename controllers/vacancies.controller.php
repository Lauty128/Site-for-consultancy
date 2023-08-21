<?php
    require '../config/dataBase.php';


    class VacanciesController{

        static function getAll(int $page=0, int $limit = 6){
            $db_class = new Database();
            $PDO = $db_class->connect_to_database(); 
            if(get_class($PDO) == 'PDOException'){ return null; }

            $query = $PDO->prepare("SELECT id_vacancy,role,company,description,ubication,created_at FROM vacancy WHERE state = 1 ORDER BY created_at desc LIMIT ".$limit." OFFSET ".($page * $limit));
            $query->execute();
            $vacancies = $query->fetchAll(PDO::FETCH_ASSOC);

            $totalVacancies = $PDO->prepare("SELECT COUNT(*) FROM vacancy WHERE state = 1");
            $totalVacancies->execute();
            $totalVacancies = $totalVacancies->fetchAll(PDO::FETCH_COLUMN)[0];

            //Flight::halt(404, 'Be right back...');
            return [
                'total' => $totalVacancies,
                'data' => $vacancies
            ];
        }

        static function getOne(string $id, string $attributes = '*'){
            $db_class = new Database();
            $PDO = $db_class->connect_to_database(); 
            if(get_class($PDO) == 'PDOException'){
                header('Location: /Error.php');
                die();
            }

            $query = $PDO->prepare("SELECT ".$attributes." FROM vacancy WHERE id_vacancy = '$id'");
            $query->execute();
            
            $vacancy = $query->fetchAll(PDO::FETCH_ASSOC);
            return $vacancy;
        }
    }