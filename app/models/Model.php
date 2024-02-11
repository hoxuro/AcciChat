<?php

class Model
{
    use Database;

    protected $loggedUser;
    protected $users;

    /**
     * Método constructor que nos permite crear instancias de Model
     * su funcion sera almacenar los todos en un array en forma de 
     * objetos.
     */
    public function __construct()
    {
        $this->loggedUser = null;
        $this->users = [];
    }

    /**
     * Getter method that allow us to get the selected user in our
     * Model with security.
     * 
     * @return PDO $logguedUser selected in our model, null
     * if is not selected
     */
    public function getUser()
    {
        return $this->loggedUser;
    }

    /**
     * Method that allows to check if the email was already
     * registered in our application
     * 
     * @param email string the email of the user that want to register
     * @return resultado false if the email is not registered in the
     * database.
     */
    public function emailExists($email)
    {
        $query = "SELECT email FROM users WHERE email LIKE '{$email}'";

        $resultado = $this->query($query);

        // If there was an exception in our database
        if ($resultado instanceof PDOException) {
            echo '<span style="color: red;">Error, no ha podido insertarse su TODO.</span></br>';
        }
        // If there has not been an exception in our database
        if (!($resultado instanceof PDOException)) {
            return $resultado;
        }
    }

    /**
     * Method that allow us to insert a new user to our database
     * and complete the registration.
     * 
     * @param string $unique_id the unique user identifier.
     * @param string $fname the user name.
     * @param string $lname the user last name.
     * @param string $email the user email.
     * @param string $password the user password.
     * @param string $prof_pic the user profile pic name in our uploaded folder.
     * @param string $status the status of the user.
     * 
     * @return false is the result of the query is not a PDO exception
     */
    public function addUser($unique_id, $fname, $lname, $email, $password, $prof_pic, $status)
    {
        $query = "INSERT INTO users (unique_id, fname, lname, email, password, img, status)
        VALUES ({$unique_id}, '{$fname}', '{$lname}', '{$email}', '{$password}', '{$prof_pic}', '{$status}')";


        $resultado = $this->query($query);

        // // Si ha habido error con la base de datos
        return !($resultado instanceof PDOException);
    }

    /**
     * Method that allow us to get the logged user from the 
     * database with the help of the email.
     * 
     * @param string $unique_id the unique id of the user we want to
     * select
     * 
     */
    public function selectUser($email)
    {
        $query = "SELECT * FROM users WHERE email = '{$email}'";

        $resultado = $this->query($query);

        if ($resultado instanceof PDOException) {
            echo '<span style="color: red;">Error, no ha podido seleccionarse el usuario.</span></br>';
            return false;
        }

        $this->loggedUser = $resultado;
    }

    /**
     * Method that allow us to check if the email entered in the login
     * form is registered in our database.
     * 
     * @param string $email the email of the user we want to logged
     * @param string $password the password of the user we want to logged
     */
    public function userExists($email, $password)
    {
        $query = "SELECT * FROM users WHERE email = '{$email}' AND password = '{$password}'";

        $resultado = $this->query($query);

        if ($resultado instanceof PDOException) {
            echo '<span style="color: red;">Error, en la consulta.</span></br>';
            return false;
        }

        return $resultado;
    }

    /**
     * Method that allow us to check if the email entered in the login
     * form is registered in our database.
     * 
     * @param string $unique_id a unique number stored in the session
     * 
     * @return int $resultado 1 if the user exists in the database
     */
    public function sessionExists($unique_id)
    {
        $query = "SELECT count(*) AS num_rows FROM users 
                  WHERE unique_id = {$_SESSION['unique_id']}";

        $resultado = $this->query($query);

        if ($resultado instanceof PDOException) {
            echo '<span style="color: red;">Error, en la consulta.</span></br>';
            return false;
        }

        return $resultado[0]->num_rows;
    }

    /**
     * Method that allow us to select all from the user that is logged
     * in our application.
     * 
     * @param string $unique_id a unique number stored in the session
     * 
     * @return PDO $resultado the user data
     */
    public function selectSession($unique_id)
    {
        $query = "SELECT * FROM users 
                  WHERE unique_id = {$_SESSION['unique_id']}";

        $resultado = $this->query($query);

        if ($resultado instanceof PDOException) {
            echo '<span style="color: red;">Error, en la consulta.</span></br>';
            return false;
        }

        return $resultado[0];
    }

    /**
     * Method that allow us to refresh the data of the users that
     * exists in our database.
     */
    public function refreshUsers()
    {
        $query = "SELECT * FROM users";

        $resultado = $this->query($query);

        if ($resultado instanceof PDOException) {
            echo '<span style="color: red;">Error, en la consulta.</span></br>';
            return false;
        }

        // this allow us to clone by value an array of objects
        $this->users = $resultado;
    }

    /**
     * Method that allow us to refresh the data of the users that
     * exists in our database.
     * 
     * @return Array $users all the users in our database by value
     */
    public function getUsers()
    {
        return array_merge(array(), $this->users);
    }


    /**
     * Method that allow us to get a user that exists in our database
     * by checking his name.
     * 
     * @return PDO the user we are searching
     */
    public function getUserByName($searchName)
    {
        $query = "SELECT * FROM users WHERE fname like '%{$searchName}%' OR lname like '%{$searchName}%'";

        $resultado = $this->query($query);

        if ($resultado instanceof PDOException) {
            echo '<span style="color: red;">Error, en la consulta.</span></br>';
            return false;
        }

        return $resultado;
    }
}
