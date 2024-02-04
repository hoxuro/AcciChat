<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AcciChat</title>
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/style.css">
</head>

<body>
    <main class="dashboard">
        <div class="chat">
            <div class="user-chat">
                <span class="user-chat__back-icon">&larr;</span>
                <img width="75px" height="75px" src="<?= ROOT ?>/assets/img/empty-profile.webp" alt="">
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
                    <input type="submit" value="Send">
                </form>
            </div>
        </div>
    </main>

    <div class="copy-box">
        <p>Made with 💖 by </p><a class="copy-box__author" href="https://github.com/hoxuro/" target="_blank">Hoxuro</a>
    </div>
</body>

</html>