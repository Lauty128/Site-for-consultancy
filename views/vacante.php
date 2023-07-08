<?php 

    require '../config/dataBase.php';
    //echo $_GET['id'];
    $db_class = new Database();
    $PDO = $db_class->connect_to_database();

    if(get_class($PDO) == 'PDOException'){ 
        header('Location: /Error'); 
        die();
    }
    else{
        $query = "SELECT * FROM vacancy WHERE id_vacancy = '".$_GET['id']."'";
        //echo $query;
        $call = $PDO->prepare($query);
        $call->execute();
        
        $vacancy = $call->fetchAll(PDO::FETCH_ASSOC);
    }

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/public/css/index.css">
    <link rel="shortcut icon" href="/public/assets/logo.png" type="image/png">
    <title><?php echo $_GET['id']; ?></title>
</head>
<body>
    <?php include_once "./templates/header.php" ?>

    <header class="Header" style="height: fit-content; overflow:visible; background: none">
        <?php include_once "./templates/menu.php" ?>
    </header>

    <!-- <pre>
        <?php var_dump($vacancy); ?>
    </pre> -->
    <?php if(count($vacancy) == 1){ ?>
        <h2> <?php echo $vacancy[0]["role"] ?> </h2>
        <p><?php echo $vacancy[0]['description'] ?></p>
        <div class="">
            <h4>Funciones</h4>
            <ul>
                <?php foreach (explode("\n", $vacancy[0]['functions']) as $key => $function) {
                    echo "<li>".$function."</li>";
                } ?>
            </ul>
        </div>
        <div class="">
            <h4>Requisitos</h4>
            <ul>
                <?php foreach (explode("\n", $vacancy[0]['requirements']) as $key => $requirement) {
                    echo "<li>".$requirement."</li>";
                } ?>
            </ul>
        </div>
    <?php } else{  ?>
        <h2>NO EXISTE ESTE ARTICULO PAI</h2>
    <?php } ?>
    

    <script src="/public/js/index.js"></script>
</body>
</html>