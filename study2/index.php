<?php
$object = new Subscriber;
$object->name = "Fred";
$object->password = "pword";
$object->phone = "012 345 6789";
$object->email = "fred@bloggs.com";
$object->display();

class User
{
    public $name, $password	;

    public function save_user()
    {
        echo "Save User code gods here";
    }
}

class Subscriber extends User
{
    public $phone, $email;

    public function display()
    {
        echo "Name: " . $this->name . "<br>";
        echo "Pass: " . $this->password . "<br>";
        echo "Phone: " . $this->phone . "<br>";
        echo "Email: " . $this->email;
    }
}
