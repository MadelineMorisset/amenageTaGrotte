<?php include('../session_start.php'); 

if (isset($_POST['mail']) AND !empty($_POST['mail']) && $_POST['mdp'] == $_POST['mdp2']){
    $mdp = strip_tags($_POST['mdp']);
    $hashed_mdp = password_hash($mdp, PASSWORD_DEFAULT);
    $query = $db->prepare('INSERT INTO administrateur(nom, prenom, mail, mdp) VALUES(:nom, :prenom, :mail, :mdp)');
    $query-> execute([
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'mail' =>strip_tags($_POST['mail']),
        'mdp' => $hashed_mdp,
    ]);
}  
header('Location: ../voir_admin.php');