<?php

class Home extends Controller
{
    // a estos métodos se les suele llamar acciones o metodos de accion
    public function index($name = '')
    {
        $this->view('login');
    }

    public function register()
    {
        $this->view('register');
    }

    public function users()
    {
        $this->view('users');
    }

    public function chat()
    {
        $this->view('chat');
    }

    public function signup()
    {

        $fname = $_POST['f_name'];
        $lname = $_POST['l_name'];
        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!empty($fname) && !empty($lname) && !empty($email) && !empty($password)) {
            // we need to validate fields
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $model = $this->model('Model');

                $emailExists = $model->emailExists($email);

                if (!$emailExists) {
                    if (isset($_FILES['profile_pic'])) {
                        $img_name = $_FILES['profile_pic']['name'];
                        $tmp_name = $_FILES['profile_pic']['tmp_name'];

                        $img_explode = explode('.', $img_name);
                        $img_ext = end($img_explode);

                        $extensions = ['png', 'jpg', 'jpeg'];

                        if (in_array($img_ext, $extensions) === true) {
                            $time = time(); //this will return us the current time, we need
                            //                we need this time to give a unique name

                            // move the user img to our uploading folder 
                            $new_img_name = $time . $img_name;
                            if (move_uploaded_file($tmp_name, __DIR__ . '\..\resources\images\\' . $new_img_name)) {
                                $status = "Active now";
                                // creating a random ID for user
                                $random_id = rand(time(), 10000000);

                                // If we the user inserted in our database
                                if ($model->addUser($random_id, $fname, $lname, $email, $password, $new_img_name, $status)) {
                                    // we want to enter the web application with the new registerd user
                                    $model->selectUser($email);

                                    $loggedUser = $model->getUser();
                                    // if logged user is not null
                                    if ($loggedUser) {
                                        // we need to initialize the session
                                        $_SESSION['unique_id'] = $loggedUser[0]->unique_id;
                                        echo 'success';
                                    } else {
                                        echo 'Something went wrong';
                                    }
                                } else {
                                    echo 'Something went wrong...';
                                }
                            } else {
                                echo 'Error moving the user profile picture';
                            }
                        } else {
                            echo 'Please, select an valid file!';
                        }
                    } else {
                        echo 'Please, you need to upload your profile picture';
                    }
                } else {
                    echo 'This email was already registered!';
                }
            } else {
                echo 'This is not a valid email!';
            }
        } else {
            echo 'All input fields are required!';
        }
    }

    public function login()
    {

        $email = $_POST['email'];
        $password = $_POST['password'];

        if (!empty($email) && !empty($password)) {
            // check if email and password are correct

            // instantiate a new model
            $model = $this->model('Model');

            if ($model->userExists($email, $password)) {
                // we want to enter the web application with the new registerd user
                $loggedUser = $model->selectUser($email);

                $loggedUser = $model->getUser();
                // if logged user is not null
                if ($loggedUser) {
                    // we need to initialize the session
                    $_SESSION['unique_id'] = $loggedUser[0]->unique_id;
                    echo 'success';
                } else {
                    echo 'Something went wrong...';
                }
            } else {
                echo 'Email or password incorrect!';
            }
        } else {
            echo 'All input fields are required!';
        }
    }
}
