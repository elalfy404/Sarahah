<?php

include_once('conn.php');

$userLink = "http://localhost/sendMessage.php?to=elalfy";


$errors = [
    'message' => []
];

$message = null;
$toUsername = null;

//var_dump($_SERVER['REQUEST_METHOD']);

if (strcmp($_SERVER['REQUEST_METHOD'], 'POST') == 0) {
    if (isset($_POST['message'])) {
        $message = $_POST['message'];
        if (strlen($message) <= 0) {
            array_push($errors['message'],
                'You can\'t send an empty message!');
        } else if (strlen($message) > 1000) {
            array_push($errors['message'],
                'Message length must be less than 1000 characters!');
        }
    }
}

//if (strcmp($_SERVER['REQUEST_METHOD'], 'GET') == 0) {
//echo "WELCOME";
if (isset($_REQUEST['to'])) {
    $toUsername = $_REQUEST['to'];
}
//}

//var_dump($message && $toUsername);

if ($message && $toUsername && count($errors['message']) == 0) {

    $sql = "SELECT COUNT(*) AS K FROM users WHERE username = '$toUsername' OR email = '$toUsername';";
    $results = $conn->query($sql);
    $rows = $results->fetch_all(MYSQLI_ASSOC);
    $isFound = $rows[0]['K'];

    if (intval($isFound) != 0) {
        $sql = "INSERT INTO messages (to_user_id, content) VALUES " .
            "((SELECT id FROM users WHERE username = '$toUsername' OR email = '$toUsername'), '$message');";

        $result = $conn->query($sql);
        if ($result) {
            if ($conn->affected_rows > 0) {
                $link = $_SERVER['HTTP_HOST'];
                header("Location:http://$link/Login.php");
            } else {
                array_push($errors['message'],
                    'Message is not sent successfully!');
            }
        }
    } else {
        array_push($errors['message'],
            'This user is not found in our database!');
    }


}
?>

<?php include_once('views/sendMessage.view.php'); ?>
