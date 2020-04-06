<?php
include 'auth.php';
?>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
    <link rel="stylesheet" href="assets/styles/login.css">
    <title>CDC</title>
  </head>
  <body>
    <div class="login-page-cont">
        <div class="forms-cont" id="signInSection">
            <div class="login-form">
                <form class="form-inputs" name="login" method="POST" action="">
                    <p class="auth-logo">
                        <img src="" alt="Icon" />
                    </p>
                    <div class="form-group">
                        <label class="input-label"><i class="fas fa-user"></i> Email</label>
                        <input type="text" class="form-control" name="username" id="inputEmail"
                            placeholder="Enter your Username" value="" required>
                    </div>
                    <div class="form-group">
                        <label class="input-label" for="inputPassword"><i class="fas fa-key"></i> Password</label>
                        <input type="password" class="form-control" name="password" id="inputPassword"
                            placeholder="Enter your Password" required>
                    </div>
                    <div class="form-group form-check">
                        <p class="remember-check-box">
                            <input type="checkbox" class="form-check-input" name="remember" id="inputRemember" />
                            <label class="check-box fas fa-check" for="inputRemember"></label>
                            <label class="form-check-label" for="inputRemember">Remember me</label>
                        </p>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">Submit</button>
                </form>
            </div>
        </div>
      </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.4/lib/darkmode-js.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.4/lib/darkmode-js.min.js"></script>
<script>
  new Darkmode().showWidget();
</script>

    <script src="assets/styles/nm.js"></script>
<script>
  new Darkmode().showWidget();
</script>

</body>
</html>