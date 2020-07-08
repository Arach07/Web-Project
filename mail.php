<!DOCTYPE HTML>
<html lang="pl">
    <head>
        <meta charset="utf-8"/>
</head>

<body>

<?php

$to = 'Areq1997@interia.pl';
$name = $_POST['imie'];
$sdname = $_POST['Nazwisko'];
$email = $_POST['email'];
$sex = $_POST['plec'];
$contact = $_POST['kontakt'];
$subject = 'Nowy e-mail od: ' . $name . $sdname . ' (' . $email . ")";
$message = $_POST['opis'];
$headers = 'From: ' . $name . $sdname . '(' . $email . ")";
$headers .= "Content-Type: text/html; charset=utf-8\r\n";


echo "<h2>$name $sdname $email $sex $contact $message</h2>";

mail($to, $subject, $message, $headers);

?>

</body>