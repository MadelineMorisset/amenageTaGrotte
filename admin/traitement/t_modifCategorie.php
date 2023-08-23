<?php include('../session_start.php'); 

if (isset($_FILES['media']) AND $_FILES['media']['error'] == 0){
    $dossier = '../../upload/';
    $fichier = basename($_FILES['media']['name']);
    $destination = $dossier.$fichier;
    $chemin =$fichier;
        if ($_FILES['media']['size'] <= 1000000) {
            $fileInfo = pathinfo($_FILES['media']['name']);
            $extension = $fileInfo['extension'];
            $allowedExtensions = ['jpg', 'jpeg', 'gif', 'png'];
                if (in_array($extension, $allowedExtensions)) {     
                    move_uploaded_file($_FILES['media']['tmp_name'], $destination);
                }
        }
} elseif($_POST['oldimage'] != null){
    $chemin = $_POST['oldimage'];
  } else {
    $chemin = null;
}
if ($_POST['media-delete'] == true) {
  $chemin = null;
}

if (isset($_POST['categorie']) AND !empty($_POST['categorie'])){
    $query = $db->prepare('UPDATE categorie SET categorie = :categorie, media= :media WHERE id_admin= :id');
    $query-> execute([
        'categorie' => $_POST['categorie'],
        'media' => $chemin,
        'id'=>$_POST['postid'],
    ]);
}  
header('Location: ../voir_categorie.php');