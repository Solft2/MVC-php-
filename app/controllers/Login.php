<?php

class Login{
  use Controller;
  public function index() 
  {
    if($_SERVER['REQUEST_METHOD'] == "POST"){
      $user = new User();
      $arr['email']=$_POST['email'];
      $row = $user->first($arr); 
      if($row){
      if($row->password === $_POST['password']){
        $SESSION['USER'] = $row;
        redirect('home');
      }
    }
    $user -> errors['email'] = "Wrong email or password";
    $data['errors'] = $user->errors;
    }

    $this->view('login',$data);
  }
    
}