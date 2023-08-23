<?php include('../session_start.php'); 

if (isset($_POST['mail']) AND !empty($_POST['mail']) && $_POST['mdp'] == $_POST['mdp2']){
    $mdp = strip_tags($_POST['mdp']);
    $hashed_mdp = password_hash($mdp, PASSWORD_DEFAULT);
    $query = $db->prepare('UPDATE administrateur SET nom = :nom, prenom= :prenom, mail= :mail, mdp= :mdp WHERE id_admin= :id');
    $query-> execute([
        'nom' => $_POST['nom'],
        'prenom' => $_POST['prenom'],
        'mail' =>strip_tags($_POST['mail']),
        'mdp' => $hashed_mdp,
        'id'=>$_POST['postid'],
    ]);
}  
header('Location: ../voir_admin.php?');