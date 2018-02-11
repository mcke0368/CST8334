<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $password;

    public function __construct($id, $firstname, $lastname, $email, $password) {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->password = $password;
    }

    public function getId() {
        return $this->id;
    }

    public function getFirstName() {
        return $this->firstname;
    }

    public function getCertifications() {
        return $this->certifications;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getId() {
        return $this->id;
    }
    
}
