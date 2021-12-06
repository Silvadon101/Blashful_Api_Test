
<!doctype html>
<html lang="en">
<head>
<title>Sign Up 09</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/formstyle.css">

<style>

    .btn.btn-primary {
        background: #e31982 !important;
        border: 1px solid #721ad2 !important;
        color: #fff !important;
    }


    style attribute {
    color: white !important;
}
    a {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    color: #dcaf25;
}

    </style>
</head>
<body class="img" style="background-image: url(images/girljpg.jpg);">
<section class="ftco-section">
<div class="container">
<div class="row justify-content-center">
<div class="col-md-6 text-center mb-5">
<h2 class="heading-section">B'Lashful Beauty Bar</h2>
</div>
</div>
<div class="row justify-content-center">
<div class="col-md-7 col-lg-5">
<div class="login-wrap">
<h3 class="text-center mb-4">Create Your Account</h3>


<form action="signup" method="post" class="signup-form">
@csrf 


<div class="form-group mb-3">
<label class="label" >Full Name</label>
<input type="text" name="name" class="form-control" placeholder="John">
<span class="icon fa fa-user-o"></span>
<span style="color:red">@error('name'){{$message}}@enderror</span> 

</div>
<span style="color:red">
  
<div class="form-group mb-3">
    <label class="label" >Username</label>
    <input type="text" name="username" class="form-control" placeholder="John Doe">
    <span class="icon fa fa-user-o"></span>
    <span style="color:red">@error('username'){{$message}}@enderror</span> 
    
    </div>
    {{-- Error To Check If Email Is Already Exsisting --}}
    <span style="color:red">
        @if(Session::get("fail"))
        {{ Session::get ("fail") }}
        @endif
<div class="form-group mb-3">
<label type="email" class="label">Email Address</label>
<input type="text" class="form-control" name="email" placeholder="johndoe@gmail.com">
<span class="icon fa fa-paper-plane-o"></span>
<span style="color:red">@error('email'){{$message}}@enderror</span> 


</div>
<div class="form-group mb-3">
<label class="label" >Password</label>
<input id="password" name="password" type="password" class="form-control" placeholder="Password">
<span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
<span class="icon fa fa-lock"></span>
<span style="color:red">@error('password'){{$message}}@enderror</span> 

</div>
<div class="form-group mb-3">
<label class="label" for="password">ConfirmPassword</label>
<input id="password-confirm"  name="password_confirmation" type="password" class="form-control" placeholder="Password">
<span toggle="#password-confirm" class="fa fa-fw fa-eye field-icon toggle-password"></span>
<span class="icon fa fa-lock"></span>
<span style="color:red">@error('cpassword'){{$message}}@enderror</span> 

</div>
<div class="form-group">
<button type="submit" name="submit" class="form-control btn btn-primary submit px-3">Sign Up</button>
<button type="reset" name="submit" class="form-control btn btn-primary submit px-3">Cancel</button>
</div>
</form>
<p style="color:white;">I'm already a member! <a href='/login'>Sign In</a></p>
<script>
    var msg = '{{Session::get('alert')}}';
    var exist = '{{Session::has('alert')}}';
    if(exist){
      alert(msg);
      window.location.href = "login";
    }
  </script>
</div>
</div>
</div>
</div>
</section>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
</body>
</html>
