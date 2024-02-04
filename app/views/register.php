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
        <div class="registrationForm-box">
            <div class="logo-box">
                <svg class="form-logo" id="Capa_1" data-name="Capa 1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 470.57 470.57">
                    <defs>
                        <style>
                            .cls-1,
                            .cls-5 {
                                fill: none;
                            }

                            .cls-2 {
                                fill: #010101;
                            }

                            .cls-3 {
                                fill: #0078b7;
                            }

                            .cls-4 {
                                clip-path: url(#clip-path);
                            }

                            .cls-5 {
                                stroke: #0078b7;
                                stroke-miterlimit: 10;
                                stroke-width: 44px;
                            }
                        </style>
                        <clipPath id="clip-path" transform="translate(22 22)">
                            <rect class="cls-1" width="427" height="426.57" />
                        </clipPath>
                    </defs>
                    <title>accichat-logo-square</title>
                    <path class="cls-2" d="M230.47,331.25l.05.27a10.54,10.54,0,0,1-.48,1.79c-4.4,12.48-23,15.51-31.29,3.42-11.72-17.08,10.08-37.47,26-24.29,2.77,2.33,5.48,6,5.8,9.65l-.11,6.18A10.91,10.91,0,0,0,230.47,331.25Z" transform="translate(22 22)" />
                    <path class="cls-3" d="M120,218.68c1.73.6,4.12.38,5.91.22-.92-15.67,9.32-27.06,25.43-27.11,10.79,0,14.86,5,14.8,15.83v86.6c0,4.28.27,7.75-2.22,11.49-6.24,9.33-20.33,7.7-28.52,2.12-6.18-4.23-9.55-10.25-11-17.46s2.5-6.62-4.66-6.56l-11.82.05c-8.84,0-16.11-.87-20.28-10.47-2.93-6.66-1.68-14.91-1.68-22v-10c0-9.39,1.84-18.71,12.69-21.69l2.82-.65c.43-.11,1.14-.11,1.51-.44l.11-.11c3.15-1.14,13.56-1,16.7.06Z" transform="translate(22 22)" />
                    <path class="cls-2" d="M103.53,218.57l.7-30.15a278.21,278.21,0,0,1,6-41.26c4.83-21.8,9.82-33.4,30.15-45.82,42.08-25.76,108.89-25.6,150.31.81,19.09,12.15,23.7,23.59,28.25,44.14a295.31,295.31,0,0,1,6.73,51.24l.11,21.21c-1.14,0-2.61-.28-3.85-.28l-7.7-.05c-1.74,0-3.53,0-5.26.11a289.51,289.51,0,0,0-5.91-60.25c-5.91-29.06-14.16-38.88-41.76-46.79a162.07,162.07,0,0,0-45.38-6.62,114.11,114.11,0,0,0-13,.33L187.09,107a141.31,141.31,0,0,0-21.1,5.1c-22.72,7.32-31.55,14.1-37.57,36.82a240.93,240.93,0,0,0-5.48,27.65l-2.11,21.31c-.06,1.47-.38,2.88-.44,4.34l0,16.49-.17-.11C117.08,217.54,106.62,217.43,103.53,218.57Z" transform="translate(22 22)" />
                    <path class="cls-3" d="M230.41,322.14l35.2.06c9.7,0,13.88,0,17.78-11.06l-2.11.43c-5,1.63-12.2.6-15.94-3.2-4.83-4.88-3.8-11.33-3.8-17.57V205.88c.11-12.74,8-14.15,18.6-14s20.28,9.71,21.74,20.07a52.61,52.61,0,0,1,.17,7.21l4.17-.11a3.79,3.79,0,0,0,2.23-.38,21.57,21.57,0,0,1,5.25-.32l7.7,0a18.92,18.92,0,0,0,3.91,0c7.92,1.74,14.42,7.32,15.72,15.4a47.48,47.48,0,0,1,.22,7.92V264a28.76,28.76,0,0,1-.16,5.26c-2.6,13.34-13.72,14.59-24.89,14.59H303.56l-.16,6.29c-.43,6.29-5,12-9.54,15.89-1.14,1-1.36,1.08-1.57,2.55-2.17,13.39-9.33,22.72-23.43,22.72H234.81c-1.47,0-3,.11-4.45,0a10.52,10.52,0,0,1-.11-2.93Z" transform="translate(22 22)" />
                    <g class="cls-4">
                        <rect class="cls-5" x="22" y="22" width="426.57" height="426.57" />
                    </g>
                </svg>
                <h1 class="heading-primary">AcciChat</h1>
            </div>

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
                    <img width="100px" height="100px" src="<?= ROOT ?>/assets/img/empty-profile.webp" alt="">
                    <input type="hidden" name="MAX_FILE_SIZE" value="500000"> <!-- Tamaño en bytes (1 MB) -->
                    <input type="file" name="profile-pic" accept=".jpg, .jpeg, .png" />
                </div>

                <input type="submit" name="reg-submit" value="Start chatting now!" />
                <div>
                    <p class="registrationForm__sign-text">Already signed up?</p><a class="registrationForm__reg-link" href="<?= ROOT ?>">Login now</a>
                </div>
            </form>
        </div>
    </main>
    <div class="copy-box">
        <p>Made with 💖 by </p><a class="copy-box__author" href="https://github.com/hoxuro/" target="_blank">Hoxuro</a>
    </div>
</body>

</html>