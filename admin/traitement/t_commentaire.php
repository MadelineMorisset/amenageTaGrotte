<?php 
if (!isset($_POST['mail']) || empty($_POST['mail']) || !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL) ){
    die('Il faut une adresse mail pour laisser un commentaire.');
} else {
    $mail = strip_tags($_POST['mail']);
    
$db = new PDO(
    'mysql:host=localhost;dbname=amenage_ta_grotte;charset=utf8',
    'root',
    ''
);

    $query = $db->prepare('INSERT INTO commentaire (date_commentaire, nom, mail, commentaire, id_article) 
                        VALUES(:date_commentaire, :nom, :mail, :commentaire, :id_article)');
    $query->execute([
        'date_commentaire' => $_POST['date_com'],
        'nom' => strip_tags($_POST['nom']),
        'mail' => $mail,
        'commentaire' => strip_tags($_POST['com']),
        'id_article' =>  $_POST['postid'],
        ]);
    }
header('Location: ../../index.php');