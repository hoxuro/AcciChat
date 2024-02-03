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
        <h1>login</h1>
        <section class="section-loginForm">
            <h1 class="heading-primary">AcciChat</h1>
            <!-- LOGIN FORM -->
            <form action="#" method="post" class="loginForm">
                <div class="loginForm__group">
                    <div class="error-box">
                        <p class="error-box__text">This is an error message!</p>
                    </div>
                </div>
                <div class="loginForm__group">
                    <label for="email">Email Address:</label>
                    <input type="email" name="email" required />
                </div>
                <div class="loginForm__group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" required />
                </div>
                <input type="submit" name="reg-submit" value="Start chatting now!" />
                <div>
                    <p class="loginForm__sign-text">Not registered yet?</p><a class="loginForm__reg-link" href="<?= ROOT ?>">Signup now</a>
                </div>
            </form>
        </section>

        <div class="copy-box">
            <p>Made with 💖 by </p><a class="copy-box__author" href="https://github.com/hoxuro/" target="_blank">Hoxuro</a>
        </div>
    </main>
</body>

</html>