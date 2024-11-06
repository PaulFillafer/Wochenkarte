<?php

class User
{
    private $email;
    private $password;

    public static $storedEmail = "admin";
    public static $storedPassword = "admin";

    public function __construct($email, $password) {
        $this->email = $email;
        $this->password = $password;
    }

    public static function get($email, $password) {
        if ($email === self::$storedEmail && $password === self::$storedPassword) {
            return new User($email, $password);
        }
        return null;
    }

    public function login($email, $password) {
        session_start();
        $_SESSION['loggedIn'] = true;
        $_SESSION['email'] = $email;
        $_SESSION['password'] = $password;
        return true;
    }

    public static function logout() {
        session_start();
        session_unset();
        session_destroy();
    }

    public static function isLoggedIn() {
        session_start();
        return isset($_SESSION['loggedIn']) && $_SESSION['loggedIn'] && $_SESSION['email'] === $_SESSION['email'] && $_SESSION['password'] === $_SESSION['password'];
    }


    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @param mixed $email
     */
    public function setEmail($email)
    {
        $this->email = $email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @param mixed $password
     */
    public function setPassword($password)
    {
        $this->password = $password;
    }




}