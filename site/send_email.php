<?php
// Récupérer les données du formulaire
$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Paramètres de l'e-mail
$to = 'elkadiri.zouhra@ine.inpt.ma'; // Adresse e-mail de destination
$subject = 'Nouveau message de formulaire de contact';
$headers = "From: $name <$email>" . "\r\n";
$headers .= "Reply-To: $email" . "\r\n";

// Corps de l'e-mail
$mailBody = "Nom: $name\n";
$mailBody .= "Email: $email\n";
$mailBody .= "Téléphone: $phone\n";
$mailBody .= "Message:\n$message";

// Envoyer l'e-mail
if (mail($to, $subject, $mailBody, $headers)) {
  echo 'Message envoyé avec succès';
} else {
  echo 'Erreur lors de l\'envoi du message';
}
?>
