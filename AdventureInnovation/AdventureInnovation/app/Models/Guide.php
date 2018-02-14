<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guide extends Model
{
    private $id;
    private $firstname;
    private $lastname;
    private $username;
    private $password;
    private $province;
    private $city;
    private $address;
    private $postal_code;
    private $email;
    private $skills;
    private $phone;
    private $certifications;
    private $resume;
    private $image;
    private $description;

    public function __construct($id, $firstname, $lastname, $username, $password, $province, $city, $address, $postal_code, $email,
    $skills, $phone, $certifications,$resume, $image, $description) {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        
        $this->certifications = $certifications;
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
}
