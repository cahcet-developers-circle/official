<?php 
  include 'connection.php';
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
    integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <!-- font-awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css">
  <!-- self -->
  <link rel="stylesheet" href="assets/styles/nav.css">
  <link rel="stylesheet" href="assets/styles/main.css">
  <link rel="stylesheet" href="assets/styles/events.css">
  <!-- fonts -->
  <link href="https://fonts.googleapis.com/css?family=Old+Standard+TT&display=swap" rel="stylesheet">


  <title>C.D.C</title>
  <style>
    .tag1,
    .tag2 {
      font-family: 'Raleway', sans-serif;
      position: relative;
      text-align: center;
      font-weight: 200;
      margin: 0;
      top: 30%;
    }

    .tag1 {
      color: rgb(255, 255, 255);
      font-size: 4em;
    }

    .tag2 {
      color: #f7f7f7;
      font-size: 2em;
    }
  </style>
</head>

<body>
  <header>
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
      <a class="navbar-brand" href="#"><img class="logo" src="assets/images/logo.png"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ml-auto ul">
          <li class="nav-item active">
            <a class="nav-link a" href="index.html"><i class="fa fa-user"></i> Who are we <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link acv" href="#"><i class="fa fa-icons"></i> Events</a>
          </li>
          <li class="nav-item">
            <a class="nav-link a" href="contact.html"><i class="fa fa-paper-plane"></i> Reach Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link a" href="login.php"><i class="fa fa-user-alt"></i> Admin</a>
          </li>
          <span class="last"></span>
        </ul>
      </div>
    </nav>

    <section class="landscreen2">
      <h1 class="tag1">
        <span class="txt-rotate" data-period="2000"
          data-rotate='["Innovators are here.", "Programmers are here.", "Critical thinkers are here."]'></span>
      </h1>
      <h2 class="tag2" style="font-size: 3rem">Where are you !!!</h2>
    </section>
  </header>
  <section>
    <div class="container-fluid">
    <?php
      include 'connection.php';
      $sql ="SELECT * FROM `images`";
      $result=mysqli_query($conn,$sql);
      while($row=mysqli_fetch_array($result)){
        echo "<div id='img_div'>";
            echo "<img src='assets/eventposter/".$row['image']."' class='img-fluid' alt='Events'>";
            echo "<h3>".$row['text']."</h3>";
            echo "</div>";
      }
    ?>
    <a href="register.php" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Register Now</a>
    <br><br>
    </div>

  </section>

  <!-- Footer -->
  <footer class="page-footer font-small cyan darken-3">
    <!-- Footer Elements -->
    <div>
      <!-- Grid row-->
      <h2 style="font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;">We're very active on social media</h2>
      <div class="row">

        <!-- Grid column -->
        <div class="col-md-12 py-5">
          <div class="mb-3 flex-center sclmda">

            <!-- Facebook -->
            <a class="fb-ic" href="https://www.facebook.com/cahcetdeveloperscircle/">
              <i class="fab fa-facebook-f fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:rgb(70, 199, 241);"> </i>
            </a>
            <!-- Twitter -->
            <a class="tw-ic">
              <i class="fab fa-twitter fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:rgb(25, 221, 221);"> </i>
            </a>
            <!-- Google +-->
            <a class="gplus-ic">
              <i class="fab fa-google-plus-g fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:rgb(247, 26, 26);"> </i>
            </a>
            <!--Linkedin -->
            <a class="li-ic">
              <i class="fab fa-linkedin-in fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:royalblue;"> </i>
            </a>
            <!--Instagram-->
            <a class="ins-ic">
              <i class="fab fa-instagram fa-lg white-text mr-md-5 mr-3 fa-2x" style="color:purple;"> </i>
            </a>
            <!--Youtube-->
            <a class="pin-ic" href="https://www.youtube.com/channel/UCBkDhbm4TGIB994SdJjC1_g">
              <i class="fab fa-youtube fa-lg white-text fa-2x" style="color: red;"> </i>
            </a>
          </div>
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row-->

    </div>
    <!-- Footer Elements -->

    <!-- Copyright -->
    <div class="footer-copyright text-center py-3">
      © 2020 Copyright CAHCET Developers Circle. All Rights Reserved
    </div>
    <div class="footer-copyright text-center py-3">
      Made with <i class="fa fa-heart" style="color: red;" aria-hidden="true"></i> by <a href="https://fireloopdevelopers.org">Fireloop Developers</a> and CDC Development Team
    </div>
    <!-- Copyright -->

  </footer>
  <script>
    var TxtRotate = function (el, toRotate, period) {
      this.toRotate = toRotate;
      this.el = el;
      this.loopNum = 0;
      this.period = parseInt(period, 10) || 2000;
      this.txt = '';
      this.tick();
      this.isDeleting = false;
    };

    TxtRotate.prototype.tick = function () {
      var i = this.loopNum % this.toRotate.length;
      var fullTxt = this.toRotate[i];

      if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
      } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
      }

      this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

      var that = this;
      var delta = 200 - Math.random() * 100;

      if (this.isDeleting) { delta /= 2; }

      if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
      } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 150;
      }

      setTimeout(function () {
        that.tick();
      }, delta);
    };

    window.onload = function () {
      var elements = document.getElementsByClassName('txt-rotate');
      for (var i = 0; i < elements.length; i++) {
        var toRotate = elements[i].getAttribute('data-rotate');
        var period = elements[i].getAttribute('data-period');
        if (toRotate) {
          new TxtRotate(elements[i], JSON.parse(toRotate), period);
        }
      }
      // INJECT CSS
      var css = document.createElement("style");
      css.type = "text/css";
      css.innerHTML = ".txt-rotate > .wrap { border-right: 0.08em solid #666 }";
      document.body.appendChild(css);
    };


  </script>
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
    integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
    integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6"
    crossorigin="anonymous"></script>
  <script src="assets/styles/nav.js"></script>
  <script src="assets/styles/events.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/darkmode-js@1.5.4/lib/darkmode-js.min.js"></script>
  <script src="assets/styles/nm.js"></script>
<script>
  new Darkmode().showWidget();
</script>

</body>
<!-- https://codepen.io/tag/card/?cursor=ZD0xJm89MCZwPTg= -->
</html>