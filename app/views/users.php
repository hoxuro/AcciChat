<?php

require_once(__DIR__ . '/inc/header.php');

?>

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