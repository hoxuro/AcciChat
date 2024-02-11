<?php

require_once(__DIR__ . '/inc/header.php');


// Collect the user PDO
$user = $data['user'];

?>

<body>
    <main class="dashboard dashboard--users">

        <div class="search-users-box">
            <!-- CURRENT USER -->
            <div class="user">
                <div class="user__info">
                    <img src="<?php echo ROOT . '/assets/images/' . $user->img; ?>" alt="">

                    <div class="user__text-box">
                        <p class="user__name"><?php echo ucwords($user->fname . ' ' . $user->lname)  ?></p>
                        <p class="user__activity"><?php echo $user->status; ?></p>
                    </div>
                </div>
                <div class="user__btn-box">
                    <button class="user__btn">Logout</button>
                </div>
            </div>

            <!-- SEARCH FORM -->
            <div class="search-box">
                <input type="text" name="username" placeholder="Enter a name to search..." />
                <button type="submit" class="btn-search"><i class="fas fa-search"></i></button>
            </div>

            <!-- USER LIST -->
            <ul class="users-list">

            </ul>
        </div>
    </main>

    <script src="<?= ROOT ?>/assets/js/users.js"></script>
</body>

</html>