<?php 


$allUniqueAuthors = [];
foreach($messages as $message){
    if(!in_array($message['name'], $allUniqueAuthors)){
        array_push($allUniqueAuthors, $message['name']);
    }
}


foreach($allUniqueAuthors as $author) {
?>

<div class="user">
    <span class="username"><?= $author ?></span>
</div>

<?php } ?>
