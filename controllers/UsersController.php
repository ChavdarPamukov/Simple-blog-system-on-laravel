<?php

class UsersController extends BaseController
{
    public function index()
    {
        $this->authorize();
        $this->users = $this->model->getAll();
    }

    public function register()
    {
        if ($this->isPost){
            $username = $_POST['username'];
            if (strlen($username) < 2 || strlen($username) > 50){
                $this->setValidationError("username", "Invalid username");
            }
            $password = $_POST['password'];
            if (strlen($password) < 5 || strlen($password) > 50){
                $this->setValidationError("password", "Invalid password");
            }
            $passwordRepeat = $_POST['password_repeat'];
            if ($password != $passwordRepeat){
                $this->setValidationError("password_repeat", "The two passwords did not match!");
            }
            $full_name = $_POST['full_name'];
            if (strlen($full_name) > 200){
                $this->setValidationError("password", "Invalid full name");
            }
            if ($this->formValid()){
                $userId = $this->model->register($username, $password, $full_name);
                if ($userId){
                    $_SESSION['username'] = $username;
                    $_SESSION['userId'] = $userId;
                    $this->addInfoMessage("Registration successful.");
                    $this->redirect("posts");
                } else{
                    $this->addErrorMessage("Error: user registration faild!");
                }
            }
        }
    }

    public function login()
    {
        if ($this->isPost){
            $username = $_POST['username'];
            $password = $_POST['password'];
            $loggedUserId = $this->model->login($username, $password);
            if ($loggedUserId){
                $_SESSION['username'] = $username;
                $_SESSION['userId'] = $loggedUserId;
                $this->addInfoMessage("Login successful.");
                $this->redirect("posts");
            }else{
                $this->addErrorMessage("Error: login faild!");
            }
        }
    }

    public function logout()
    {
        session_destroy();
        $this->addInfoMessage("Login successful!");
        $this->redirect("");
    }
}
