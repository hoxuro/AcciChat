<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AcciChat</title>
</head>

<body>
    <main>
        <section class="section-regForm">
            <h1 class="heading-primary">AcciChat</h1>
            <!-- REGISTER FORM -->
            <form action="#" method="post" class="registerForm">
                <div class="registerForm__group">
                    <div class="registerForm__error-box">
                        <p class="error-text">This is an error message!</p>
                    </div>
                </div>
                <div class="registerForm__group">
                    <label for="email">Email Address:</label>
                    <input type="email" name="email" required />
                </div>
                <div class="registerForm__group">
                    <label for="password">Password:</label>
                    <input type="password" name="password" required />
                </div>
                <input type="submit" name="reg-submit" placeholder="Start chatting now" />
                <div class="registerForm__group">
                    <p class="registerForm__sign-text">Not registered yet?</p><a href="<?= ROOT ?>">Signup now</a>
                </div>
            </form>
        </section>
    </main>
</body>

</html>