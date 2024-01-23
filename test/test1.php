<!-- <!DOCTYPE html>
<html>

<head>
    <title>Cours PHP / MySQL</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="cours.css">
</head>

<body>
    <h1>Bases de données MySQL</h1>
</body>

</html> -->

<?php
$servername = 'localhost';
$username = 'root';
$password = '';

//On essaie de se connecter
try {
    $conn = new PDO("mysql:host=$servername;dbname=easycrud", $username, $password);
    //On définit le mode d'erreur de PDO sur Exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}

/*On capture les exceptions si une exception est lancée et on affiche
            *les informations relatives à celle-ci*/ catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

$num = 45324533;
$user_id = 31;
$sqlQuery = "SELECT * from  user_info WHERE mobile = :mobile AND user_id = :user_id";
$result = $conn->prepare($sqlQuery);
$result->bindParam(':mobile', $num);
$result->bindParam(':user_id', $user_id);
$result->execute();
$result = $result->fetch(\PDO::FETCH_ASSOC);
if (isset( $result['mobile'])) {

    if ($result['mobile'] == $num) {

        echo 'ggdrgdrf';
        
    }
    
} else {
    
    echo'echec';
}
?>