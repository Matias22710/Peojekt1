<?php

namespace App\Models;

class User 
{
    private ?int $id = null;
    private string $username;
    private string $password;
    private string $role;
    private string $created_at;

    public function __construct(string $username, string $password, string $role = "user", bool $isAlreadyHash = false){
        $this->username = $username;
        if($isAlreadyHash){
            $this->password = $password;
        }else{
            $this->password =password_hash($password, PASSWORD_BCRYPT);
        }        
        $this->role = $role;

    }

    public function getId() :int 
    {
        return $this->id;
    }

    public function getUsername() :string 
    {
        return $this->username;
    }

    public function getPassword() :string 
    {
        return $this->password;
    }

    public function getRole() :string 
    {
        return $this->role;
    }
    
    public function getCreatedAt() :string 
    {
        return $this->created_at;
    }

    public function setId(int $id) :void 
    {
        $this->id = $id;
    }

    public function setUsername(STRING $username) :void 
    {
        $this->username = $username;
    }

    public function setCreatedAt(string $created_at) :void 
    {
        $this->created_at = $created_at;
    }

    public function passwordVerify(string $plainPassword) :bool 
    {
        return password_verify($plainPassword, $this->password);
    }
}
