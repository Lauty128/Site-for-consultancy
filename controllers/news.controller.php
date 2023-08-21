<?php
    require '../config/dataBase.php';


    class NewsController{

        static function getAll(int $page=0, int $limit = 6, $where = null){
            $db_class = new Database();
            $PDO = $db_class->connect_to_database(); 
            if(get_class($PDO) == 'PDOException'){ return null; }

            $where = ($where === null) ? '' : ' WHERE '.$where.' ';
            //echo "SELECT id_news,title,image,created_at FROM news".$where." ORDER BY created_at asc LIMIT ".$limit." OFFSET ".($page * 6);
            $query = $PDO->prepare("SELECT id_news,title,image,created_at FROM news".$where." ORDER BY created_at desc LIMIT ".$limit." OFFSET ".($page * 6));
            $query->execute();
            $news = $query->fetchAll(PDO::FETCH_ASSOC);

            $totalNews = $PDO->prepare("SELECT COUNT(*) FROM news");
            $totalNews->execute();
            $totalNews = $totalNews->fetchAll(PDO::FETCH_COLUMN)[0];

            //Flight::halt(404, 'Be right back...');
            
            return [
                'total' => $totalNews,
                'data' => $news
            ];
        }

        static function getOne(string $id){
            $db_class = new Database();
            $PDO = $db_class->connect_to_database(); 
            if(get_class($PDO) == 'PDOException'){
                header('Location: /Error.php');
                die();
            }

            $query = $PDO->prepare("SELECT * FROM news WHERE id_news = '$id'");
            $query->execute();
            
            $news = $query->fetchAll(PDO::FETCH_ASSOC);
            return $news;
        }
    }