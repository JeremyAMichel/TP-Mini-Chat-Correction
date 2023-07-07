<?php 
include_once('utils/connexion.php');

$requete = $bdd->query("SELECT * FROM messages INNER JOIN author ON messages.author_id = author.id ORDER BY messages.created_at ASC LIMIT 15");
$messages = $requete->fetchAll();



?>


<div class="messages">
    <?php foreach($messages as $message){ ?>
        <div class="message">
            <span class="username"><?= $message['name'] ?></span>
            <span class="date"><?= date('H:i', strtotime($message['created_at'])) ?> : </span>
            <span class="text"><?= $message['content'] ?></span>
        </div>
    <?php } ?>

</div>