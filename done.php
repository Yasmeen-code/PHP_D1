<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Secure Form Output</title>
</head>
<body>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $first_name = htmlspecialchars($_POST['first_name'] ?? '');
    $last_name = htmlspecialchars($_POST['last_name'] ?? '');
    $gender = htmlspecialchars($_POST['gender'] ?? '');
    $address = htmlspecialchars($_POST['address'] ?? '');
    $country = htmlspecialchars($_POST['country'] ?? '');
    $department = htmlspecialchars($_POST['department'] ?? '');
    $username = htmlspecialchars($_POST['username'] ?? '');
    $password = htmlspecialchars($_POST['password'] ?? '');
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);
    $skills = $_POST['skills'] ?? [];

    if ($gender === 'female') {
        echo "Thanks Miss $first_name $last_name<br><br>";
    } else {
        echo "Thanks Mr. $first_name $last_name<br><br>";
    }

    echo "Your Information is:<br><br>";
    echo "Name: $first_name $last_name<br><br>";
    echo "Address: $address<br><br>";
    echo "Country: $country<br><br>";

    echo "Your Skills:<br>";
    if (is_array($skills)) {
        foreach ($skills as $skill) {
            echo htmlspecialchars($skill) . "<br>";
        }
    }

    echo "<br>";
    echo "Department: $department<br><br>";
    echo "Username: $username<br><br>";
    echo "Password: $hashed_password <br><br>";
} else {
    echo "No data submitted.";
}
?>

</body>
</html>
