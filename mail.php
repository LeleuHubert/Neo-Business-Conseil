<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Email en provenance de neo-bc.com</title>
</head>

<body>
    <?php
    $retour = mail('contact@neo-bc.com', 'Envoi depuis la page Contact', $_POST['message']);
    if ($retour) {
        echo '<p>Votre message a bien été envoyé.</p>';
    }
    ?>
</body>
</html>
