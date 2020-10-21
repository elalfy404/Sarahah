<?php

include_once('conn.php');
session_start();

if (isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true) {
    $link = $_SERVER['HTTP_HOST'];
    header("Location:http://$link/home.php");
}

$errors = [
    'emailOrUsername' => [],
    'password' => [],
    'authentication' => []
];

$emailOrUsername = null;
if (isset($_POST['emailOrUsername'])) {
    $emailOrUsername = $_POST['emailOrUsername'];
    if (strlen($emailOrUsername) < 5) {
        array_push($errors['emailOrUsername'],
            'The email or username must be more than or equal to 6!');
    }
}

$password = null;
if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if (strlen($password) < 6) {
        array_push($errors['password'],
            'The password must be more than or equal to 6!');
    }
}

if (count($errors['emailOrUsername']) == 0 &&
    count($errors['password']) == 0 &&
    $password && $emailOrUsername) {

    $sql = "SELECT COUNT(*) AS K FROM users WHERE (username = '$emailOrUsername'
                OR email = '$emailOrUsername') AND password = '$password';";
//    var_dump($sql);

    $result = $conn->query($sql);
    $rows = $result->fetch_all(MYSQLI_ASSOC);
    $isFound = $rows[0]['K'];

    if (strcmp($isFound, "1") == 0) {
        $_SESSION['isLogged'] = true;
        $_SESSION['emailOrUsername'] = $emailOrUsername;
        $link = $_SERVER['HTTP_HOST'];
        header("Location:http://$link/home.php");
        //header('Location:http://localhost/home.php');
    } else {
        array_push($errors['authentication'],
            'Login Failed! Please check you login details!');
        $_SESSION['isLogged'] = false;
    }
}

//var_dump($errors);

?>

<?php include_once('views/Login.view.php'); ?>
