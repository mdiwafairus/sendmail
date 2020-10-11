<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Register</title>
  </head>
  <body>
      <div class="container">
  		<a href="index.php"> <- Back </a>
          	<h2>Register</h2>
			<form action="Auth/registerController.php" method="POST">
				<div class="form-group">
				  <label for="name">Name</label>
				  <input type="text" class="form-control" id="name" name="name"  placeholder="Name">
				</div>
				<div class="form-group">
				  <label for="email">Email</label>
				  <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Email ">
				</div>
				<div class="form-group">
				  <label for="Password">Password</label>
				  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
				</div>
				<div class="form-group">
				  <label for="Password">Confirm Password</label>
				  <input type="password" class="form-control" id="password" name="password2" placeholder="Password">
				</div>
				<input type="submit" class="btn btn-success btn-block" name="register" value="Daftar" />
			</form>
      </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>