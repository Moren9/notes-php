<?php
    include 'connect.php';


    $username = isset($_POST['username']) ? $_POST['username'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $password = isset($_POST['password']) ? $_POST['password'] : '';

    $access = "SELECT * FROM utente WHERE email = '$email' and password = '$password'";

    if($conn->query($access)->num_rows>0){
        echo "accesso già eseguito";
    } else {
    $sql = "INSERT INTO utente(username, email, password) 
        VALUES('$username', '$email', '$password')";

    if ($conn->query($sql) === TRUE) {
        echo "Utente registrato con successo! ";
    } else {
        echo "Errore di inserimento ";
    }
    $conn->close();
}

    


?>