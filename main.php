<?php

    if(isset($_POST['signIn'])){

        $email = $_POST['login-email'];
        $pass = $_POST['login-password'];

        if(empty($email)){
            $err[] = 'lg_err_email_required';
        }

        if(empty($pass)){
            $err[] = 'lg_err_pass_required';
        }
        
        $kq = getdata($email,$pass);

        if(empty($err)){
            if(count($kq) > 0){
                $result['result'] = 'successful';
            }
            else{
                $result['result'] = 'failure';
            }
        }
    }

    if(isset($_POST['signUp'])){
        $email = trim($_POST['register-email']);
        $pass = trim($_POST['register-password']);
        $username = trim($_POST['register-username']);

        if(empty($email)){
            $err[] = 'rg_err_email_required';
        }
        elseif(strlen($email) < 10){
            $err[] = 'rg_err_email_min';
        }
        if(empty($pass)){
            $err[] = 'rg_err_pass_required';
        }
        elseif(strlen($pass) < 8){
            $err[] = 'rg_pass_email_min';
        }

        if(empty($username)){
            $err[] = 'rg_err_username_required';
        }
        elseif(strlen($username) < 8){
            $err[] = 'rg_err_username_min';
        }

        if(empty($err)){
            $result[] = insertdata($username,$email,$pass);
            // Email already exists. Please re-enter your email!
        }
    }
?>