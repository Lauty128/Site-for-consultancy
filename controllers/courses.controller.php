<?php
    require '../config/dataBase.php';


    class CoursesController{

        static function getAll(int $page=0){
            $db_class = new Database();
            $PDO = $db_class->connect_to_database(); 
            if(get_class($PDO) == 'PDOException'){ return null; }

            $query = $PDO->prepare("SELECT id_course,title,description,program,category,type,created_at,updated_at FROM course WHERE state = 1 ORDER BY created_at asc LIMIT 6 OFFSET ".($page * 6));
            $query->execute();
            $courses = $query->fetchAll(PDO::FETCH_ASSOC);

            $totalCourses = $PDO->prepare("SELECT COUNT(*) FROM course WHERE state = 1");
            $totalCourses->execute();
            $totalCourses = $totalCourses->fetchAll(PDO::FETCH_COLUMN)[0];

            //Flight::halt(404, 'Be right back...');
            
            return [
                'total' => $totalCourses,
                'data' => $courses
            ];
        }

        static function getOne(string $id){
            $db_class = new Database();
            $PDO = $db_class->connect_to_database(); 
            if(get_class($PDO) == 'PDOException'){
                header('Location: /Error.php');
                die();
            }

            $query = $PDO->prepare("SELECT * FROM course WHERE id_course = '$id'");
            $query->execute();
            
            $course = $query->fetchAll(PDO::FETCH_ASSOC);
            return $course;
        }
    }