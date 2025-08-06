<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php

    $value = $_POST['gender'];
    if ($value === 'female') {
        echo " Thanks miss " . $_POST['first_name'] . " " . $_POST['last_name'] . "<br>";
    }
    echo "<br> <br>";

    echo "Your Inormation is: <br> <br>";
    echo "Name: " . $_POST['first_name'] . " " . $_POST['last_name'] . "<br> <br>";
    echo "Address: " . $_POST['address'] . "<br> <br>";
    echo "Country: " . $_POST['country'] . "<br> <br>";
    echo "Your Skills:";
    echo "<br>";

    if ($_POST['skills']) {
    foreach ($_POST['skills'] as $skill) {
        echo $skill . "<br>";
    }
} 
    echo "<br>";
    echo "Department: " . $_POST['department'] . "<br> <br>";
    echo "Username: " . $_POST['username'] . "<br> <br>";
    echo "Password: " . $_POST['password'] . "<br> <br>";




    ?>


</body>

</html>