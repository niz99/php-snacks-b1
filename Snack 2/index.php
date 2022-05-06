<?php

$name = ( !empty( $_GET['name'] ) ) ? $_GET['name'] : '';
$email = ( !empty( $_GET['email'] ) ) ? $_GET['email'] : '';
$age = ( !empty( $_GET['age'] ) ) ? (int)$_GET['age'] : '';

$validazioneName = false;
$validazioneEmail = false;
$validazioneAge = false;

if( strlen($name) < 3 ){
    echo "<p>Il nome deve contenere almeno tre caratteri</p>";
} else {
    $validazioneName = true;
}

if( strpos( $email, '@' ) == 0 || strpos( $email, '.') == 0 ){
    echo "<p>L'email deve contenere @ e .</p>";
} else {
    $validazioneEmail = true;

}

if( !is_numeric( $age ) || $age < 0){
    echo "<p>Il valore dell'età deve essere un numero</p>";
} else {
    $validazioneAge = true;
}

if( $validazioneName && $validazioneEmail && $validazioneAge ){
    echo "<p>Accesso riuscito</p>";
} else {
    echo "<p>Accesso negato</p>";
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="GET">
        <div>
            <label for="">Name</label>
            <input type="text" name="name">
        </div>
        <div>
            <label for="">Email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="">Age</label>
            <input type="number" name="age">
        </div>
        <button type="submit">Invia</button>
    </form>
</body>
</html>