<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Admin Login</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</head>

<body>
<div class="login-page bk-img" style="background-image: url(admin/img/adminlogin.jpg);">
  <section class="vh-100">
    <div class="container-fluid h-custom">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-md-9 col-lg-6 col-xl-5">
          <img src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/draw2.webp"
          class="img-fluid" alt="Sample image">
        </div>
        <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">

          <div class="d-flex flex-row align-items-center justify-content-center justify-content-lg-start">
            <p class="lead fw-normal mb-0 me-3">Sign in</p>
            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-facebook-f"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-twitter"></i>
            </button>

            <button type="button" class="btn btn-primary btn-floating mx-1">
              <i class="fab fa-linkedin-in"></i>
            </button>
          </div>

          <div class="divider d-flex align-items-center my-4">
            <p class="text-center fw-bold mx-3 mb-0">Or</p>
          </div>		
        <div class="form-outline mb-4">
          <label for="" class="form-label">Your Email </label>
          <input id="email" type="email" placeholder="Email" name="email" class="form-control form-control-lg">
        </div>
        <div class="form-outline mb-4">
          <label for="" class="form-label">Password</label>
          <input id="password" type="password" placeholder="Password" name="password" class="form-control form-control-lg">
        </div>                  
          <button class="btn btn-primary btn-block"  onclick="loginadmin()">LOGIN</button>
          <p id="demo"></p>
        </div>
      </div>
    </div>
  </section>
</div>
								




<script>
function loginadmin(){
  
 

var email = document.getElementById("email").value;
var password = document.getElementById("password").value;

if(email == "dieynabacoly@gmail.com" && password == "passer@123"){

    window.location.href = "/dashboard1";
}
if(email != "dieynabacoly@gmail.com" && password != "passer@123"){

document.getElementById("demo").innerHTML = "Invalid Credentials";
}
}



</script>
	<!-- Loading Scripts -->
	<script src="admin/js/jquery.min.js"></script>
	<script src="admin/js/bootstrap-select.min.js"></script>
	<script src="admin/js/bootstrap.min.js"></script>
	<script src="admin/js/jquery.dataTables.min.js"></script>
	<script src="admin/js/dataTables.bootstrap.min.js"></script>
	<script src="admin/js/Chart.min.js"></script>
	<script src="admin/js/fileinput.js"></script>
	<script src="admin/js/chartData.js"></script>
	<script src="admin/js/main.js"></script>

</body>

</html>
