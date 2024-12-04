<?php

class User
{
    public $name;
    public $email;
    protected $status = 'active';

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->email = $email;
    }

    public function login()
    {
        echo $this->name . ' is logged in <br>';
    }
}


class Admin extends User
{
    public $level;

    public function __construct($name, $email, $level)
    {
        $this->level = $level;
        parent::__construct($name, $email); // we are calling the constructor method in the parent class
    }

    public function login()
    {
        echo $this->name . ' the admin is logged in <br> ';
    }

    public function getStatus()
    {
        return $this->status;
    }
}

$admin1 = new Admin('Joshua', 'joshua@gmail.com', 3);
echo $admin1->name . '<br>';
echo $admin1->email . '<br>';
echo $admin1->level . '<br>';
echo $admin1->getStatus() . '<br>';
echo $admin1->login() . '<br>';

var_dump($admin1);
