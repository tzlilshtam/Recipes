<?php


class recipe_user
{
    private $DB;

    function __construct(mysqli $_DB) // Cons of product
    {
        $this->DB = $_DB;
    }

    public function getUser($username, $password)
    {
    $query = "SELECT * FROM recipe_user WHERE username='$username' AND password='$password'";
    return $this->DB->query($query);
    }

}