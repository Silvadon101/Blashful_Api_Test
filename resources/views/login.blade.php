
<!doctype html>
<html lang="en">
<head>
<title>Sign Up 09</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="css/formstyle.css">
<link rel="stylesheet" href="css/login.css">
<style>

    

.btn.btn-primary {
    background: #e31982 !important;
    border: 1px solid #721ad2 !important;
    color: #fff !important;
}

a {
    -webkit-transition: .3s all ease;
    -o-transition: .3s all ease;
    transition: .3s all ease;
    color: #dcaf25;
}

h5{
    color:deeppink;
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


<form action="login" method="post" class="signup-form">

{{-- <h5>

<center>
<input id="tab-1" type="radio" name="radio" value="user" class="tab-selector-1" checked="checked" />
<span for="tab-1" class="tab-label-1">User</span>

<input id="tab-2" type="radio" name="radio" value="admin" class="tab-selector-2" />
<span for="tab-2" class="tab-label-2" style="color:gold";>Admin</span>
</center>

</h5> --}}
<div class="row justify-content-center">
<div class="col-md-7 col-lg-5">
<div class="login-wrap">
<h3 class="text-center mb-4">Sign Into Your Account</h3>


    <div style="margin:12px;color:red">
        @if(Session::get('fail'))
        {{ Session::get('fail') }}
        @endif
    </div>
   
    @csrf

<div class="form-group mb-3">
<label class="label" for="email">Username</label>
<input type="text" name="username" class="form-control" placeholder="john">
<span class="icon fa fa-paper-plane-o"></span>
<span style="color:red">@error('username'){{$message}}@enderror</span> 
</div>
<div class="form-group mb-3">
<label class="label" for="password">Password</label>
<input id="password" name="password" type="password" class="form-control" placeholder="Password">
<span toggle="#password" class="fa fa-fw fa-eye field-icon toggle-password"></span>
<span class="icon fa fa-lock"></span>
<span style="color:red">@error('password'){{$message}}@enderror</span> 
</div>

<div class="form-group">
<button type="submit" name="submit" class="form-control btn btn-primary submit px-3">Sign In</button>
<button type="reset" name="submit" class="form-control btn btn-primary submit px-3">Cancel</button>
<p style="color:white;">Create An Account! <a href='/signup'>Sign Up</a></p>

</div>
</form>
</div>
</div>
</div>
</div>
</section>
<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"66f71a16faa63711","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.6.0","si":10}'></script>
</body>
</html>
