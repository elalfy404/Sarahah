<?php

include_once('conn.php');

//$_SESSION['isLogged'] = true;
//$_SESSION['emailOrUsername'] = $emailOrUsername;

session_start();

//$sql = $dsh->query("SELECT * FROM  users WHERE id = 1 ");
//$row = $sql->fetch_array(MYSQLI_ASSOC);
if (isset($_post['sub'])) {
    $temp_file = $_files['upload']['tmp_name'];
    $name_file = $_files['upload']['name'];
    $error_file = $_files['upload']['error'];
    $folder = "upload";
    move_uploaded_file(stemp_file, $folder . "/" . $name_file);
    $sql = $dsh->query("update users set user-img - '$name_file' where id =1");
    switch ($error_file) {
        case UPLOAD_ERR_OK:
            echo "file uploaded ouccesfuly";
            break;
        case UPLOAD_ERR_FORM_SIZE:
            echo "Uploaded file is too big";
            break;
        default;
            echo "Unknown Error";
            break;

    }
}


$emailOrUsername = null;
if (isset($_SESSION['isLogged']) && $_SESSION['isLogged'] == true) {
    $emailOrUsername = $_SESSION['emailOrUsername'];
} else {
    //header('Location:http://localhost/login.php');
    $link = $_SERVER['HTTP_HOST'];
//    header("Location:http://$link/Register.php");
}

//var_dump($_SESSION);

$rows = [];
if ($emailOrUsername) {
    $sql = "SELECT content, sent_timestamp FROM messages " .
        "WHERE to_user_id = (SELECT id FROM users WHERE " .
        "username = '$emailOrUsername' OR email = '$emailOrUsername');";

    //var_dump($sql);

    $results = $conn->query($sql);
}


?>

<?php include_once('views/home.view.php'); ?>