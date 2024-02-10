<?php

require_once(__DIR__ . '/inc/header.php');
?>

<body>
    <main class="chat-box">
        <div class="chat">
            <div class="user-chat">
                <a class="user-chat__btn-back" href="#"><i class="fas fa-arrow-left"></i></a>
                <img src="<?= ROOT ?>/assets/img/empty-profile.webp" alt="">
                <div class="user-chat__info">
                    <p class="user-chat__name">Your Name</p>
                    <p class="user-chat__activity">Active now</p>
                </div>
            </div>

            <div class="messages-box">
                <div class="message">
                    <p class="message__text message__text--current">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, repellendus.</p>
                </div>
                <div class="message message--other">
                    <img src="<?= ROOT ?>/assets/img/empty-profile.webp" alt="">
                    <p class="message__text message__text--other">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, repellendus.</p>
                </div>
                <div class="message message--other">
                    <img src="<?= ROOT ?>/assets/img/empty-profile.webp" alt="">
                    <p class="message__text message__text--other">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, repellendus.</p>
                </div>
                <div class="message">
                    <p class="message__text message__text--current">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, repellendus.</p>
                </div>
                <div class="message">
                    <p class="message__text message__text--current">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, repellendus.</p>
                </div>
                <div class="message">
                    <p class="message__text message__text--current">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, repellendus.</p>
                </div>
                <div class="message">
                    <p class="message__text message__text--current">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nesciunt, repellendus.</p>
                </div>
            </div>

            <div class="input-text-box">
                <form class="text-form" action="#" method="post">
                    <input type="text" name="send-text" placeholder="Type a message here...">
                    <button type="submit" class="btn-send"><i class="fas fa-paper-plane"></i></button>
                </form>
            </div>
        </div>
    </main>
</body>

</html>