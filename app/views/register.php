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
        <h1>register</h1>
        <section class="section-registrationForm">
            <h1 class="heading-primary">AcciChat</h1>
            <!-- LOGIN FORM -->
            <form action="#" method="post" class="registrationForm" enctype="multipart/form-data">
                <div class="registrationForm__group">
                    <div class="error-box">
                        <p class="error-box__text">This is an error message!</p>
                    </div>
                </div>
                <div class="registrationForm__group--two-cols">
                    <div class="registrationForm__group--two-cols__col">
                        <label for="f_name">First Name:</label>
                        <input type="text" name="f_name" required />
                    </div>
                    <div class="registrationForm__group--two-cols__col">
                        <label for="l_name">Last Name:</label>
                        <input type="text" name="l_name" required />
                    </div>
                </div>
                <div class="registrationForm__group">
                    <label for="email">Email Address:</label>
                    <input type="email" name="email" required />
                </div>
                <div class="registrationForm__group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" required />
                </div>
                <div class="registrationForm__group">
                    <label for="profile-pic">Select profile picture:</label>
                    <input type="hidden" name="MAX_FILE_SIZE" value="500000"> <!-- Tamaño en bytes (1 MB) -->
                    <input type="file" name="profile-pic" accept=".jpg, .jpeg, .png" />
                </div>

                <input type="submit" name="reg-submit" value="Start chatting now!" />
                <div>
                    <p class="registrationForm__sign-text">Already signed up?</p><a class="registrationForm__reg-link" href="<?= ROOT ?>">Login now</a>
                </div>
            </form>
        </section>

        <div class="copy-box">
            <p>Made with 💖 by </p><a class="copy-box__author" href="https://github.com/hoxuro/" target="_blank">Hoxuro</a>
        </div>
    </main>
</body>

</html>