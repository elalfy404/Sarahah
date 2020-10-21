<?php

include_once('conn.php');

session_start();

if (isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true) {
    $link = $_SERVER['HTTP_HOST'];
    header("Location:http://$link/home.php");
}

$errors = [
    'username' => [],
    'email' => [],
    'password' => [],
    'rePassword' => [],
    'acceptTermsCheck' => [],
    'registration' => []
];

$username = null;
if (isset($_POST['username'])) {
    $username = $_POST['username'];
    if (strlen($username) < 5) {
        array_push($errors['username'],
            'The username length must be more than or equal to 6!');
    } else if (strlen($username) > 50) {
        array_push($errors['username'],
            'The username length must be less than or equal to 50!');
    }
}

$email = null;
if (isset($_POST['email'])) {
    $email = $_POST['email'];
    if (strlen($email) < 6) {
        array_push($errors['email'],
            'The email length must be more than or equal to 6!');
    } else if (strlen($email) > 50) {
        array_push($errors['email'],
            'The email length must be less than or equal to 50!');
    }
}

$password = null;
if (isset($_POST['password'])) {
    $password = $_POST['password'];
    if (strlen($password) < 6) {
        array_push($errors['password'],
            'The password length must be more than or equal to 6!');
    } else if (strlen($password) > 50) {
        array_push($errors['password'],
            'The password length must be less than or equal to 50!');
    }
}


$rePassword = null;
if (isset($_POST['rePassword'])) {
    $rePassword = $_POST['rePassword'];
    if (strlen($rePassword) < 6) {
        array_push($errors['rePassword'],
            'The rePassword length must be more than or equal to 6!');
    } else if (strlen($rePassword) > 50) {
        array_push($errors['rePassword'],
            'The rePassword length must be less than or equal to 50!');
    }

    if (strcmp($password, $rePassword) != 0) {
        array_push($errors['rePassword'],
            'The password and rePassword are not equal!');
    }
}

//var_dump($_SERVER['REQUEST_METHOD']);

$acceptTermsCheck = null;
if (strcmp($_SERVER['REQUEST_METHOD'], 'POST') == 0) {
    if (isset($_POST['acceptTermsCheck'])) {
        $acceptTermsCheck = $_POST['acceptTermsCheck'];
        if (strcmp($acceptTermsCheck, "true") != 0) {
            array_push($errors['acceptTermsCheck'],
                'You must accept the terms and conditions to register!');
        }
    } else {
        array_push($errors['acceptTermsCheck'],
            'You must accept the terms and conditions to register!');
    }
}

$fullName = null;
if (isset($_POST['fullName'])) {
    $fullName = $_POST['fullName'];
}

//var_dump($_POST);

if (count($errors['password']) == 0 &&
    count($errors['rePassword']) == 0 &&
    count($errors['username']) == 0 &&
    count($errors['acceptTermsCheck']) == 0 &&
    count($errors['email']) == 0 &&
    $password && $rePassword && $username && $email && $acceptTermsCheck) {

    $sql = "INSERT INTO users (username, password, email, name) VALUES " .
        "('$username', '$password', '$email', '$fullName');";

    $result = $conn->query($sql);
    //var_dump($results);
    if ($result) {
        $affectedRows = $conn->affected_rows;
        if ($affectedRows > 0) {
            // REGISTRATION SUCCESS!
            //header('Location:http://localhost/login.php');
            $link = $_SERVER['HTTP_HOST'];
            header("Location:http://$link/Login.php");
        } else {
            // REGISTRATION FAILED!
            array_push($errors['registration'],
                'Registration failed! Check your details!');
        }
    } else {
        array_push($errors['registration'],
            'Email or Username might be used before!');
    }
}


?>


<?php include_once('views/register.view.php'); ?>


