<?php


define('DB_SERV', 'localhost');
define('DB_USER', 'u47488');
define('DB_NAME', 'u47488');
define('DB_PASS', '7459467');


$db = new PDO(
    'mysql: host = ' . DB_SERV . '; dbname = ' . 
    DB_NAME, 
    DB_USER, 
    DB_PASS, 
    array(PDO::ATTR_PERSISTENT => true)
);


try {

    $sql = $db->prepare("INSERT 
        INTO `form` 
        (name, mail, date, gender, limb, superpower, bio) 
        VALUES (
            :name, 
            :mail, 
            :date, 
            :gender, 
            :limb, 
            :superpower, 
            :bio) 
        ");

    $sql -> execute(
        array(
            'name' => $_POST['name'],
            'mail' => $_POST['mail'],
            'date' => $_POST['date'],
            'gender' => $_POST['gender'],
            'limb' => $_POST['limb'],
            'superpower' => json_encode($_POST['superpower']),
            'bio' => $_POST['bio']
        )
    );

    echo 'Saved!';
}

catch(PDOException $e){

  echo "Error : </br>" . $e->getMessage();

  exit();
}