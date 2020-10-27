<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Sign in Form</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="../assets/fontawesome/css/all.css">
    <link rel="stylesheet" href="../assets/fontawesome/css/fontawesome.css">
    <link rel="stylesheet" href="../assets/admin/style.css">
</head>
<body>

	<div class="container ">
		<div class="row justify-content-center h-100vh" id="loginbox">
			<div class="col-md-10 my-auto">
                <div class="card-group">
                    <div class="card p-4">
                      <h5 class="text-center">Login Form</h5>
                        <hr class="my-3 ">
                        <form action="#" class="px-3">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" aria-label="Default"                                                                aria-describedby="inputGroup-sizing-default">
                            </div>

                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <spen class="input-group-text">
                                        <i class="fa fa-key"></i>
                                    </spen>
                                </div>
                                <input type="text" class="form-control">
                            </div>

                           <div class="form-group">
                               <div class="float-left">
                                   <div class="input-group mb-3">
                                       <div class="input-group">
                                           <div class="input-group-text">
                                               <input type="checkbox" id="remember" aria-label="Checkbox for following text                                                     input">
                                           </div>
                                           <lable class="ml-2" for="remember">Remember me</lable>
                                       </div>
                                   </div>
                               </div>
                               <div class="float-right">
                                   <a href="jabascript:" id="forgetpass" class="text-decoration-none">Forget password</a>
                               </div>
                           </div>
                            <div class="form-group">
                                <input type="submit" value="Login" class="form-control btn btn-outline-info">
                            </div>
                        </form>
                    </div>
                    <div class="card justify-content-center p-4" style="background: #353A41">
                        <h5 class="text-center text-light">Welcome to sign up!</h5>
                        <hr class="my-3 bg-light">
                        <p class="text-center text-light">Please log in using your email and password. If you haven't                              registered yet, you can register for free.</p>
                        <button class="btn btn-outline-success" id="showsignup">Sign Up</button>
                    </div>
                </div>
			</div>
		</div>

        <div class="row justify-content-center h-100vh" style="display: none" id="signupbox">
            <div class="col-md-10 my-auto">
                <div class="card-group">
                    <div class="card p-4">
                        <h5 class="text-center">Sign Up Form</h5>
                        <hr class="my-3 ">
                        <form action="#" class="px-3" id="register-form">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </div>
                                <input type="text" placeholder="User name" id="name" class="form-control">
                                <div class="invalid-feedback">This name field is required</div>
                            </div>

                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <i class="fa fa-envelope"></i>
                                    </span>
                                </div>
                                <input type="email" id="email" placeholder="Email" class="form-control">
                                <div class="invalid-feedback">This email field is required</div>
                            </div>

                            <div class="input-group form-group">
                                <div class="input-group-prepend">
                                    <spen class="input-group-text">
                                        <i class="fa fa-key"></i>
                                    </spen>
                                </div>
                                <input type="password" id="pass" placeholder="Password" class="form-control">
                                <div class="invalid-feedback">This Password field is required</div>
                            </div>

                            <div class="form-group">
                                <input type="submit" id="registeruser" value="Sign Up" class="form-control btn btn-outline-info">
                            </div>
                        </form>
                    </div>
                    <div class="card justify-content-center p-4" style="background: #353A41">
                        <h5 class="text-center text-light">Welcome back!</h5>
                        <hr class="my-3 bg-light">
                        <p class="text-center text-light">Please log in using your email and password. If you haven't                              registered yet, you can register for free.</p>
                        <button class="btn btn-outline-success" id="signin">Sign In</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center h-100vh" style="display: none" id="forgetpassform">
            <div class="col-md-10 my-auto">
                <div class="card-group">
                    <div class="card p-4">
                        <h5 class="text-center">Forget Password</h5>
                        <hr class="my-3 ">
                        <form action="" class="px-3">
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="inputGroup-sizing-default">
                                        <i class="fa fa-user"></i>
                                    </span>
                                </div>
                                <input type="text" class="form-control" aria-label="Default"                                                                aria-describedby="inputGroup-sizing-default">
                            </div>



                            <div class="form-group">
                                <input type="submit" value="Sign Up" class="form-control btn btn-outline-info">
                            </div>
                        </form>
                    </div>
                    <div class="card justify-content-center p-4" style="background: #353A41">
                        <h5 class="text-center text-light">Reset Password!</h5>
                        <hr class="my-3 bg-light">
                        <p class="text-center text-light">Please log in using your email and password. If you haven't                              registered yet, you can register for free.</p>
                        <button class="btn btn-outline-success" id="back">Back</button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js"></script>
    <script src="../assets/admin/custom.js"></script>
</body>
</html>