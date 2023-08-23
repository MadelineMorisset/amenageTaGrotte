<?php include('../session_start.php');

if (isset($_FILES['media']) AND $_FILES['media']['error'] == 0){
    $dossier = '../../upload/';
    $fichier = basename($_FILES['media']['name']);
    $destination = $dossier.$fichier;
    $chemin =$fichier;
        if ($files['media']['size'] <= 1000000) {
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
    if(isset($_POST['article']) && !empty($_POST['article'])) {
        $query = $db->prepare('SELECT * FROM article WHERE article = :article');
        $query->execute([
            'article' => $_POST['article']
        ]);
        $id = $query->fetchAll();
            foreach($id as $id_art){
                $id_article = $id_art['id_article'];
            }
        $query2 = $db->prepare('INSERT INTO media (media, id_article, id_admin) 
                                VALUES(:media, :id_article, :id_admin)');
        $query2->execute([
            'media' => $chemin,
            'id_article' =>$id_article,
            'id_admin' => $_SESSION['id_admin'], 
        ]);
    }
    header('Location: ../voir_media.php?');
    
    ?>