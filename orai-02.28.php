<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $name = "";
    $gender = "";

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $name = test_input($_POST["name"]);
      $gender = test_input($_POST["gender"]);
    }
    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
      }
    ?>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
        <p>
        <label for="name">Név:</label>
        <input type="text" id="name" name="name">
    </p>
    <p>
        <label for="ferfi">Férfi</label>
        <input type="radio" name="gender" id="ferfi" value="férfi">
    </p>
    <p>
        <label for="no">Nő</label>
        <input type="radio" name="gender" id="no" value="nő">
    </p>
        <input type="submit">
    </form>
    <?php

echo "<h2>Your Input:</h2>";
echo $name;
echo "<br>";
echo $gender;
    ?>
</body>
</html>