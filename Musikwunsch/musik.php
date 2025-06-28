<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $song = strip_tags(trim($_POST["song"]));
    $artist = strip_tags(trim($_POST["artist"]));

    $to = "clara131@gmx.de";
    $subject = "Neuer Musikwunsch";
    $headers = "From: clara131@gmx.de\r\n";
    $headers .= "Reply-To: clara131@gmx.de\r\n";
    $headers .= "Content-Type: text/plain; charset=utf-8\r\n";

    $message = "Neuer Musikwunsch erhalten:\n\n";
    $message .= "🎵 Song: " . $song . "\n";
    $message .= "👤 Artist: " . $artist . "\n";

    // Senden
    if (mail($to, $subject, $message, $headers)) {
        header("Location: " . $_SERVER['HTTP_REFERER'] . "?success=1");
        exit();
    } else {
        echo "Fehler beim Senden. Bitte versuche es erneut.";
    }
} else {
    echo "Ungültiger Zugriff.";
}
?>
