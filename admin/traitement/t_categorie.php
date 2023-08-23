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
}   else{
        $chemin = null;
}
    
    $query = $db->prepare('INSERT INTO categorie (categorie, media, id_admin) VALUES(:categorie, :media, :id_admin)');
    $query->execute([
    'categorie' => $_POST['cat'],
    'media' => $chemin,
    'id_admin' => $_SESSION['id_admin'], 
    ]);

header('Location: ../voir_categorie.php');