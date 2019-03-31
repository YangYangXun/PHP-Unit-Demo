<?php
namespace App\Models;

class User
{
    public $first_name;
    public $last_name;

    public function setFirstName($firstName)
    {
        $this->first_name = trim($firstName);
    }

    public function getFirstName()
    {
        return $this->first_name;
    }

    public function setLastName($last_name)
    {
        $this->last_name = trim($last_name);
    }

    public function getLastName()
    {
        return $this->last_name;
    }

    public function getFullName()
    {
        return $this->getFirstName() . ' ' . $this->getLastName();
    }
}
