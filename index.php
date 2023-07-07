<?php

include_once('partials/header.php');

?>

<div class="container-fluid">
    <main class="row">
        <section class="col-8">
            <div class="chat-window">
                <?php include_once('partials/chat.php') ?>
            </div>
            <?php include_once('partials/formSendMessage.php')  ?>
        </section>
        <section class="col-4">
            <aside>
                <?php include_once('partials/userList.php') ?>
            </aside>

            <?php include_once('partials/deleteButton.php') ?>
        </section>
    </main>
</div>



<?php

include_once('partials/footer.php');

?>