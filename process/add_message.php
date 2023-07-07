<?php

include_once('../utils/connexion.php');

if(!empty($_POST['pseudo'] && !empty($_POST['message']))){
    $requete = $bdd->prepare("SELECT * FROM author WHERE name = :pseudo");
    $requete->execute([
        ':pseudo' => $_POST['pseudo']
    ]);
    $pseudo = $requete->fetch(PDO::FETCH_ASSOC);
    
    if($pseudo){
        $id_author = $pseudo['id'];
    } else{
        $requete = $bdd->prepare("INSERT INTO author(name) VALUES (?)");
        $requete->execute([$_POST['pseudo']]);
    
        $id_author = $bdd->lastInsertId();
    }

    $requete = $bdd->prepare("INSERT INTO messages(author_id, content, created_at) VALUES (:author_id, :content, NOW())");
    $requete->execute([
        ':author_id' => $id_author,
        ':content' => $_POST['message']
    ]);


}
header('Location: ../index.php');