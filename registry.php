<?php include 'conn.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = test_input($_POST['username']);
    $password = test_input($_POST['password']);
    $confirm_password = test_input($_POST['password-confirm']);
    $social_id = test_input($_POST['character']);
    $email = test_input($_POST['email']);
}

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = str_replace(' ','',$data);
    $data = preg_replace("/[^a-zA-Z0-9]+/", "", $data);
    return $data;
}

// Query
$sql = "INSERT INTO account (login, password, social_id, email) VALUES ('$username',PASSWORD('$password'),'$social_id','$email')";

// Create connection
$conn = mysqli_connect($ip_db, $user_db, $password_db, $database);

try{

    if (strcmp($password, $confirm_password) !== 0) {
        $_SESSION['error_password'] = "Confirmação de senha da conta incorreta, tente novamente...";
        header("location: index.php");
        return;
    }

    if (mysqli_query($conn, $sql)) {
        $_SESSION['status'] = "Cadastro realizado com sucesso!";
        header("location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    mysqli_close($conn);
}catch (Exception $e) {
    echo 'Exceção capturada: ',  $e->getMessage(), "\n";
}
?>