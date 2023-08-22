<?php
session_start();

if (!isset($_POST['mail']) || empty($_POST['mail']) || !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) || !isset($_POST['password']) || empty($_POST['password'])) {
    die('Il faut une adresse mail et un mot de passe pour se connecter.');
}
$mail = $_POST['mail'];
$mdp = $_POST['password'];

$db = new PDO(
    'mysql:host=localhost;dbname=amenage_ta_grotte;charset=utf8',
    'root',
    ''
);
$query = $db->prepare('SELECT * FROM administrateur WHERE mail = :mail');
$query->execute([
    'mail' => $mail
]);
$administrateur = $query->fetchAll();
foreach ($administrateur as $utilisateur) {
    if (password_verify($mdp, $utilisateur['mdp'])) {
        $_SESSION['mail'] = $mail;
        $_SESSION['id_admin'] = $utilisateur['id_admin'];
        $_SESSION['nom'] = $utilisateur['nom'];
        $_SESSION['prenom'] = $utilisateur['prenom'];
        header('Location: admin.php');
    } else { die('erreur'); }
}

?>
