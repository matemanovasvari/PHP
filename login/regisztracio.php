<?php
require_once('connect.php');
$passwordRegex = "/^(?=.*?[A-Z])(?=.*?[a-z])(?=.*?[0-9])(?=.*?[#?!@$%^&*-]).{8,}$/";
if (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['confirm'])) {
    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $password = trim($_POST['password']);
    $passwordConfirm = trim($_POST['confirm']);
    if($password != $passwordConfirm){
        $_SESSION['error'] = 'Passwords do not match!';
    }
    else{
        if(preg_match($passwordRegex, $password)){
            $sql = "INSERT INTO felhasznalok (email, nev, jelszo) VALUES (:email, :nev, :jelszo)";  //Paraméteres lekérdezés
    
            $stmt = $connect->prepare($sql);
            try {
                $stmt->bindParam(':email', $email, PDO::PARAM_STR);
                $stmt->bindParam(':nev', $name, PDO::PARAM_STR);
                $stmt->bindParam(':jelszo', $password, PDO::PARAM_STR);
                $stmt->execute();
                header('Location: index.php');
            }
            catch (PDOException $e) {
                echo $e -> getMessage();
                die();
            }
        }
        else{
            $_SESSION['error'] = "Password not strong enough";
        }
    }
}
else{
    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        $_SESSION['error'] = "Fill all fields";
    }
}
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regisztráció</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>

<body>
    <h1>Regisztráció</h1>
    <?php
        if(!empty($_SESSION['error'])){
            echo'<p class="error">' . $_SESSION['error'] . '</p>';
            unset($_SESSION['error']);
        }
    ?>
    <form action="#" method="post">
        <input type="text" name="name" placeholder="Teszt Elek">
        <input type="email" name="email" placeholder="cim@pelda.com">
        <input type="password" name="password" placeholder="Jelszó">
        <input type="password" name="confirm" placeholder="Jelszó megerősítése">
        <input type="submit" value="Regisztráció">
    </form>
    <br>
    <a href="index.php">Ugrás a belépéshez!</a>
</body>

</html>