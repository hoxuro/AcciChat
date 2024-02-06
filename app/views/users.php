<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AcciChat</title>
    <!-- FONT AWESOME -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/reset.css">
    <link rel="stylesheet" href="<?= ROOT ?>/assets/css/style.css">
</head>

<body>
    <main class="dashboard dashboard--users">

        <div class="search-users-box">
            <!-- CURRENT USER -->
            <div class="user">
                <div class="user__info">
                    <img src="<?= ROOT ?>/assets/img/empty-profile.webp" alt="">
                    <div class="user__text-box">
                        <p class="user__name">Your Name</p>
                        <p class="user__activity">Active now</p>
                    </div>
                </div>
                <div class="user__btn-box">
                    <button class="user__btn">Logout</button>
                </div>
            </div>

            <!-- SEARCH FORM -->
            <form class="search-form" action="#" method="post">
                <input type="text" name="username" placeholder="Enter a name to search..." />
                <button type="submit" class="btn-search"><i class="fas fa-search"></i></button>
            </form>

            <!-- USER LIST -->
            <ul class="users-list">
                <!-- USER -->
                <div class="user-sm">
                    <div class="user-sm__info">
                        <img src="<?= ROOT ?>/assets/img/empty-profile.webp" alt="">
                        <div class="user-sm__text-box">
                            <p class="user-sm__name">Your Name</p>
                            <p class="user-sm__last-mess">This is a text...</p>
                        </div>
                    </div>
                    <div class="user-sm__status-box">
                        <div class="user-sm__status  user-sm__status--online"></div>
                    </div>
                </div>
                <!-- USER -->
                <div class="user-sm">
                    <div class="user-sm__info">
                        <img src="<?= ROOT ?>/assets/img/empty-profile.webp" alt="">
                        <div class="user-sm__text-box">
                            <p class="user-sm__name">Your Name</p>
                            <p class="user-sm__last-mess">This is a text...</p>
                        </div>
                    </div>
                    <div class="user-sm__status-box">
                        <div class="user-sm__status  user-sm__status--offline"></div>
                    </div>
                </div>
                <!-- USER -->
                <div class="user-sm">
                    <div class="user-sm__info">
                        <img src="<?= ROOT ?>/assets/img/empty-profile.webp" alt="">
                        <div class="user-sm__text-box">
                            <p class="user-sm__name">Your Name</p>
                            <p class="user-sm__last-mess">This is a text...</p>
                        </div>
                    </div>
                    <div class="user-sm__status-box">
                        <div class="user-sm__status  user-sm__status--online"></div>
                    </div>
                </div>
                <!-- USER -->
                <div class="user-sm">
                    <div class="user-sm__info">
                        <img src="<?= ROOT ?>/assets/img/empty-profile.webp" alt="">
                        <div class="user-sm__text-box">
                            <p class="user-sm__name">Your Name</p>
                            <p class="user-sm__last-mess">This is a text...</p>
                        </div>
                    </div>
                    <div class="user-sm__status-box">
                        <div class="user-sm__status  user-sm__status--online"></div>
                    </div>
                </div>
                <!-- USER -->
                <div class="user-sm">
                    <div class="user-sm__info">
                        <img src="<?= ROOT ?>/assets/img/empty-profile.webp" alt="">
                        <div class="user-sm__text-box">
                            <p class="user-sm__name">Your Name</p>
                            <p class="user-sm__last-mess">This is a text...</p>
                        </div>
                    </div>
                    <div class="user-sm__status-box">
                        <div class="user-sm__status  user-sm__status--online"></div>
                    </div>
                </div>
            </ul>
        </div>
    </main>
</body>

</html>