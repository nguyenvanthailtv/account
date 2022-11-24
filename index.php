<?php
    session_start();
    require_once 'connect.php';
    connectdb();
    require_once 'function.php';
    $err = [];
    $result =[];
    require_once 'main.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="stylesheet" href="./assets/themify-icons/themify-icons.css">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" ></script>
    <!-- <link rel="stylesheet" href="./assets/js/style.js"> -->

    <title>Document</title>
</head>
<body>


    <form action="" method="post">
        <div class="container">
            <div class="row justify-center">
                <div class="col-3-xl">
                    <h2 class="title">Đăng nhập/Đăng ký</h2>
                </div>
            </div>
            <div class="row justify-center">
                <div class="col-8-xl">
                    <div class="wrapper">
                        <div class="login ">
                            <div class="login__left" >
                                <h1>Đăng Nhập</h1>
                                <div class="social">
                                    <div class="social__item">
                                        <a href=""><i class="ti-facebook"></i></a>
                                    </div>
                                    <div class="social__item">
                                        <a href=""><i class="ti-google"></i></a>
                                    </div>
                                    <div class="social__item">
                                        <a href=""><i class="ti-linkedin"></i></a>
                                    </div>                           
                                </div>
                                <p class="use-acc">
                                    or use your account
                                </p>
                                <input type="text" class="login-email" name='login-email' placeholder="Email...">
                                <?php if(isset($_POST['signIn']) && in_array('lg_err_email_required',$err)): ?>
                                    <span style="font-size: 1.2rem;padding: 0 0 0 20px;color: red;text-align: left;width: 100%;">Email cannot be blank!</span>
                                <?php endif;?>
                                <input type="password" class="login-password" name='login-password' placeholder="Password...">
                                <?php if(isset($_POST['signIn']) && in_array('lg_err_pass_required',$err)): ?>
                                <span style="font-size: 1.2rem;padding: 0 0 0 20px;color: red;text-align: left;width: 100%;">Password cannot be blank!</span>
                                <?php endif;?>

                                <!-- login -->
                                <?php if(isset($_POST['signIn']) && in_array('successful',$result)): ?>
                                <span style="font-size: 1.4rem;padding: 0 0 0 20px;color: red;text-align: left;width: 100%;">
                                    Logged in successfully
                                </span>
                                <?php endif;?>

                                <?php if(isset($_POST['signIn']) && in_array('failure',$result)): ?>
                                <span style="font-size: 1.4rem;padding: 0 0 0 20px;color: red;text-align: left;width: 100%;">
                                    Login failed. Please re-enter!
                                </span>
                                <?php endif;?>
                                <a href="" class="forgot-pass"><p >Forgot your password?</p></a>
                                <button type="submit" id="signIn" name='signIn'>Sign in</button>
                            </div>
                            <div class="login__right">
                                <h1>Hello, friend!</h1>
                                <p>Enter your personal details and start journey with us</p>
                                <a class="btn signUp">Sign up</a>
                            </div>
                        </div>
                        <div class="register">
                                    
                            <div class="register__left">
                                <div class="register__left-wrapper">
                                    <h1>Welcome Back!</h1>
                                    <p>To keep connected with us please login with your personal info</p>
                                    <a class="btn signIn">Sign in</a>
                                </div>
                            </div>
                            <div class="register__right">
                                <h1>Đăng Ký</h1>
                                <div class="social">
                                    <div class="social__item">
                                        <a href=""><i class="ti-facebook"></i></a>
                                    </div>
                                    <div class="social__item">
                                        <a href=""><i class="ti-google"></i></a>
                                    </div>
                                    <div class="social__item">
                                        <a href=""><i class="ti-linkedin"></i></a>
                                    </div>                           
                                </div>
                                <p class="use-acc">
                                    or use your email for registration
                                </p>
                                <input type="text" class="register-username" name="register-username" placeholder="Username...">
                                
                                <?php if(isset($_POST['signUp']) && in_array('rg_err_username_required',$err)): ?>
                                    <span style="font-size: 1.2rem;padding: 0 0 0 20px;color: red;text-align: left;width: 100%;">Username cannot be blank!</span>
                                <?php endif;?>

                                <?php if(isset($_POST['signUp']) && in_array('rg_err_username_min',$err)): ?>
                                    <span style="font-size: 1.2rem;padding: 0 0 0 20px;color: red;text-align: left;width: 100%;">Username cannot be less than 8 characters!</span>
                                <?php endif;?>
                                
                                
                                <input type="Email" class="register-email" name="register-email" placeholder="Email...">
                                
                                <?php if(isset($_POST['signUp']) && in_array('rg_err_email_required',$err)): ?>
                                    <span style="font-size: 1.2rem;padding: 0 0 0 20px;color: red;text-align: left;width: 100%;">Email cannot be blank!</span>
                                <?php endif;?>

                                <?php if(isset($_POST['signUp']) && in_array('rg_err_email_min',$err)): ?>
                                    <span style="font-size: 1.2rem;padding: 0 0 0 20px;color: red;text-align: left;width: 100%;">Email cannot be less than 10 characters!</span>
                                <?php endif;?>

                                <?php if(isset($_POST['signUp']) && in_array('email_failed',$result)): ?>
                                    <span style="font-size: 1.2rem;padding: 0 0 0 20px;color: red;text-align: left;width: 100%;">Email already exists. Please re-enter your email!</span>
                                <?php endif;?>
                                
                                <input type="password" class="register-password" name="register-password" placeholder="Password...">
                                
                                <?php if(isset($_POST['signUp']) && in_array('rg_err_pass_required',$err)): ?>
                                    <span style="font-size: 1.2rem;padding: 0 0 0 20px;color: red;text-align: left;width: 100%;">Password cannot be blank!</span>
                                <?php endif;?>

                                <?php if(isset($_POST['signUp']) && in_array('rg_err_pass_min',$err)): ?>
                                    <span style="font-size: 1.2rem;padding: 0 0 0 20px;color: red;text-align: left;width: 100%;">Password cannot be less than 8 characters!</span>
                                <?php endif;?>

                                <?php if(isset($_POST['signUp']) && in_array('insert_successful',$result)): ?>
                                    <span style="font-size: 1.2rem;padding: 0 0 0 20px;color: red;text-align: left;width: 100%;">account added successfully</span>
                                <?php endif;?>
                                
                                <button type="submit" id="signUp" class="btn-signUp" name="signUp">Sign up</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
    <script src="./assets/js/style.js">
        
// $('.signUp').click(function() {
//     $('.register__left').css({
//         'transform': 'translateX(-100%)',
//         'opacity': '1',
//         'display':'flex',
//     })

//     $('.register__right').css({
//         'transform': 'translateX(0)',
//         'opacity': '1',
//         'display':'flex',
//     })

//     $('.login__left').css({
//         'transform': 'translateX(100%)',
//         'opacity': '0',
//         'display': 'none',
//     })

//     $('.login__right').css({
//         'transform': 'translateX(0)',
//         'opacity': '0',
//         'display': 'none',
//     })

// })


// $('.signIn').click(function() {
//     $('.register__left').css({
//         'transform': 'translateX(0)',
//         'opacity': '0',
//         'display':'none',
//     })

//     $('.register__right').css({
//         'transform': 'translateX(-100%)',
//         'opacity': '0',
//         'display':'none',
//     })

//     $('.login__left').css({
//         'transform': 'translateX(0)',
//         'opacity': '1',
//         'display': 'flex',
//     })

//     $('.login__right').css({
//         'transform': 'translateX(100%)',
//         'opacity': '1',
//         'display': 'flex',
//     })

// })
    </script>
</body>
</html>