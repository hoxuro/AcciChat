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
        <div class="app-box">
            <!-- CURRENT USER -->
            <div class="user">
                <div class="user__info">
                    <img width="75px" height="75px" src="<?= ROOT ?>/assets/img/empty-profile.png" alt="">
                    <div class="user__text-box">
                        <p class="user__name">Your Name</p>
                        <p class="user__status">Active now</p>
                    </div>
                </div>
                <button class="btn btn--logout">Logout</button>
            </div>

            <!-- SEARCH FORM -->
            <form class="search-form" action="#" method="post">
                <input type="text" name="username" placeholder="Enter a name to search..." />
                <input type="submit" name="search" value="Search" />
            </form>

            <!-- USER LIST -->
            <ul class="users-list">
                <!-- USER -->
                <div class="user-sm">
                    <div class="user-sm__info">
                        <img width="75px" height="75px" src="<?= ROOT ?>/assets/img/empty-profile.png" alt="">
                        <div class="user-sm__text-box">
                            <p class="user-sm__name">Your Name</p>
                            <p class="user-sm__status">This is a text message</p>
                        </div>
                    </div>
                    <div class="user-sm__status">i</div>
                </div>
                <!-- USER -->
                <div class="user-sm">
                    <div class="user-sm__info">
                        <img width="75px" height="75px" src="<?= ROOT ?>/assets/img/empty-profile.png" alt="">
                        <div class="user-sm__text-box">
                            <p class="user-sm__name">Your Name</p>
                            <p class="user-sm__status">This is a text message</p>
                        </div>
                    </div>
                    <div class="user-sm__status">i</div>
                </div>
                <!-- USER -->
                <div class="user-sm">
                    <div class="user-sm__info">
                        <img width="75px" height="75px" src="<?= ROOT ?>/assets/img/empty-profile.png" alt="">
                        <div class="user-sm__text-box">
                            <p class="user-sm__name">Your Name</p>
                            <p class="user-sm__status">This is a text message</p>
                        </div>
                    </div>
                    <div class="user-sm__status">i</div>
                </div>
            </ul>
        </div>


        <div class="copy-box">
            <p>Made with 💖 by </p><a class="copy-box__author" href="https://github.com/hoxuro/" target="_blank">Hoxuro</a>
        </div>
    </main>
</body>

</html>