<?php
 
 class User{

    use Model;
    protected $table = "users";
    protected $allowedcolumns =[
        "email",
        "password",
    ];

    public function validate($data){
        $this ->errors = [];

        if(empty($data['email'])){
            $this->errors['email']="email is required";
        }elseif(!filter_var($data['email'],FILTER_VALIDATE_EMAIL)){
                $this->errors['email']="this email is not valid";
            }
        if(empty($data['password'])){
            $this->errors['password']="Password is required";
        }
        if(empty($data['terms'])){
            $this->errors['terms']="Accept the terms";
        }
        if(empty($this->errors)){
             return true;
        }
        return false;
    }  
}
