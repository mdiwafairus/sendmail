<?php require_once("../Auth/authController.php"); ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Send Mail</title>
  </head>
  <body>
      <div class="container">
        <div class="col-md-12 mt-5">
          <div class="">
            <h3>Send Email</h3>
            <form action="../API/sendemail.php" method="POST">
              <div class="form-group">
                <label for="email">Email address</label>
                <input type="email" class="form-control" id="Email" name="email" aria-describedby="emailHelp" placeholder="Enter email" required>
              </div>

              <div class="form-group">
                <label for="subject">Subject</label>
                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
              </div>

              <div class="form-group">
                <label for="message">Massage</label>
                <input type="text" class="form-control" id="body" name="body" placeholder="Message" required>
              </div>

              <div class="form-group">
                <label for="token">Token</label>
                <input type="text" class="form-control" id="body" name="token" placeholder="Token" required>
              </div>

              <?php if(isset($_SESSION['Message'])){ ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                  <strong><?php  echo $_SESSION['Message']; unset($_SESSION['Message']); ?></strong> 
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
              <?php } ?>

              <button type="submit" class="btn btn-success btn-block">Send</button>
              <a href="../home.php" class="btn btn-primary btn-block">Back</a>
            </form>
          </div>
        </div>
      </div>


    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>